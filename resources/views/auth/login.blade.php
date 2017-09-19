<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <!-- Site made with Mobirise Website Builder v4.2.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.2.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>

</head>
<body>
<section class="menu cid-qtKU0yOMIy" once="menu" id="menu1-2t" data-rv-view="574">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="https://mobirise.com">
                        MOBIRISE
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">

                        Gallery</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">

                        Reward</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">

                        Contact</a></li></ul>

        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/c">free site maker</a></section><section class="cid-qujQJWpExF mbr-fullscreen mbr-parallax-background" id="header15-2z" data-rv-view="576">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container" id="titlelogin">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Login Now</h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5">Bangun Karir Anda Sebagai Developer Profesional
<br>Belajar langsung dari para inovator dan developer expert
<br>
<br></p>
    </div>

    <div class="mbr-white col-lg-8 col-md-7 content-container" id="titleregister" style="display:none;">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Register Now</h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5">Bangun Karir Anda Sebagai Developer Profesional
<br>Belajar langsung dari para inovator dan developer expert
<br>
<br></p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container" id="signup" style="display:none;">
        <div class="media-container-column">
            <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>
            <form class="mbr-form" action="{{ route('register') }}" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="PbNnO3bwjzk1r3Bi7uCghCn/JjsWECW+JW0MKhJCs2yoiwNSC3TTyWNXmYBRgfFEfKB1IeYqm9OotLzETfNnDlQwGGZXCVKgMBjv1/gfbXzQW0Sv8eBMidYfT8pSDfiR">
              {{ csrf_field() }}
                <div data-for="name">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                </div>
                <div data-for="email">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                            <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('email') }}</div>
                      @endif
                    </div>
                </div>
                <div data-for="password">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                          <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('password') }}</div>
                      @endif
                    </div>
                </div>
                <div data-for="password">
                    <div class="form-group">
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-primary display-4">Submit</button></span>
            </form>
        </div>
    </div>
    <div class="form-container" id="signin">
        <div class="media-container-column">
          @if(session('status'))
            <div class="alert alert-success" style="text-align:center;">
              {{session('status')}}
            </div>
          @endif
          @if(session('warning'))
            <div class="alert alert-warning" style="text-align:center;">
              {{session('warning')}}
            </div>
          @endif
            <form class="mbr-form" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
                <div data-for="email">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" placeholder="Your Email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>
                <div data-for="password">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                </div>
                <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-primary display-4">Submit</button></span>
            </form>
        </div>
    </div>
    <br>
    <div class="form-container" id="login">
      <p style="color:white;text-align:center;cursor:pointer" id="show">You don't have account? Register</p>
    </div>
    <div class="form-container" id="register" style="display:none;">
      <p style="color:white;text-align:center;cursor:pointer;" id="hide">You have account? Login</p>
    </div>
    </div>
</div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script>
$(document).ready(function(){
    $("#hide").click(function(){
      document.getElementById("register").style.display = "none";//tombol click
      document.getElementById("signup").style.display = "none";//form nya
      document.getElementById("titleregister").style.display = "none";// judulnya
      document.getElementById("signin").style.display = "block";//form nya
      document.getElementById("login").style.display = "block";//tombol click
      document.getElementById("titlelogin").style.display = "block";// judulnya
    });
    $("#show").click(function(){
      document.getElementById("register").style.display = "block";
      document.getElementById("signup").style.display = "block";
      document.getElementById("titleregister").style.display = "block";
      document.getElementById("signin").style.display = "none";
      document.getElementById("login").style.display = "none";
      document.getElementById("titlelogin").style.display = "none";
    });
});
</script>

</body>
</html>
