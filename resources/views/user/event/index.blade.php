<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.2.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.2.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Page 2</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/gypyicon-bootlize.css">



</head>
<body>
<section class="menu cid-qtKU0yOMIy" once="menu" id="menu1-1l" data-rv-view="453">



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

                        Contact</a></li>
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

<section class="engine"><a href="https://mobirise.co/b">free website creator</a></section><section class="mbr-section info3 cid-qtKKT8EAm9" id="info3-1o" data-rv-view="455">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><br><br>Events<br></h2>
                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5">Belajar membuat aplikasi dengan bimbingan developer terbaik Indonesia dan kurikulum perusahaan teknologi dunia.<br><br><br><br></h3>


            </div>
        </div>
    </div>
</section>

<section class="mbr-section" style="padding:10px;">
    <div class="container">
        <div class="row">
          <div class="col-sm-12" >
           <form class="filsear" style="float:left;">
                <div class="form-group filsear">
                  <label for="filter"><span class="input-group-addon glyphicon glyphicon-filter"></span></label>
                  <select id="filter" class="form-control">
                    <option>Disabled select</option>
                  </select>
                </div>
            </form>
            <form class="filsear" style="float:right;">
                <div class="form-group">
                     <input type="text" class="form-control input-form" placeholder="Search">
                     <input type="submit" class="btn btn-default btn-sm btn-form hidden-xs">
                </div>
            </form>

            </div>
        </div>
    </div>
</section>
<div id="post_event" class="container-fluid">
  @foreach($userevent as $event)
    <div class="media-container-row">
        <div class="col-12 col-md-8">
           <section class="mbr-section cid-qtQB97em2Q">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 60%;">
                  <img src="assets/images/toplogo-302x300.png" alt="Mobirise" title="" media-simple="true">
                </div>
                <div class="media-content">
                    <div class="mbr-section-text">
                          <p class="mbr-text mb-0 mbr-fonts-style display-7"><a href="event/{{$event->id}}">{{$event->title}}</a><br>
                        <i>Oleh : </i>{{$event->penyelenggara}}</p>
                        <p class="mbr-text mb-0 mbr-fonts-style display-7">{{$event->desc_pembuka}}</p>
                    </div>
                </div>
                <div class="media-content">
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-0 mbr-fonts-style display-7">
                         <span class="glyphicon glyphicon-user" aria-hidden="true"></span> : {{$event->peserta}} Peserta<br>
                          <span class="glyphicon glyphicon glyphicon-calendar"></span> : {{$event->date}}<br>
                          <span class="glyphicon glyphicon-time"></span> : {{$event->time}}<br>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> : {{$event->point}}<br>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div><!--/.Media Container-->
  @endforeach
</div>
<section class="cid-qtKTxRzl76" id="footer2-1r" data-rv-view="464">
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
                <div class="google-map"><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">Click here to generate your map!</a></small></div><div><small><a href="http://www.masoun-loubnan.org/freemasonry-in-singapore/">ctrip hotel welcome promotion code</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-6.937696989517583,107.6074798055572),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-6.937696989517583,107.6074798055572)});infowindow = new google.maps.InfoWindow({content:'<strong>Shaffindo Megakreasi</strong><br>PT INTI<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>
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


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
