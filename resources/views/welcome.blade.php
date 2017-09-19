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
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">

  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
</head>
<body>
<section class="menu cid-qtKU0yOMIy" once="menu" id="menu1-14" data-rv-view="543">



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
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="https://mobirise.com">Services</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">Reward</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="https://mobirise.com">Contact</a>
                </li>
                <li class="nav-item">
                  @if (Route::has('login'))
                  @if (Auth::check())
                  <div class="btn-group">
                    <button style="cursor:pointer" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" style="padding:0px;margin-right:12px;">
                      <button style="cursor:pointer;" class="dropdown-item" type="button" onclick="window.location.href='{{ route('logout') }}';event.preventDefault();
                               document.getElementById('logout-form').submit();">Logout</button>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                    </div>
                  </div>
                  @else
                      <button onclick="window.location.href='{{ url('/login') }}'" class="reg">Login</button>
                  @endif
                @endif
                </li>
              </ul>

        </div>
    </nav>
</section>

<section class="carousel slide cid-qtKt9doG2h" data-interval="false" id="slider1-o" data-rv-view="545">



    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-o" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-o" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-o" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/1-2000x964.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div><img src="assets/images/1-2000x964.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>Bismillah</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">انا لله وانا اليه راجعون انا لله وانا اليه راجعون انا لله وانا اليه راجعون انا لله وانا اليه راجعون انا لله وانا اليه راجعون انا لله وانا اليه راجعون انا لله وانا اليه راجعون انا لله وانا اليه راجعون <br></p><div class="mbr-section-btn" buttons="0"><a class="btn  display-4 btn-primary" href="https://mobirise.com">Sign Up</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/gamejam1-1024x678.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="background-color: rgb(7, 59, 76);"></div><img src="assets/images/gamejam1-1024x678.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"><h2 class="mbr-fonts-style display-1"><strong>Laptopnya Dell</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">kayanya dia lagi buat animasi 2d deh bang, anime anime gitu kawaaaiiii</p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/hackathon-winner-vrban-1279x727.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="background-color: rgb(7, 59, 76);"></div><img src="assets/images/hackathon-winner-vrban-1279x727.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-left"><h2 class="mbr-fonts-style display-1"><strong>Heckel</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Liat &nbsp;ada om heckel tapi dia bukan anonymous lho, keren kan....<br>kan ?, Kan ?!</p></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-o"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-o"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="cid-qtKGkKMoJb" id="pricing-tables2-s" data-rv-view="557">





    <div class="container">
        <div class="media-container-row">
            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Magang</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-1">{{$tung}}</span>
                        <span class="price-figure mbr-fonts-style display-1"></span>
                        <small class="price-term mbr-fonts-style display-7">Peserta</small>
                    </div>
                </div>

                <div class="plan-body">

                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7"></ul>
                    </div>
                      <div class="mbr-section-btn text-center py-4 pb-5">
                      @if(Auth::check())
                      @if($cit != NULL)

                      <form action="/as/{{$cit}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" name="button" class="btn btn-danger" style="border-radius:50px;cursor:pointer;" value="delete">CANCEL</button>
                      </form>
                      @else
                      <form action="/" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                      <button type="submit" name="button" class="btn btn-success" style="border-radius:50px;cursor:pointer;">JOIN</button>
                      </form>
                      @endif
                      @else
                      <button type="button" name="button" class="btn btn-success" style="border-radius:50px;cursor:pointer;" data-toggle="modal" data-target=".bs-example-modal-md">JOIN</button>
                      </div>
                    @endif

                </div>
            </div>

            <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-md">
                <div class="modal-content">

                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                    <button style="cursor:pointer;" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
                  </div>
                  <form id="demo-form" data-parsley-validate action="{{ route('login') }}" method="post">
                    {{csrf_field()}}
                  <div class="modal-body">
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

                      <label for="fullname" class="{{ $errors->has('email') ? ' has-error' : '' }}">Email * :</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus />
                      @if ($errors->has('email'))
                      <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('email') }}</div>
                      @endif

                      <label for="password" class="{{ $errors->has('password') ? ' has-error' : '' }}">Password * :</label>
                      <input type="password" class="form-control" id="password" name="password" data-parsley-trigger="change" required />
                      @if ($errors->has('password'))
                          <div class="align-center" style="color:white;font-weight: bold;background-color:red;font-size:15px;margin-top:5px;border-radius:5px;">{{ $errors->first('password') }}</div>
                      @endif

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </form>
                </div>
              </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Akademi</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">&nbsp;</span>
                        <span class="price-figure mbr-fonts-style display-1">
                            65</span>
                        <small class="price-term mbr-fonts-style display-7">Peserta</small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7"></ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5"><a href="https://mobirise.com" class="btn btn-success display-4">join</a></div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Event</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">&nbsp;</span>
                        <span class="price-figure mbr-fonts-style display-1">
                            90</span>
                        <small class="price-term mbr-fonts-style display-7">Peserta</small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7"></ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5"><a href="https://mobirise.com" class="btn btn-success display-4">join</a></div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Kompetisi</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">&nbsp;</span>
                        <span class="price-figure mbr-fonts-style display-1">
                            15</span>
                        <small class="price-term mbr-fonts-style display-7">Peserta</small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7"></ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5"><a href="https://mobirise.com" class="btn btn-success display-4">join</a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mbr-section info3 cid-qtKKT8EAm9 mbr-parallax-background" id="info3-y" data-rv-view="560">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><br><br>EVERYDAY WE STRAY FURTHER FROM GOD<br><br><br></h2>



            </div>
        </div>
    </div>
</section>

<section class="cid-qtKJJSDYIc" id="social-buttons3-u" data-rv-view="563">





    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-1"><strong>
                    Follow Us</strong></h2>
                <div>
                    <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social plusone socicon-bg-googleplus mx-2" title="Share link on Google+">
                            <i class="socicon socicon-googleplus"></i>
                        </span>
                        <span class="btn btn-social vkontakte socicon-bg-vkontakte mx-2" title="Share link on VKontakte">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                        <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki mx-2" title="Share link on Odnoklassniki">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                        <span class="btn btn-social pinterest socicon-bg-pinterest mx-2" title="Share link on Pinterest">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                        <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features16 cid-qtKMy2oChg" id="features16-10" data-rv-view="566">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);">    </div>
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-1 title_vidio"><strong>
            OUR VIDEOS</strong></h2>
        <div class="row media-row">
            <div id="owl-demo">

  <div class="item"><img src="assets/images/1-2000x964.jpg" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/video-1366x768.png" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/hackathon-winner-vrban-1279x727.jpg" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/video-3-1366x768.png" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/video-2-1366x768.png" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/video-3-1366x768.png" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/video-1366x768.png" alt="Owl Image"></div>
  <div class="item"><img src="assets/images/video-1-1366x768.png" alt="Owl Image"></div>

</div>
<script>
$(document).ready(function() {

  $("#owl-demo").owlCarousel({

      autoPlay: 3000, //Set AutoPlay to 3 seconds

      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]

  });

});
</script>
        </div>
    </div>
</section>

<section class="cid-qtKTxRzl76" id="footer2-12" data-rv-view="578">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Address</strong>
                    <br>
                    <br>1234 Street Name
                    <br>City, AA 99999
                    <br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Links</strong>
                    <br>
                    <br><a class="text-primary" href="https://mobirise.com/">Website builder</a>
                    <br><a class="text-primary" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a>
                    <br><a class="text-primary" href="https: //mobirise.com/mobirise-free-mac.zip">Download for Mac</a>
                    <br>
                    <br><strong>Feedback</strong>
                    <br>
                    <br>Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 Mobirise - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
