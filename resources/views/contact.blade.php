<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SmartCreative | Landing &amp; Corporate Of Software & IT Solution</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
  </head>
  <body>
    <!--    Main Content-->
    <main class="main shadow-sm" id="top" style="background-color: rgb(0, 210, 255); height: 350px;">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="home"><img src="assets/img/icons/logo.png" alt="" width="100" /><span class="text-1000 fs-2 ms-2 fw-bold">Empower<span class="fw-bold">Soft</span></span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link active active" aria-current="page" href="home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
              <li class="nav-item"><a class="nav-link" href="services">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="portifolio">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
            <form class="d-flex py-3 py-lg-0">
              <button class="btn btn-info rounded-pill order-0" type="submit">Get Quote</button>
            </form>
          </div>
        </div>
      </nav>
</section>
<!-- <section> close ============================-->
      <!-- <section> begin ============================-->
      <section class="py-12 z-index-1" style="margin-bottom: -10rem">
        <div class="container">
            <div class="col-lg-12 col-lg-2 mt-5 text-center text-md-start">
              <h1 class="fw-medium">A Better Way For Complexity!<br />              
              </div>
        </div><br /><br />
      <div class="container">
        <div class="card py-4 px-6 border-0 shadow-sm">
            <div class="card-body">
              <div class="container">
                <h2>Send a message</h2><br />
                  <label for="email2" class="mb-1 mr-sm-2">If you have any Question/Enquiry/Suggestion please contact take down post in the bellow form:</label><br />
                  @if(Session::has('success'))
                  <div class="alert alert-success">
                  {{ Session::get('success') }}
                  @php
                  Session::forget('success');
                  @endphp
                  </div>
                  @endif
    <form method="POST" action="{{ route('contact.store') }}" class="form-inline">
    {{ csrf_field() }}
      <div class="row">
          <div class="col">
            <input type="text" class="form-control mb-1 mr-sm-2" id="email2" placeholder="Name" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
            </div>
             <div class="col">
             <input type="email" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Email" name="email" value="{{ old('email') }}">
             @if($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            </div>
            <div class="col">
          <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Mobile" name="phone" value="{{ old('phone') }}">
          @if($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="col">
            <input type="text" class="form-control mb-1 mr-sm-2" id="email2" placeholder="subject" name="subject" value="{{ old('subject') }}">
            @if($errors->has('subject'))
            <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif
            </div>
       </div> 
       <div class="row">  
          <div class="form-group">
          <textarea placeholder="Comment" class="form-control" rows="5" id="comment" name="message" value="{{ old('message') }}"></textarea>
          @if($errors->has('message'))
            <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
        </div></div>  
        <br /><div class="col-12 col-lg-8 text-lg-end">
                <button class="btn btn-lg btn-primary hover-top rounded-pill order-0" type="submit">Submit Your Message</button></div>

       </form>
        </div>
            </div>
          </div>
        </div>

        <div class="card-body " style="background-color:rgb(255, 255, 240);">
              <div class="container"> 
      <div class="w3-container w3-deep-orange w3-large w3-padding-16" style="margin-right:10%;">
  <p><span class="w3-xlarge"><h4>Empower AdressL:</h4></span><br />
  <div class="col-6 col-lg-6 col-lg-3 mb-3 ps-xxl-7 ps-xl-5" style="font-size: 17px;">
              <ul class="list-unstyled mb-lg-6 mb-lg-0">
                <li class="lh-lg"><a type="bi-geo-alt-fill" class="text-900 text-decoration-none">Kart e Sah, Dist3, Z 1005, Kabul Afghanistan</a></li>
                <li class="lh-lg"><a type="email" class="text-900 text-decoration-none" href="mailto:sonware18@gmail.com">sonware18@gmail.com</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="https://wa.me/+93782000797" target="_blank">+93(0)782000797</a></li><br /><br />
              
            </div>
</div> </div></div>    
      </div> 
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- <section> begin ============================-->
      <section class="bg-200 pt-9 pb-0">

        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3 mb-3"><a href="#"><img class="d-inline-block align-middle" src="assets/img/icons/logo.png" alt="" width="30" /><span class="d-inline-block text-1000 fs-1 ms-2 fw-medium lh-base" >Smart<span class="fw-bold">Creative</span></span></a>
              <p class="my-3"> <span class="fw-medium">A Better Way For Complexity:</span> <br />Software Development is a process of making a software developed for a user or many users in an enterprise. Custom software development includes your orqanization requirements we will build it beter for you.
              Are you looking for a software development company to accelerate your business speed Yes! we use from Agile Methodology in Afghanistan.</p>
              <!--Section of Social media-->
              <p class="text-400 my-3">Our Presence On</p>
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a class="text-decoration-none" href="#!">
                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a></li>
                <li class="list-inline-item"><a href="#!">
                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a></li>
                <li class="list-inline-item"><a href="#!">
                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                    </svg></a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 mb-3">
              <h5 class="lh-lg" style="color:tomato;">Services</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Custom Software Development </a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Web Development</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Database Solutions</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Ecommerce Solutions</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Hire dedicated specialist</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Full-Stack Developer Training</a></li>
              </ul>
            </div>
            <div class="col-2 col-sm-3 col-sm-2 mb-2">
              <h5 class="lh-lg" style="color:tomato;">Engage</h5>
              <ul class="list-unstyled mb-sm-2 mb-sm-0">
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Blog ?</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Our Process</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Qoute Free</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Projects </a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Technologies</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-3 col-lg-3 mb-3 ps-xxl-7 ps-xl-5">
              <h5 class="lh-lg" st style="color:tomato;">Get in Touch </h5>
              <ul class="list-unstyled mb-lg-4 mb-lg-0">
                <li class="lh-lg"><a type="bi-geo-alt-fill" class="text-900 text-decoration-none">Kart e Sah, Dist3, Z 1005, Kabul Afghanistan</a></li>
                <li class="lh-lg"><a type="email" class="text-900 text-decoration-none" href="mailto:empowersoft@hotmail.com">empowersoft@hotmail.com</a></li>
                <li class="lh-lg"><a class="text-900 text-decoration-none" href="https://wa.me/+93782000797" target="_blank">+93(0)782000797</a></li><br /><br />
              <div class="d-flex align-items-center"><img style="float: left;" href="https://themewagon.com/" target="_blank" class="img-fluid" src="assets/img/gallery/user-1.png" alt="" width="100" height="120" /></ul>
            </div>
            <div class="text-400 text-center">
              <hr class="opacity-25" />
                <p class="text-400 my-3" style="font-family: arial black; font-size: 15px;">&copy; 2021 ALL Right Reserved</p>
                
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

  </body>
  
</html>