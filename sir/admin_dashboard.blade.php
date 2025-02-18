@if(empty(Session::get('x'))) 
<script>window.location='{{url('/login_in')}}';</script>
@endif
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <!----======== CSS ======== -->
   <script src="{{url('public/assests/js/jquery.min.js')}}"></script>
  <link rel="stylesheet" href="{{url('public/assests/css/sidemenu.css')}}">
  <link rel="Stylesheet" href="{{url('public/assests/css/bootstrap.min.css')}}">
  <lin rel="stylesheet" href="{{url('public/assests/css/bootstrap.css')}}">
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
  
  <title>Dashboard Sidebar Menu</title> 

  <Style>
        .sidebar.close{
            background-color:blue;
        }
        i{
            background-color:white;
        }
         .home{
             margin-left:50px;
         }
         .sidebar{
             background-color:cyan;
         }
         .sidebar li a:hover{
             background-color:orange;
             color:black;
         }
         #logout:hover{
             background-color:red;
             color:white;
         }
         #logoutid:hover{
             color:white;
         }
         .sidebar{
             background-color:black;
         }
         li{color:white; }
 #h2{color:red;}
 #main{
     text-align:center;
     margin-top:10%;
     margin-left:5%;

     font-weight:bold;
     font-family: "Times New Roman", Times, serif;
 }
 
 #x{
     background-color:orange;
     color:black;
 }
 #x1{
     background-color:green;
     color:black;
 }
      </style>
</head>
<body>
  <nav class="sidebar close">
      <header>
          <div class="image-text">
              <span class="image">
                  <img src="logo.png" alt="">
              </span>

              <div class="text logo-text">
                  <span class="name"><h2 id="h2">XY</h2></span>
                  <span class="profession"><h4 id="h2">SCHOOL</h4></span>
              </div>
          </div>

          <i class='bx bx-chevron-right toggle'></i>
      </header>

      <div class="menu-bar">
          <div class="menu">

               

              <ul class="menu-links">
                  <li class="nav-link">
                      <a href="{{url('/admindashboard')}}">
                          
                          <span class="text nav-text">Dashboard</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="{{url('/addstaffdetails')}}">
                           
                          <span class="text nav-text">Add Staff Details</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="{{url('/addstudentdetails')}}">
                         
                          <span class="text nav-text">Add Student Details</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="{{url('/viewstaffdetails')}}">
                          
                          <span class="text nav-text">View Staff Details</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="{{url('/viewstudentdetails')}}">
                          
                          <span class="text nav-text">View Student Details</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="{{url('/viewclassdetails')}}"> 
                          <span class="text nav-text">Class</span> 
                      </a> 
                  </li>
                   

              </ul>
          </div>

          <div class="bottom-content"  id="logout">
               
                  <a href="{{url('/logout_action')}}">
                       <center> <span class="text nav-text" id="logoutid">Logout</span></center>
                  </a> 
          </div>
          <br><br>
      </div>

  </nav>

  <section class="home">
      <div class="container-fluid" id="main"> 
    <h1>WELCOME TO XY SCHOOL   </h1>  

    @if(!empty(Session::get('x'))) 
    <h3>username:{{Session::get('x')}}</h3>
    @endif
  
  
<img src="public/assests/images/banner.jpg"width="50%" height="50%">    
    </div>
    
    <div class="container-fluid" id="smain">
        <div class="row">
            <div class="col-md-6" id="x">
              <h3> TOTAL NUMBER OF STUDENTS :   </h3>
            </div>
            <div class="col-md-6" id="x1">
            <h3> TOTAL NUMBER OF STAFFS :Y </h3>
            </div>
</div>
</div>
  </section>

  <script>
      const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
  sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
  sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
  body.classList.toggle("dark");
  
  if(body.classList.contains("dark")){
      modeText.innerText = "Light mode";
  }else{
      modeText.innerText = "Dark mode";
      
  }
});
  </script>
<script>
			history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
                   });
			</script>
</body>
</html>
