<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Gate;
use blog\Posts;

class HomeController extends Controller
{

    private $posts;

    public function __construct(Posts $posts){
        $this->posts = $posts;

    }


    public function index()
    {
        if((Auth()->check())){

            $posts = $this->posts->paginate(10);
            return view('home',
                compact('posts'));

        }

        return redirect(env('URL_ADMIN_LOGIN'));
    }
}
