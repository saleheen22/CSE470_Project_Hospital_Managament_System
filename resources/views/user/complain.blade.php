<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            @if(Route::has('login'))
            @auth
           
            <li class="nav-item">
              <a class="nav-link" style = "background-color:#F33D00; color:black;" href="{{url('complain')}}">Complain</a>
            </li>
         
            <x-app-layout>
                </x-app-layout>

            @else



            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register </a>
            </li>
            @endauth
            @endif
           



          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
    <div align="center" style="padding:70px";>
    <h1 class="text-center wow fadeInUp">Complaint Form</h1>

    <form class="main-form" action = "{{url('add_complain')}}" mehtod= "POST">
      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name= "name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name= "email" class="form-control" placeholder="Email address..">
          </div>
          
         
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text"  name = "phone" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter your complaints.."></textarea>
          </div>
        </div>

        <button type="submit" style= "background-color: #4CAF50; /* Green */" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>





</body>
</html>