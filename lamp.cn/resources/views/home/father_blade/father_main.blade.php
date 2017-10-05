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
        <!-- Navigation 导航栏 -->
        <!-- ========================== -->
        <header class="header scrolling-header">
            <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container relative-nav-container">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="{{'/'}}">
                        <img class="normal-logo hidden-xs" src="/H_home/img/logo.png" alt="logo" />
                        <img class="scroll-logo hidden-xs" src="/H_home/img/logo-dark.png" alt="logo" />
                        <img class="scroll-logo visible-xs-block" src="/H_home/img/logo-free.png" alt="logo" />
                    </a>
                    <ul class="nav navbar-nav navbar-right nav-icons wrap-user-control">
                        <li>
                            <a id="search-open" href="#fakelink"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="open-signup">
                            <a href="{{'/home/login'}}"><i class="fa fa-user"></i></a>
                        </li>
                    </ul>
                  
                    <!-- ========================== -->
                    <!-- 首页登录框 -->
                    <!-- ========================== -->
                    <div  id="win"  style="display:none; POSITION:absolute; left:50%; top:200%; width:600px; height:400px; margin-left:-300px; padding-top: 50px;  /*border:1px solid #888;*/ background-color:#FF6400; text-align:center"  ><h3 id="loginh3">会员登录</h3>

                        <form action="" method="post">
                            {{csrf_field()}}
                             <div class="notibar">
                                    <a href="javascript:closeLogin();" class="close"></a>
                            </div><!-- notification msgsuccess -->
                            <br />
                            <br />
                            
                            <p><input class="logininput" type="text" name="name" /></p>

                            <p><input class="logininput" type="text" name="password"  /></p>

                            <p><span><input class="logininput" style="width: 100px; margin-left: -58px;" type="text" name="code" value=""><b>123456</b></span></p>
                            <p class="stdformbutton">
                                <button class="submit radius2">登&nbsp;&nbsp;录</button>
                            </p>

                            
                        </form>   

                       <!--  <a href="javascript:closeLogin();">关闭登录框</a> -->
                    </div>
                    <script>
                        function openLogin(){
                           document.getElementById("win").style.display="";
                        }
                        function closeLogin(){
                           document.getElementById("win").style.display="none";
                        }
                    </script>
                  <!--   <a href="javascript:openLogin();"><i class="fa fa-user"></i></a> -->
                    <!-- ========================== -->
                    <!-- 首页登录框END -->
                    <!-- ========================== -->  
            
                    <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border"> 
                            <li><a href="{{url('/')}}">首 页</a></li>
                            <li><a href="{{url('/home/service')}}">服务与支持</a></li>
                            <li><a href="{{url('/home/train')}}">培训中心</a></li>
                            <li><a href="{{url('/home/solution')}}">解决方案</a></li>
                            <li><a href="{{url('/home/news')}}">新闻中心</a></li>
                            <li><a href="{{url('/home/product')}}">产品中心</a></li>
                            <li><a href="{{url('/home/about')}}">关于我们</a></li>
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
        </header><!--./navigation 导航栏结束 -->


        <!-- ========================== -->
        <!-- HOME - HEADER 头 -->
        <!-- ========================== -->
        <section class="top-header home-header with-bottom-effect transparent-effect dark">
            <div class="bottom-effect"></div>
            <div class="header-container">  
                <div class="wrap-section-slider" id="topSlider">
                    <div class="sp-slides">
                        <div class="slide-item sp-slide">
                            <div class="slide-image">
                                <img src="/H_home/img/sections/home-top-background.jpg"  alt="" />
                            </div>
                            <div class="slide-content ">
                                <p class="top-title sp-layer"  data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="100" >索云数据</p>
                                <div class="title sp-layer" data-show-transition="right" data-hide-transition="up" data-show-delay="500" data-hide-delay="150">为你提供更有效的ICT产品和服务</div>
                                <div class="under-title sp-layer" data-show-transition="up" data-hide-transition="up" data-show-delay="600" data-hide-delay="200">共建更美好的智慧城市</div>
                                <div class="controls sp-layer" data-show-transition="up" data-hide-transition="up" data-show-delay="800" data-hide-delay="250">
                                    <a href="#" class="btn btn-primary">&nbsp;&nbsp;现在开始&nbsp;&nbsp;</a>
                                    <a href="#" class="btn btn-info">&nbsp;&nbsp;了解更多&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item sp-slide">
                            <div class="slide-image">
                                <img src="/H_home/img/sections/section-11.jpg" alt="" />
                            </div>
                            <div class="slide-content sp-layer">
                                <p class="top-title sp-layer"  data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="100" >云领未来</p>
                                <div class="title sp-layer" data-show-transition="right" data-hide-transition="up" data-show-delay="500" data-hide-delay="150">新ICT 迈向数字化转型之路</div>
                                <div class="under-title sp-layer" data-show-transition="up" data-hide-transition="up" data-show-delay="600" data-hide-delay="200">共建更美好的全联接世界</div>
                                <div class="controls sp-layer" data-show-transition="up" data-hide-transition="up" data-show-delay="800" data-hide-delay="250">
                                    <a href="#" class="btn btn-primary">&nbsp;&nbsp;现在开始&nbsp;&nbsp;</a>
                                    <a href="#" class="btn btn-info">&nbsp;&nbsp;了解更多&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

        <!--./container 容器 -->
@section('content')
        <!-- ========================== -->
        <!-- HOME - FEATURES 解决方案 -->
        <!-- ========================== -->
        <section class="features-section">
            <div class="container">
                <div class="section-heading " >
                    <div class="section-title">解决方案</div>
                    <div class="section-subtitle">新ICT一站式解决方案</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeIn">
                        <article>
                            <div class="feature-item ">
                                <div class="wrap-feature-icon">
                                    <div class="feature-icon">
                                        <span class="icon icon-Carioca"></span>
                                    </div>
                                </div>
                                <div class="title">先进的技术</div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit sed don eiusmod tempor enim
                                    minim veniam quis notrud exercitation
                                </div>
                            </div>
                        </article>
                    </div> 
                    <div class="col-md-3 col-sm-6 wow fadeIn">
                        <article>
                            <div class="feature-item active">
                                <div class="wrap-feature-icon">
                                    <div class="feature-icon">
                                        <span class="icon icon-Heart"></span>
                                    </div>
                                </div>
                                <div class="title">定制化解决方案</div>
                                <div class="text">
                                    Amco laboris nisi ut aliquip xea commodo
                                    consequat. Duis aute irure dolor reprehenderit
                                    voluptate velit esse cillum dolore fugiat
                                </div>
                            </div>
                        </article>
                    </div> 
                    <div class="col-md-3 col-sm-6 wow fadeIn">
                        <article>
                            <div class="feature-item">
                                <div class="wrap-feature-icon">
                                    <div class="feature-icon">
                                        <span class="icon  icon-Tools"></span>
                                    </div>
                                </div>
                                <div class="title">服务全面</div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit sed don eiusmod tempor enim
                                    minim veniam quis notrud exercitation
                                </div>
                            </div>
                        </article>
                    </div> 
                    <div class="col-md-3 col-sm-6 wow fadeIn">
                        <article>
                            <div class="feature-item">
                                <div class="wrap-feature-icon">
                                    <div class="feature-icon">
                                        <span class="icon icon-Blog"></span>
                                    </div>
                                </div>
                                <div class="title">100% 响应</div>
                                <div class="text">
                                    Amco laboris nisi ut aliquip xea commodo
                                    consequat. Duis aute irure dolor reprehenderit
                                    voluptate velit esse cillum dolore fugiat
                                </div>
                            </div>
                        </article>
                    </div> 
                </div>
            </div>
        </section>


        <!-- ========================== -->
        <!-- HOME - LAPTOPS 笔记本电脑 -->
        <!-- ========================== -->
        <section class="laptops-section">
            <div class="container">
                <div class="laptops text-center wow fadeInUp" data-wow-duration="1s">
                    <img src="/H_home/img/laptop.jpg" alt="" class="img-responsive" />
                </div>
            </div>
            <div class="container">
                <div class="content-logo text-center wow fadeInUp"  data-wow-duration="1s">
                    <img src="/H_home/img/content-logo.png" alt="" class="img-responsive" />
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - AREAS OF EXPERTISE 擅长的领域 -->
        <!-- ========================== --> 
        <section class="areas-section with-icon with-top-effect">
            <div class="section-icon"><span class="icon icon-Umbrella"></span></div>
            <div class="container"> 
                <div class="row">
                    <div class="col-md-7 col-sm-7 text-right">
                        <div class="clearfix " style="padding-right: 3px;">
                            <div class="above-title">我们的主张 & 交付</div>
                            <h4>专业领域</h4>
                        </div>
                        <div><em>为客户提供优质的产品与便捷的服务</em></div>
                        <div class="design-arrow inline-arrow"></div>
                        <p class="large">Quis nostrud exercitation ullamco laboris nisi commodo consequat duis aute
                            sed ipsum airure dolor in reprehenderit in voluptate velit essl</p>
                        <p>Amco laboris nisi ut aliquip xea commodo consequat. Duis aute irure dolor reprehenderit voluptate
                            velit esse cillum dolore fugiat Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud sed ipsum dui
                            suit exercitation ullamco laboris nisi Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-md-5 col-sm-5 text-center">
                        <img src="/H_home/img/areas.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - ACHIEVEMENTS 成绩案例 -->
        <!-- ========================== -->
        <section class="achievements-section with-bottom-effect dark dark-strong">
            <div class="bottom-effect"></div>
            <div class="container dark-content">
                <div class="row list-achieve">
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="0.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Wallet"></span>
                                </div>
                                <div class="count">561</div>
                                <div class="name">项目交付</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="1.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Cup"></span>
                                </div>
                                <div class="count">24</div>
                                <div class="name">曾获奖项</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="2.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Like"></span>
                                </div>
                                <div class="count">160</div>
                                <div class="name">满意的客户</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="3.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Users"></span>
                                </div>
                                <div class="count">285</div>
                                <div class="name">员工工作</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - LATEST WORKS 最新解决方案 -->
        <!-- ========================== -->
        <section class="latest-works-section clearfix">
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">经销产品</div>
                    <div class="section-subtitle">新ICT融合全联接解决方案</div>
                    <div class="design-arrow"></div>
                </div>
            </div>

            <div class="scroll-pane ">
                <div class="scroll-content">
                    <div class="scroll-content-item  ">
                        <a href="img/img3.jpg" class="fancybox">
                            <img src="/H_home/img/img3.jpg" alt="" />
                        </a>
                        <div class="name">数通产品</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img4.jpg" class="fancybox">
                            <img src="/H_home/img/img4.jpg" alt="" />
                        </a>
                        <div class="name">IT产品</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img1.jpg" class="fancybox">
                            <img src="/H_home/img/img1.jpg" alt="" />
                        </a>
                        <div class="name">安全产品</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img2.jpg" class="fancybox">
                            <img src="/H_home/img/img2.jpg" alt="" />
                        </a>
                        <div class="name">视讯语音</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img3.jpg" class="fancybox">
                            <img src="/H_home/img/img3.jpg" alt="" />
                        </a>
                        <div class="name">华为认证培训</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img3.jpg" class="fancybox">
                            <img src="/H_home/img/img3.jpg" alt="" />
                        </a>
                        <div class="name">云服务</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img4.jpg" class="fancybox">
                            <img src="/H_home/img/img4.jpg" alt="" />
                        </a>
                        <div class="name">dahls 160</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img1.jpg" class="fancybox">
                            <img src="/H_home/img/img1.jpg" alt="" />
                        </a>
                        <div class="name">dahls 160</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img2.jpg" class="fancybox">
                            <img src="/H_home/img/img2.jpg" alt="" />
                        </a>
                        <div class="name">dahls 160</div> 
                    </div>
                    <div class="scroll-content-item  ">
                        <a href="img/img3.jpg" class="fancybox">
                            <img src="/H_home/img/img3.jpg" alt="" />
                        </a>
                        <div class="name">dahls 160</div> 
                    </div>
                </div>
                <div class="scroll-bar-wrap ">
                    <div class="scroll-bar"></div>
                </div>
            </div>
        </section>


        <!-- ========================== -->
        <!-- HOME - STEPS 步骤计划 -->
        <!-- ========================== -->
        <section class="steps-section with-icon ">
            <div class="section-icon"><span class="icon icon-Umbrella"></span></div>
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">华为培训</div>
                    <div class="section-subtitle">为新ICT时代培养高新技术人才,成就你的高薪之路</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="row steps-list">
                    <div class="col-md-4 col-sm-4 col-xs-4 wow fadeIn" >
                        <div class="step-item">
                            <div class="item-icon" data-count="1">
                                <span class="icon icon-Pencil"></span>
                            </div>
                            <div class="item-text">
                                <h5>观察 &amp; <br />
                                    实地勘察 .
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="step-item invert">
                            <div class="item-icon" data-count="2">
                                <span class="icon icon-Glasses"></span>
                            </div>
                            <div class="item-text">
                                <h5>思考 &amp; <br />
                                    具体分析 .
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="step-item">
                            <div class="item-icon" data-count="3">
                                <span class="icon icon-Plaine"></span>
                            </div>
                            <div class="item-text">
                                <h5>守信 &amp; <br />
                                    完美交付 .
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container results-container">
                <div class="row">
                    <div class="col-md-6  col-sm-6">
                        <ul class="skills">
                            <li data-percent="75" class="skills-animated ">
                                <span>红帽培训</span>
                                <div class="progress" >
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">98</span>%
                                    </div>
                                </div>
                            </li>
                            <li data-percent="90" class="skills-animated orange">
                                <span>数通培训</span>
                                <div class="progress" >
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">100</span>%
                                    </div>
                                </div>
                            </li>
                            <li data-percent="55" class="skills-animated">
                                <span>云计算培训</span>
                                <div class="progress" >
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">100</span>%
                                    </div>
                                </div>
                            </li>
                            <li data-percent="85" class="skills-animated orange">
                                <span>等级考试</span> 
                                <div class="progress">
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">99</span>%
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="results-description" >
                            <h5 class="italic-title">每一位学院对我们都很重要!</h5>
                            <h4>我们优秀的金牌讲师让每一个客户满意!!
                            </h4>
                            <p>Amco laboris nisi ut aliquip xea commodo consequt. Duis aute irure dolor reprehenderit voluptate velit esse cillum dolore
                                fugiat lore ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua ut enim ad mid veniam quis nostrud exercitation ullamco laboris nisid. Lorem ipsum dolor sit amet consectetur adip
                                isicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - BROWSERS 浏览器 -->
        <!-- ========================== -->
      <!--   <section class="browsers-section with-bottom-effect ">
            <div class="bottom-effect"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/H_home/img/browsers-image.png" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ========================== -->
        <!-- HOME - SERVICES 服务 -->
        <!-- ========================== -->
        <section class="services-section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="service-item">
                            <div class="media-left">
                                <div class="wrap-service-icon">
                                    <div class="service-icon">
                                        <span class="icon icon-Flag"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>网络</h5>
                                <p><em>best solutions that works</em></p>
                                <p>Lorem ipsum dolor sit amet consect letur se
                                    adipisicing elit sed don eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="service-item">
                            <div class="media-left">
                                <div class="wrap-service-icon">
                                    <div class="service-icon">
                                        <span class="icon icon-Carioca"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>云计算</h5>
                                <p><em>lorem ipsum dolor sit amet</em></p>
                                <p>Lorem ipsum dolor sit amet consect letur se
                                    adipisicing elit sed don eiusmod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="service-item">
                            <div class="media-left">
                                <div class="wrap-service-icon">
                                    <div class="service-icon">
                                        <span class="icon icon-Planet"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>linux</h5>
                                <p><em>providing excellent services</em></p>
                                <p>Lorem ipsum dolor sit amet consect letur se
                                    adipisicing elit sed don eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="services-divider">
                        <div class="col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-md-4 col-sm-4 col-xs-4"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="service-item">
                            <div class="media-left">
                                <div class="wrap-service-icon">
                                    <div class="service-icon">
                                        <span class="icon icon-Folder"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>DB</h5>
                                <p><em>providing excellent services</em></p>
                                <p>Lorem ipsum dolor sit amet consect letur se
                                    adipisicing elit sed don eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="service-item">
                            <div class="media-left">
                                <div class="wrap-service-icon">
                                    <div class="service-icon">
                                        <span class="icon icon-Layers"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>大数据</h5>
                                <p><em>best solutions that works</em></p>
                                <p>Lorem ipsum dolor sit amet consect letur se
                                    adipisicing elit sed don eiusmod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="service-item">
                            <div class="media-left">
                                <div class="wrap-service-icon">
                                    <div class="service-icon">
                                        <span class="icon icon-DesktopMonitor"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>人工智能</h5>
                                <p><em>lorem ipsum dolor sit amet</em></p>
                                <p>Lorem ipsum dolor sit amet consect letur se
                                    adipisicing elit sed don eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - VIDEO SECTION 视频部分 -->
        <!-- ========================== -->

        <section class="video-section with-bottom-effect dark dark-strong">
            <!--<div class="video-play" id="video-play" data-property="{videoURL:'',containment:'#video-play',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>-->
            <div class="bottom-effect"></div>
            <div class="container dark-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title">我们的介绍视频</div>
                        <em>Lorem ipsum dolor sit amet consectetur elit</em>
                        <a href="&amp;autoplay=1" class="btn-play fancybox-video"></a>
                        <div class="duration">Duration : <span>4:35</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - TEAM 团队 -->
        <!-- ========================== -->
        <section class="team-section with-bottom-effect">
            <div class="bottom-effect"></div>
            <div class="container">
                <div class="section-heading wow fadeIn">
                    <div class="section-title">我们的团队</div>
                    <div class="section-subtitle">Lorem ipsum dolor amet consectetur adipisic elit</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="wrap-team-slider wow fadeIn"> 
                    <div class="prev-btn"><span class="icon invertX icon-Goto"></span></div>
                    <div class="next-btn"><span class="icon icon-Goto"></span></div>
                    <div class="team-slider enable-stick-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "prevArrow" : ".prev-btn", "nextArrow": ".next-btn" }'>
                        <div class="slide-item">
                            <div class="image">
                                <img src="/H_home/img/team/member-1.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">张三</div>
                                    <div class="position">金牌讲师</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image">
                                <img src="/H_home/img/team/member-3.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">李四</div>
                                    <div class="position">金牌讲师</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image">
                                <img src="/H_home/img/team/member-2.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">王五</div>
                                    <div class="position">数通金牌讲师</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="slide-item">
                            <div class="image">
                                <img src="/H_home/img/team/member-1.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">赵六</div>
                                    <div class="position">红帽金牌讲师</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image">
                                <img src="/H_home/img/team/member-3.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">陈七</div>
                                    <div class="position">数据库讲师</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- ========================== -->
        <!-- REVIEWS SECTION 评论部分 -->
        <!-- ========================== -->
        <section class="reviews-section">
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">客户评价</div>
                    <div class="section-subtitle">Lorem ipsum dolor amet consectetur adipisic elit</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="reviews-slider enable-owl-carousel" data-single-item="true">
                    <div class="slide-item">
                        <div class="media-left">
                            <div class="image-block">
                                <img src="/H_home/img/review-img1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="description-block">
                                <div class="name">
                                    <span>小六子</span>
                                    <em>学华为到博赛</em>
                                </div>
                                <div class="review">
                                    <em>Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue labore 
                                        etor dolore magna aliqua. Ut enim ad minim veniam qu nostrud exercitat ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat duis autes irure dolor rep.</em>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slide-item">
                        <div class="media-left">
                            <div class="image-block">
                                <img src="/H_home/img/review-img1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="description-block">
                                <div class="name">
                                    <span>小七</span>
                                    <em>博赛网络,靠谱的企业</em>
                                </div>
                                <div class="review">
                                    <em>Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue labore 
                                        etor dolore magna aliqua. Ut enim ad minim veniam qu nostrud exercitat ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat duis autes irure dolor rep.</em>
                                </div>
                            </div>
                        </div>

                    </div>



                     <div class="slide-item">
                        <div class="media-left">
                            <div class="image-block">
                                <img src="/H_home/img/review-img1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="description-block">
                                <div class="name">
                                    <span>小七</span>
                                    <em>博赛网络,靠谱的企业</em>
                                </div>
                                <div class="review">
                                    <em>Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue labore 
                                        etor dolore magna aliqua. Ut enim ad minim veniam qu nostrud exercitat ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat duis autes irure dolor rep.</em>
                                </div>
                            </div>
                        </div>

                    </div>
 
                    <div class="slide-item">
                        <div class="media-left">
                            <div class="image-block">
                                <img src="/H_home/img/review-img1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="description-block">
                                <div class="name">
                                    <span>小七</span>
                                    <em>博赛网络,靠谱的企业</em>
                                </div>
                                <div class="review">
                                    <em>Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue labore 
                                        etor dolore magna aliqua. Ut enim ad minim veniam qu nostrud exercitat ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat duis autes irure dolor rep.</em>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="slide-item">
                        <div class="media-left">
                            <div class="image-block">
                                <img src="/H_home/img/review-img1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="description-block">
                                <div class="name">
                                    <span>小七</span>
                                    <em>博赛网络,靠谱的企业</em>
                                </div>
                                <div class="review">
                                    <em>Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue labore 
                                        etor dolore magna aliqua. Ut enim ad minim veniam qu nostrud exercitat ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat duis autes irure dolor rep.</em>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="slide-item">
                        <div class="media-left">
                            <div class="image-block">
                                <img src="/H_home/img/review-img1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="description-block">
                                <div class="name">
                                    <span>小七</span>
                                    <em>博赛网络,靠谱的企业</em>
                                </div>
                                <div class="review">
                                    <em>Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue labore 
                                        etor dolore magna aliqua. Ut enim ad minim veniam qu nostrud exercitat ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat duis autes irure dolor rep.</em>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>


        <!-- ========================== -->
        <!-- BUY SECTION 购买部分 -->
        <!-- ========================== -->
        <section class="buy-section with-icon">
            <div class="section-icon"><span class="icon icon-Umbrella"></span></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1 col-sm-9 wow fadeInLeft">
                        <div class="section-text">
                            <div class=" vcenter like">
                                <span class="icon icon-Briefcase"></span> 
                            </div>
                            <div class="buy-text vcenter">
                                <div class="top-text">再不努力我们就老了</div>
                                <div class="bottom-text">........................................</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeInRight">
                        <a href="#" class="btn btn-info ">咨询报名</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- HOME - PRICE 价格 -->
        <!-- ========================== -->
      <!--   <section class="price-section">
            <div class="with-bottom-effect dark dark-strong pricing-background">
                <div class="bottom-effect"></div>
            </div>
            <div class="dark-content">
                <div class="container">
                    <div class="section-heading">
                        <div class="section-title">我们的定价</div>
                        <div class="section-subtitle">Lorem ipsum dolor amet consectetur adipisic elit</div>
                        <div class="design-arrow"></div>
                    </div>
                </div>
            </div>
            <div class="dark-content">
                <div class="container">
                    <div class="row no-gutter plans-list text-center">
                        <div class="col-md-4 col-sm-4 vcenter">
                            <div class="plan-item wow zoomIn"  data-wow-delay="0.3s">
                                <div class="item-heading">
                                    <span class="name">basic</span>
                                    <div class="count">$125</div>
                                    <em>per month</em>
                                </div>
                                <div class="item-body">
                                    <ul class="list-features">
                                        <li class="active">2 Hosting Accounts</li>
                                        <li class="active">10 FREE Users</li>
                                        <li class="active">600GB Monthly Bandwidth</li>
                                        <li>Complete Analytics</li>
                                        <li>Unlimited Databses</li>
                                    </ul>
                                </div>
                                <div class="item-footer text-center">
                                    <a href="#" class="btn btn-default">sign up now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 vcenter">
                            <div class="plan-item wow zoomIn active" data-wow-delay="0.6s">
                                <div class="item-heading">
                                    <span class="name">popular</span>
                                    <div class="count">$175</div>
                                    <em>per month</em>
                                </div>
                                <div class="item-body">
                                    <ul class="list-features">
                                        <li class="active">8 Hosting Accounts </li>
                                        <li class="active">30 FREE Users</li>
                                        <li class="active">2 TB Monthly Bandwidth </li>
                                        <li class="active">Complete Analytics</li>
                                        <li>Unlimited Support</li>
                                    </ul>
                                </div>
                                <div class="item-footer text-center">
                                    <a href="#" class="btn btn-default">sign up now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  col-sm-4 vcenter">
                            <div class="plan-item wow zoomIn"  data-wow-delay="0.3s">
                                <div class="item-heading">
                                    <span class="name">premier</span>
                                    <div class="count">$250</div>
                                    <em>per month</em>
                                </div>
                                <div class="item-body">
                                    <ul class="list-features">
                                        <li class="active">25 Hosting Accounts </li>
                                        <li class="active">Unlimited FREE Users </li>
                                        <li class="active">8 TB Monthly Bandwidth </li>
                                        <li class="active">Complete Analytics</li>
                                        <li class="active">Unlimited Storage</li>
                                    </ul>
                                </div>
                                <div class="item-footer text-center">
                                    <a href="#" class="btn btn-default">sign up now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 -->

        <!-- ========================== -->
        <!-- HOME - LATEST NEWS 最新消息 -->
        <!-- ========================== -->
        <section class="latest-news-section with-icon with-top-effect clearfix">
            <div class="section-icon"><span class="icon icon-Umbrella"></span></div>
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">最新消息</div>
                    <div class="section-subtitle">Lorem ipsum dolor sit amet consectetur elit</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInUp">
                        <div class="news-item">
                            <div class="meta">
                                <div class="meta-item"><span class="icon icon-Tag"></span>内蒙古首位HCIE女学员</div>
                                <div class="meta-item"><span class="icon icon-Agenda"></span>26 SEP</div>
                            </div>
                            <div class="image">
                                <a href="#">
                                    <img src="/H_home/img/news/image1.jpg" alt="" />
                                    <div class="image-content">
                                        <span class="read-more">张婷</span>  
                                    </div>
                                </a> 
                            </div> 
                            <div class="user-avatar clearfix">
                                <div class="avatar">
                                    <img src="/H_home/img/avatars/img1.png" alt="" /> 
                                </div>
                            </div>
                            <div class="news-body">
                                <h5>不一样的大神之路</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elitsed
                                    eiusmod tempor enim minim veniam quis notru exercit ation
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp">
                        <div class="news-item">
                            <div class="meta">
                                <div class="meta-item"><span class="icon icon-Tag"></span>28期NP学院实习工资5000,你信吗?</div>
                                <div class="meta-item"><span class="icon icon-Agenda"></span>20 SEP</div>
                            </div>
                            <div class="image">
                                <a href="#">
                                    <img src="/H_home/img/news/image2.jpg" alt="" />
                                    <div class="image-content">
                                        <span class="read-more">王亮</span>  
                                    </div>
                                </a> 
                            </div> 
                            <div class="user-avatar clearfix">
                                <div class="avatar">
                                    <img src="/H_home/img/avatars/img2.png" alt="" /> 
                                </div>
                            </div>
                            <div class="news-body">
                                <h5>博赛祝你成就高薪之路</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elitsed
                                    eiusmod tempor enim minim veniam quis notru exercit ation
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp">
                        <div class="news-item">
                            <div class="meta">
                                <div class="meta-item"><span class="icon icon-Tag"></span>博赛学院突破1万人</div>
                                <div class="meta-item"><span class="icon icon-Agenda"></span>28 SEP</div>
                            </div>
                            <div class="image">
                                <a href="#">
                                    <img src="/H_home/img/news/image3.jpg" alt="" />
                                    <div class="image-content">
                                        <span class="read-more">1万人</span>  
                                    </div>
                                </a> 
                            </div> 
                            <div class="user-avatar clearfix">
                                <div class="avatar">
                                    <img src="/H_home/img/avatars/img1.png" alt="" /> 
                                </div>
                            </div>
                            <div class="news-body">
                                <h5>我们就是有实力</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elitsed
                                    eiusmod tempor enim minim veniam quis notru exercit ation
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ========================== -->
        <!-- HOME - SLIDER 滑动块 -->
        <!-- ========================== -->
        <section class="slider-section dark dark-strong with-bottom-effect">
            <div class="bottom-effect"></div>
            <div class="dark-content">
                <div class="wrap-section-slider enable-owl-carousel" data-single-item="true" >
                    <div class="slide-item">
                        <div class="slider-title">新浪最新 <i class="fa fa-twitter"></i> 博赛网络</div>
                        <p class="large">Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue ut labore etor dolore magna aliqua. Ut enim <br />
                            minim veniam qua nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="time">2 minutes ago</div>
                    </div>
                    <div class="slide-item">
                        <div class="slider-title">latest from twitter <i class="fa fa-twitter"></i> oscend creative agency</div>
                        <p class="large">Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue ut labore etor dolore magna aliqua. Ut enim <br />
                            minim veniam qua nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="time">6 minutes ago</div>
                    </div>
                    <div class="slide-item">
                        <div class="slider-title">latest from twitter <i class="fa fa-twitter"></i> oscend creative agency</div>
                        <p class="large">Lorem ipsum dolor sit amet consecteur adipiscing elit sed eiusmod tempor ncididue ut labore etor dolore magna aliqua. Ut enim <br />
                            minim veniam qua nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="time">12 minutes ago</div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ========================== -->
        <!-- HOME - CLIENTS 客户 -->
        <!-- ========================== -->
        <section class="clients-section clearfix">
            <div class="container">
                <div class="section-heading wow fadeInDown">
                    <div class="section-title">值得信赖的客户</div>
                    <div class="section-subtitle">Lorem ipsum dolor sit amet consectetur elit</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="list-clients">
                    <div class="client-item wow fadeInLeft">
                        <img src="/H_home/img/partners/partner-4.png" alt="" />
                    </div>
                    <div class="client-item wow fadeInLeft">
                        <img src="/H_home/img/partners/partner-1.png" alt="" />
                    </div>
                    <div class="client-item wow fadeInRight">
                        <img src="/H_home/img/partners/partner-3.png" alt="" />
                    </div> 
                    <div class="client-item wow fadeInRight">
                        <img src="/H_home/img/partners/partner-2.png" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- FOOTER 脚 -->
        <!-- ========================== -->
        <footer>
            <!-- ========================== -->
            <!-- BUY SECTION 购买部分 -->
            <!-- ========================== -->
            <section class="buy-section with-icon">
                <div class="section-icon"><span class="icon icon-Umbrella"></span></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1 col-sm-9 wow fadeInLeft">
                            <div class="section-text">
                                <div class=" vcenter like">
                                    <span class="icon icon-Like"></span> 
                                </div>
                                <div class="buy-text vcenter">
                                    <div class="top-text">咨询电话</div>
                                    <div class="bottom-text">88888888</div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-3  wow fadeInRight">
                            <a href="#" class="btn btn-info ">立即报名</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================== -->
            <!-- FOOTER - SOCIAL 社会-->
            <!-- ========================== -->
            <section class="social-section dark dark-strong">
                <div class="container dark-content">
                    <div class="tt">我们24/7小时,期待你的来电</div>
                    <ul class="list-socials">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </section>
@show
            <!-- ========================== -->
            <!-- FOOTER - FOOTER -->
            <!-- ========================== -->
            <section class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h5>关于我们</h5>
                            <p>Lorem ipsum dolor sit amet consect etural
                                adipisicing elit sed don eiusmod temp enim
                                minim veniam quis notrud exercitation lore
                                ipsum dolor sit amet.</p>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h5>网站地图</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="footer-nav">
                                        <li><a href="#">关于我们</a></li>
                                        <li><a href="#">成功案例</a></li>
                                        <li class="active"><a href="#">最新消息</a></li>
                                        <li><a href="#">联系我们</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="footer-nav">
                                        <li><a href="#">帮助</a></li>
                                        <li><a href="#">招贤纳士</a></li>
                                        <li><a href="#">常见问题</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h5>联系方式</h5>
                            <ul class="contacts-list">
                                <li>
                                    <p><i class="icon icon-House"></i>稀土高新区</p>
                                </li>
                                <li>
                                    <p><i class="icon icon-Phone2"></i>047204720472</p>
                                </li>
                                <li>
                                    <p><i class="icon icon-Mail"></i><a href="mailto:support@oscend.com">huawei@123456.com</a> </p>

                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h5>实时通讯</h5>
                            <p>
                                Subscribe to our newsletter for latest updates 
                                about our creative agency
                            </p>
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control " placeholder="Email address ...">
                                <i class="icon icon-Mail form-control-feedback"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="copyright-section">
                <p>版权 &copy; 2017.Company name All rights reserved.<a target="_blank" href="#"></a></p>
            </section>
        </footer>



        <!-- Scripts -->

        <!-- components -->
        <script src="/H_home/js/jquery-1.11.3.min.js"></script>
        <script src="/H_home/vendor/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/waypoints/lib/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/slider-pro/dist/js/jquery.sliderPro.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/slick-carousel/slick/slick.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/wow/dist/wow.min.js" type="text/javascript"></script>
        <script src="/H_home/vendor/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="/H_home/js/modernizr.js" type="text/javascript"></script>

        <!-- custom scripts -->
        <script src="/H_home/js/contact.js" type="text/javascript"></script>
        <script src="/H_home/js/custom.js" type="text/javascript"></script>
        <!--<script src="js/map.js" type="text/javascript"></script>-->

    </body>
</html>

