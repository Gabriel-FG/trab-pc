<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\Posts;
use blog\Comentarios;


class PostsController extends Controller
{

    private $posts;
    private $comment;

    public function __construct(Posts $posts,
                                Comentarios $comment){
        $this->posts = $posts;
        $this->comment = $comment;
    }

    public function posts(){

        $posts = $this->posts->paginate(10);
        return view('blog.index',
              compact('posts'));


    }

    public function detail($post_id){

        $post = $this->posts->find($post_id);
        return view('blog.samplePost', compact('post'));

    }

    public function form(){

        return view('blog.postCreate');

    }

    public function create(Request $request){

        $this->posts->create($request->all());

        return redirect('/');

    }

    public function comment(Request $request){

        $this->comment->create($request->all());

        return redirect()->route('/detail',
            $request->post_id);

    }

    public function edit($id){

        $post = $this->posts->find($id);

        return view('blog.edit', compact('post'));

    }

    public function update($id, Request $request){

        $this->posts->find($id)->update($request->all());

        return redirect()->route('admin.home');
    }

    public function delete($id){

        $this->posts->find($id)->forceDelete();

        return redirect()->route('admin.home');
    }
}
