
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CodeMastery</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/style-starter.css')}}">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<section class=" w3l-header-4">
	<!--header-->
	<header id="site-header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1><a class="navbar-brand" href="{{url('/index')}}">
					<span class="fa fa-book"></span> CodeMastery
				</a></h1>
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item @@home__active">
							<a class="nav-link" href="{{url('/index')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="{{url('/about')}}">About</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="{{url('/services')}}">Services</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="{{url('/register')}}">Register</a>
						</li>
            <li class="nav-item @@services__active">
							<a class="nav-link" href="{{url('/userlogin')}}">Login</a>
						</li>
						
						<li class="nav-item mr-2">
								<a href="{{url('/contact')}}" class="nav-link">Contact</a>
						</li>
					</ul>
				</div>
				        <!-- toggle switch for light and dark theme -->
						
						  <!-- //toggle switch for light and dark theme -->
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>
<script src="{{('public/assets/js/jquery-3.3.1.min.js')}}"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="{{('public/assets/js/bootstrap.min.js')}}"></script>
<!--bootstrap working//-->
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->
<!--theme switcher dark and light mode script-->
<script>
	const bodyElement = document.querySelector('body');
	const themeToggle = document.querySelector('#themeToggle');
	const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');
  
	const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);
  
	if (currentTheme) {
	  bodyElement.classList.add(currentTheme);
  
	  if (currentTheme === 'dark') {
		themeToggle.checked = true;
	  }
	}
  
	function userPreference(e) {
	  if (e.matches) {
		bodyElement.classList.add("dark");
		return "dark"
	  } else {
		bodyElement.classList.remove("dark");
		return ""
	  }
	}
  
	darkModeMql.addListener(userPreference);
  
	function themeSwitcher(e) {
	  if (e.target.checked) {
		bodyElement.classList.add('dark');
		localStorage.setItem('theme', 'dark');
	  } else {
		bodyElement.classList.remove('dark');
		localStorage.setItem('theme', '');
	  }
	}
  
	themeToggle.addEventListener('change', themeSwitcher);
  </script>
  <!--theme switcher dark and light mode script//-->



<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner blog-single editContent">
        <div class="container">   
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="{{url('/index')}}" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                    Login</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact" >

   
       <h2 style="text-align:center;color:white;margin-bottom:25px;margin-top:20px;">Login</h2>
        <div class="container" >
			
				


                <div class="map-content-9" >
                    <form  action="{{url('/userlogin_action')}}" method="post" enctype="multipart/form-data">
                        
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                           
                            <input type="email"  class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required="">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                          
                       <div style="margin-bottom:70px;text-align:center;">
                            <button type="submit" class="btn btn-contact">Login</button>
                        </div>
                       
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                
            </div>
                
            
        </div>
    
</section>
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 ">
	  <div class="container">
		<div class="grid-col-4 footer-top-29">
			<div class="footer-list-29 footer-1">
				<h2 class="footer-title-29">About Us</h2>
<p class="para"><i>We are a team of passionate educators committed to providing high-quality online courses that empower learners to achieve their goals</i></p>
				<div class="main-social-footer-29">
					<a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
					<a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
					<a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
					<a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
					<a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
				</div>
			</div>
			<div class="footer-list-29 footer-2">
				<ul>
					<h6 class="footer-title-29">Latest News</h6>
					<li><a href="#pages">Programming language</a>
					<h5><a href="#pages">by Miss.Abitha</a></h5></li>
					<li><a href="#pages">Graduate Admissions</a><h5><a href="#pages">by Mr.Aaron</a></h5></li>
					<li><a href="#pages">Committed to educating</a><h5><a href="#pages">by Mrs.Sunitha</a></h5></li>
				</ul>
			</div>
			<div class="footer-list-29 footer-3">
				<div class="properties">
					<h6 class="footer-title-29">Contact Us</h6>

				<ul>
					<li><p><span class="fa fa-map-marker"></span>12th block,
					Maple Building,London, UK.</p></li>
					<li><a href="#phone"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
					<li><a href="#mail" class="mail"><span class="fa fa-envelope-open-o"></span> Codemastery@gmail.com</a></li>
				</ul>
			</div>
			</div>
			<div class="footer-list-29 footer-4">
				<ul>
					<h6 class="footer-title-29">Useful Links</h6>
					<li><a href="{{url('/about')}}">About</a></li>
					<li><a href="{{url('/services')}}">Service</a></li>
					<li><a href="{{url('/register')}}">Register</a></li>
					<li><a href="{{url('/userlogin')}}">Login</a></li>
					<li><a href="{{url('/contact')}}">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class=" bottom-copies row">
			<p class="copy-footer-29 col-lg-8">© 2025 CodeMastery. All rights reserved | Designed by Rachel Roshini</p>
			<ul class="list-btm-29 col-lg-4">
				<li><a href="#link">Privacy policy</a></li>
				<li><a href="#link">Terms of service</a></li>
			  </ul>
		</div>
		</div>
	</div>
  </section>

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-level-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
<script>
                      function validatePassword() {
                      var password = document.getElementById("password").value;
                      var confirmpassword = document.getElementById("confirmpassword").value;
                      if (password !== confirmpassword) {
                         alert("Passwords do not match!");
                         return false; 
                      }
                      return true; 
                      }
					  </script>


</body>

</html>
