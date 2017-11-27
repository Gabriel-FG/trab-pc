@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administração</div>

                <script language="Javascript">
                    function confirmacao(id) {
                        var resposta = confirm("Deseja remover esse registro?");
                        console.log(id);

                        if (resposta == true) {
                            window.location.href="delete/"+id;
                        }
                    }
                </script>

                <div class="panel-body">
                    <table class=“table”>
                        <tr>
                            <th>Código</th>
                            <th>Título</th>
                            <th>&nbsp &nbsp Ação</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->titulo}}</td>

                                <td>

                                    &nbsp &nbsp<a href="{{route('admin.edit', ['id'=>$post->id])}}" class="btn btn-default">Modificar</a>
                                    &nbsp &nbsp<a onclick="confirmacao({{$post->id}})" href="javascript:func()" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $posts->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
