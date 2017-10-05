<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>索云数据 @yield('title')</title>
<link rel="stylesheet" href="/A_admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="/A_admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/A_admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/A_admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/A_admin/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/A_admin/js/custom/general.js"></script>
<script type="text/javascript" src="/A_admin/js/custom/index.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="/admin/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="/admin/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="/admin/js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loginpage">
	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	<h1 class="logo"><span>管理员登陆</span></h1>
				<span class="slogan"><a href="{{'/home/login'}}">会员登录</a> | <a href="{{'/'}}">返回首页</a></span>
            </div><!--logo-->
            
            <br clear="all" /><br />
            



            <div class="nousername">
				<div class="loginmsg">请输入用户名.</div>
            </div><!--nousername-->
            
            <div class="nopassword">
				<div class="loginmsg">请输入密码.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="/A_admin/images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="/admin/index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            
            <form id="login" action="/admin/gllogin" method="post">
                 {{csrf_field()}}
            	<!-- <input type="hidden" name="_method" value="test">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="username" id="username" value="" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="password" id="password" value="" />
                    </div>
                </div>
                <span  style="display: block; margin-bottom: 20px; width: 200px;"><input style="width: 100px;height: 30px;" type="" name=""><div style="float: right;height: 30px;width: 80px;">111111</div></span>
                <button>登录</button>
                


                <div class="keep"><input type="checkbox" /> 记住密码 | <a style="color: #cccccc;" href="#">现在注册</a> | <a style="color: #cccccc;" href="#">忘记密码?</a></div>
            

            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>
</html>
