<!DOCTYPE HTML>
<html>
<head>
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{url('public/assets/admin/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{url('public/assets/admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{url('public/assets/admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{url('public/assets/admin/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="{{url('public/assets/admin/js/bootstrap.min.js')}}"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="{{url('/dashboard')}}"><img src="{{url('public/assets/admin/images/logo.png')}}" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form action="{{url('/login_action')}}" method="post" enctype="multipart/form-data">
		<input type="text" class="text" name="email">
		<input type="password" name="password">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="submit"><input type="submit" value="Login"></div>
		
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="#"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   
</body>
</html>
