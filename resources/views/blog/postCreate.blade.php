<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Materilize themes</title>

    <!-- CSS  -->
    <link href="{{asset('blog/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('blog/css/index.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="{{asset('blog/css/font-awesome-4.3.0/css/font-awesome.min.css')}}">
    <link rel="shortcut icon" href="{{asset('blog/images/favicon (9).ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('blog/images/favicon (9).ico')}}" type="image/x-icon">
</head>
<body>
<div id="navbar" class="navbar-fixed scrollspy">
    <nav class="grey darken-2">
        <div class="nav-wrapper container">
            <div class="container"> <a href="{{url('/')}}" class="brand-logo">Logo</a></div>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <ul class="right hide-on-med-and-down">

                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">Quem Somos</a></li>
                <li><a href="{{url('/posts')}}">Posts</a></li>
                <li><a href="{{url('/contact')}}">Contato</a></li>


            </ul>
            <ul class="right side-nav" id="mobile-demo">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">Quem Somos</a></li>
                <li><a href="{{url('/posts')}}">Criar Post</a></li>
                <li><a href="{{url('/contact')}}">Contato</a></li>

            </ul>
        </div>
    </nav>
</div>

<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container valign">
            <br><br>
            <h1 class="header center grey-text text-darken-3">Criar Post</h1>
            <div class="row center">
                <h5 class="header col s12 light grey-text text-darken-3">Blog Web Fasa</h5>
            </div>
            <div class="row center">
                <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-3 head-link"><i class="fa fa-angle-double-down"></i></a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{asset('blog/images/contact1.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="startPosts">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col s12 m10 offset-m1 l9 offset-l1">

            <form class="col s12" action="/post/create" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="titulo" id="message-sub" type="text" class="validate">
                        <label for="message-sub">Título</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="conteudo" id="text_area" class="materialize-textarea"></textarea>
                        <label for="text_area">Conteúdo</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="waves-effect waves-light btn">Enviar<i class="mdi-content-send right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="page-footer grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col s12 l4 m10">
                <h5 class="white-text">Follow "BlogName"</h5>
                <p class="white-text">Get every new post delivered to your inbox.</p>
                <form>

                    <div class="input-field">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="icon_prefix" type="email" class="validate">
                        <label for="icon_prefix">Email</label>
                    </div>

                </form>

                <a class="waves-effect waves-light btn">Sign Up
                    <i class="fa fa-sign-in right"></i></a>
            </div><!--col-->


            <div id="categories" class="col l3 offset-l1 s12 m8">
                <h5 class="white-text">Categories</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Category1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Category2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Category3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Category4</a></li>
                </ul>
            </div><!--col-->



            <div class="col l3 s12 m8">
                <h5 class="white-text">Archives</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">March 2015</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">April 2015</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">May 2015</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">June 2015</a></li>
                </ul>
            </div><!--col-->

        </div><!--row-->

        <div class="row">
            <div class="col s12 l3 offset-l5">


                <a href="#"><i style="font-size: 38px;" class="fa fa-facebook-square"></i></a> &nbsp;&nbsp;&nbsp;
                <a href="#"><i style="font-size: 38px;" class="fa fa-twitter-square"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="#"><i style="font-size: 38px;" class="fa fa-google-plus-square"></i></a>
            </div>

        </div><!--row-->
    </div><!--conatiner-->
    <div class="footer-copyright">
        <div class="container">
            <p>Copyright © Your website name</p>
            <br>
        </div>
    </div>
</footer>


<!--  Scripts-->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('blog/js/materialize.js')}}"></script>
<script src="{{asset('blog/js/init.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.button-collapse').sideNav();
    });
</script>
<script>
    $('.head-link').click(function(e) {
        e.preventDefault();

        var goto = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(goto).offset().top
        }, 800);
    });

</script>

</body>
</html>