<!DOCTYPE html>
<html>

<head>
	<!-- <title>test - {{$title}}</title> -->
<title>test - {{ $title or '请登录' }}</title>
	<link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
	<h1>测试</h1>
					<div id=win style="display:none; POSITION:absolute; left:50%; top:50%; width:600px; height:400px; margin-left:-300px; margin-top:-200px; border:1px solid #888; background-color:#edf; text-align:center">这是DIV登录框示例<br>
						<a href="javascript:closeLogin();">关闭登录框</a>
					</div>
						<script>
						function openLogin(){
						   document.getElementById("win").style.display="";
						}
						function closeLogin(){
						   document.getElementById("win").style.display="none";
						}
						</script>
						<a href="javascript:openLogin();">打开登录框</a>



					<!-- 	<script>
						function openLogin(){
						   document.getElementById("win").style.display="";
						   document.getElementById("back").style.display="";
						}
						function closeLogin(){
						   document.getElementById("win").style.display="none";
						   document.getElementById("back").style.display="none";
						}
						</script>
						<a href="javascript:openLogin();">打开登录框</a>
						<div id=back style="display:none; POSITION:absolute; left:0; top:0; width:100%; height:100%; background-color:#000; filter:alpha(opacity=60)"></div>
						<div id=win style="display:none; POSITION:absolute; left:50%; top:50%; width:600px; height:400px; margin-left:-300px; margin-top:-200px; border:1px solid #888; background-color:#edf; text-align:center">这是DIV登录框示例<br><a href="javascript:closeLogin();">关闭登录框</a></div> -->
</body>
</html>