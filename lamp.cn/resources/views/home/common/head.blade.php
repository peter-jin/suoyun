<!DOCTYPE html>
<html lang="en">
    <head>
        <title>索云数据 @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Styles -->
        <link href='/H_home/vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='/H_home/https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='/H_home/https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='/H_home/https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
        <link href="/H_home/fonts/Stroke-Gap-Icons-Webfont/style.css" rel="stylesheet" type="text/css" />

        <!-- components -->
        <link href="/H_home/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/H_home/vendor/owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" /> 
        <link href="/H_home/vendor/slider-pro/dist/css/slider-pro.min.css" rel="stylesheet" type="text/css" /> 
        <link href="/H_home/vendor/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css" /> 
        <link href="/H_home/vendor/animate.css/animate.min.css" rel="stylesheet" type="text/css" /> 
        <link href="/H_home/vendor/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" /> 

        <link href="/H_home/css/main.css" rel="stylesheet" type="text/css" />

    </head>
    <body data-scrolling-animations="true">

        <div id="page-preloader"><span class="spinner"></span></div>

        <!-- ========================== -->
        <!-- Navigation -->
        <!-- ========================== -->
        <header class="header scrolling-header">
            <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container relative-nav-container">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="home.html">
                        <img class="normal-logo hidden-xs" src="/home/img/logo.png" alt="logo" />
                        <img class="scroll-logo hidden-xs" src="/home/img/logo-dark.png" alt="logo" />
                        <img class="scroll-logo visible-xs-block" src="/home/img/logo-free.png" alt="logo" />
                    </a>
                    <ul class="nav navbar-nav navbar-right nav-icons wrap-user-control">
                        <li>
                            <a id="search-open" href="#fakelink"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="open-signup">
                            <a href="#fakelink"><i class="fa fa-user"></i></a>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border"> 
                            <li><a href="{{url('/')}}">首 页</a></li>
                            <li><a href="{{url('/product')}}">产品中心</a></li>
                            <li><a href="services.html">新闻中心</a></li>
                            <li><a href="contact.html">解决方案</a></li>
                            <li><a href="contact.html">培训中心</a></li>
                            <li><a href="contact.html">服务与支持</a></li>
                            <li><a href="contact.html">关于我们</a></li>
                            <li><a href="contact.html">加入我们</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-search ">
                    <div class="container">
                        <form>
                            <div class="input-group">
                                <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="reset" class="btn search-close" id="search-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </header><!--./navigation -->
