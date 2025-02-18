

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
						<li class="nav-item active">
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
<script src="{{url('public/assets/js/jquery-3.3.1.min.js')}}"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="{{url('public/assets/js/bootstrap.min.js')}}"></script>
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


<section class="w3l-hero-headers-9" id="home">
  <div class="slide header11" data-selector="header11">
      <div class="container">
          <div class="banner-text ">
              <h5 class=" ">Present Education<br> in beautiful way!</h5>
              <p class=" "><i>"Unlock your coding potential with expert-led tutorials and hands-on programming lessons designed to help you master the skills you need, from beginner to advanced."</i></p>
              
          </div>
      </div>
  </div>
</section>

<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="container">
            <div class="booking-form-content">
                <div class="main-titles-head ">
                <h3 class="header-name">You Can learn anything
                </h3>
                <p class="tiltle-para editContent "><i>"Master the art of programming with expert tutorials that make learning languages like Python, JavaScript, and more, simple and engaging."</i></p>
               <div class="row text-center">
                <div class="col-lg-4 col-md-6 propClone about-line-top ">
                    <div class="area-box color-white editContent box-active">
                        <div class="icon-back"><span class="fa fa-thumbs-up"></span></div>
                        
                    <h5><a href="#link" class="editContent">
                        Unlimited Access</a></h5>
                    <p class="para editContent"><i>Learn without limits with unlimited access to all content</i></p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 propClone about-line-top ">

          
                <div class="area-box color-white editContent">
                    <div class="icon-back"><span class="fa fa-users"></span></div>
                    
                <h5><a href="#link" class="editContent">
                    Expert Teachers</a></h5>
                <p class="para editContent"><i>Learn directly from experienced coding professionals</i></p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 propClone about-line-top">
            <div class="area-box color-white editContent box-active">
                <div class="icon-back"><span class="fa fa-pencil"></span></div>
                
            <h5><a href="#link" class="editContent">
                Learn Anything</a></h5>
            <p class="para editContent"><i>Learn anything you want, from programming to creativity</i></p>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 propClone about-line-top ">
        <div class="area-box color-white editContent">
            <div class="icon-back"><span class="fa fa-book"></span></div>
            
        <h5><a href="#link" class="editContent">
            Many Courses</a></h5>
        <p class="para editContent"><i>Explore many courses across various programming languages</i></p>
</div>
</div>
<div class="col-lg-4 col-md-6 propClone about-line-top ">
    <div class="area-box color-white editContent box-active">
        <div class="icon-back"><span class="fa fa-star"></span></div>
        
    <h5><a href="#link" class="editContent">
        Bright Future</a></h5>
    <p class="para editContent"><i>Shape a bright future with the knowledge and skills you gain</i></p>
</div>
</div>
<div class="col-lg-4 col-md-6 propClone about-line-top ">
    <div class="area-box color-white editContent">
        <div class="icon-back"><span class="fa fa-check"></span></div>
        
    <h5><a href="#link" class="editContent">
        Verified Course</a></h5>
    <p class="para editContent"><i>Learn with confidence through our verified and accredited courses</i></p>
</div>
</div>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout editContent">
        <div class="container">
				<div class="grid">
					<figure class="effect-apollo ser-bg1">
						<figcaption>
							<h5><a href="#link">Successfully Trained</a></h5>
							<p class="para"><i>Our courses ensure you're successfully trained for the future.</i></p>
						</figcaption>			
					</figure>
					<figure class="effect-apollo ser-bg2">
						<figcaption>
							<h5><a href="#link">We Proudly Received</a></h5>
							<p class="para"><i>We proudly received recognition for our excellence in education.</i></p>
						</figcaption>			
					</figure>
					<figure class="effect-apollo ser-bg3">
						<figcaption>
							<h5><a href="#link">We Are Getting Featured On</a></h5>
							<p class="para"><i>Our expert-led tutorials are featured to help learners master programming quickly.</i></p>
						</figcaption>			
					</figure>
					<figure class="effect-apollo ser-bg4">
						<figcaption>
							<h5><a href="#link">Firmly Established</a></h5>
							<p class="para"><i>We are firmly established as a go-to resource for quality coding tutorials.</i></p>
						</figcaption>			
					</figure>
				</div>
                  </div>
        </div>
</section>

<section class="w3l-covers-18">
       <div class="covers-main editContent">
    <div class="container">
        <div class="main-titles-head">
            <h3 class="header-name"> our top courses</h3>
            <p class="tiltle-para editContent"><i>Explore our top courses, crafted by experts to help you succeed. Whether you're a beginner or pro, there's a course for everyone.</i></p>
        </div>
        
        <div class="gallery-image row">
            @foreach ($viewdetail as $key)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-card">
                        <!-- Course Image --><div>
                        <img src="{{ url('public/assets/admin/docimages/' . $key->Image) }}" class="img-fluid course-img" width="500" height="500" alt="course image">
                        </div>
                        <!-- Course Details -->
                        <div class="img-box">
                            <h2 class="mb-2" style="color:white;text-align:center;">{{ $key->Coursename }}</h2>
                            <div class="blog-date">
                                <p class="pos-date">{{ $key->Description }}</p>
                               
                            </div><br>
                            
                           
                             
                        
                                <p style="display: none;">{{ $key->Id }}</p>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url('/userlogin') }}'">More details</button>

                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="clearfix"></div>
    </div>
</div>

    </section>
<section class="w3l-teams-15">
	<div class="team-single-main editContent">
		<div class="container">

		<div  class="row">
			<div class="column2 col-lg-6">
			
				<img src="{{url('public/assets/images/img2.jpg')}}" width="500px" height="250px" alt="product" class="img-responsive ">
			</div>
				<div class="nature-row  coloum4 col-lg-6 align-self">
					<h6 class="small-title">HOW WE WORK</h6>
						<h3>Your bright future is our mission!. </h3>
					<p class="para editContent text ">
					<i>We’re committed to helping you achieve your bright future through quality education and support.</i></p>
						<a href="{{url('/about')}}" class="action-button btn mt-lg-5 mt-4">Read more</a>
					</div>
				</div>
		</div>
		</div>
	</div>
</section>

<section class="w3l-clients" id="client">
    <div class="call-w3">
        <div class="container">
            <!-- main-slider -->
            <div class="main-slider text-center">
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slide" checked="checked" id="slides_1">
                    <input type="radio" name="slide" id="slides_2">
                    <input type="radio" name="slide" id="slides_3">
                    <ul>
                        <li>
                            <div class="slider-info">
                                <div class="d-grid hh14-text">
                                    <img class="img-responsive" src="{{url('public/assets/images/c3.jpg')}}" alt="image">
                                    <div class="hh14-info">
                                        <h6>Limitless learning</h6>
                                        <p class="para"><i>With limitless learning, the possibilities are endless for your personal and professional growth.</i></p>
                                      <h4>Jack Willson</h4>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="slider-info">
                                <div class="d-grid hh14-text">
                                    <img class="img-responsive" src="{{url('public/assets/images/c1.jpg')}}" alt="image">
                                    <div class="hh14-info">
                                        <h6>World's best courses</h6>
                                        <p class="para"><i>Gain knowledge through the world’s best courses, trusted by learners globally.</i></p>
                                            <h4>Nike samson</h4>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <div class="d-grid hh14-text">
                                    <img class="img-responsive" src="{{url('public/assets/images/c2.jpg')}}" alt="image">
                                    <div class="hh14-info">
                                        <h6>Popular Courses</h6>
                                        <p class="para"><i>Check out our popular courses and discover the skills that are in high demand.</i></p>
                                            <h4>Milky Deo</h4>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- <div class="arrows">
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                    </div> -->
                    <div class="navigation">
                        <div>
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                        </div>
                </div>
            </div>
            <!-- /main-slider -->
        </div>
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

</body>

</html>
