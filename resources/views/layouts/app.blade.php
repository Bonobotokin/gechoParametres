<!doctype html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/images/Icône GECHO.ico')}}">
  <title>gecho | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet"> -->
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css')}}">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/font-awesome.min.css')}}">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/css/owl.theme.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/css/owl.transitions.css')}}">
  <!-- meanmenu CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/meanmenu/meanmenu.min.css')}}">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/animate.css')}}">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/normalize.css')}}">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/chosen/chosen.css')}}">
  <!-- jvectormap CSS
		============================================ -->
  <!-- <link rel="stylesheet" href="{{ asset ('assets/css/jvectormap/jquery-jvectormap-2.0.3.css')}}"> -->
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/notika-custom-icon.css')}}">

  @yield('style')
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/wave/waves.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/css/wave/button.css')}}">

  <link rel="stylesheet" href="{{ asset ('assets/css/dialog/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('assetscss/dialog/dialog.css')}}">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/main.css')}}">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset ('assets/css/responsive.css')}}">
  <script src="{{ asset ('assets/js/dialog/sweetalert2.min.js')}}"></script>

  <!-- modernizr JS
		============================================ -->
  <!-- <script src="{{ asset ('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script> -->
</head>
<style>
  .navbar-profile {
    display: flex;
    font-weight: normal;
    align-items: center;

  }

  .img-xs {
    width: 35px;
    height: 35px;
  }

  .rounded-circle {
    border-radius: 50% !important;
    margin: -25% 0 0 0;
  }

  .navbar-profile .navbar-profile-name {
    white-space: nowrap;
    margin-left: 1rem;
    font-size: 15px;
    color: white;
  }

  .badge-danger {
    background-color: red;
  }

  .badge-info {
    background-color: #471CF1;
  }

  .badge-warning {
    background-color: #04c5a3;
  }

  .badge-success {
    background-color: #28a745;
  }
</style>

<body>
  @guest
  @include('auth.login')
  @else
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="logo-area">
            <a href="#"><img src="{{asset('assets/images/logo.png')}}" width="150px" height="100px" alt="cyberHub_logo" /></a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
          <div class="header-top-menu">
            <ul class="nav navbar-nav notika-top-nav">

              <li class="nav-item">
                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                  <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/face15.jpg') }}" style="border-radius: 50%;" alt="">

                </a>
                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                  <div class="hd-mg-tt">

                  </div>
                  <div class="hd-mg-va">
                    <a class="nav-link count-indicator dropdown-toggle">
                      {{Auth::user()->name}}
                    </a>
                    <a class="nav-link count-indicator dropdown-toggle">
                      <i class="notika-icon notika-settings"></i>
                      Parametres
                    </a>
                    <a class="nav-link count-indicator dropdown-toggle" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}" data-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-logout text-danger"></i>
                      Deconnexion
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @yield('mobil')
  <!-- Mobile Menu end -->
  <!-- Main Menu area start-->
  @include('layouts.navigation')

  <div class="normal-table-area">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="alert-list">

          @if ($errors->any())
          <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">
                <i class="notika-icon notika-close"></i></span>
            </button> Ooops! @foreach ($errors->all() as $error)
            <ul>
              <ol>{{ $error }}</ol>
            </ul>

            @endforeach
          </div>
          @endif
          @if ($message = Session::get('success'))
          <script>
            swal("Bien jouer", "{{ $message }} ", 'success', {
              button: true,
              button: "ok",
              timer: 3000,
              SuccessMode: true
            });
          </script>
          @endif
        </div>
      </div>
    </div>
    @yield('content')
  </div>
  @yield('modal')



  @endguest
  <script src="{{ asset ('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{ asset ('assets/plugins/jquery-ui/jquery-ui.js')}} "></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="{{ asset ('assets/js/bootstrap.min.js')}}"></script>
  <!-- wow JS
		============================================ -->
  <script src="{{ asset ('assets/js/wow.min.js')}}"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="{{ asset ('assets/js/jquery-price-slider.js')}}"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="{{ asset ('assets/js/owl.carousel.min.js')}}"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="{{ asset ('assets/js/jquery.scrollUp.min.js')}}"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="{{ asset ('assets/js/meanmenu/jquery.meanmenu.js')}}"></script>
  <!-- counterup JS
		============================================ -->
  <script src="{{ asset ('assets/js/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset ('assets/js/counterup/waypoints.min.js')}}"></script>
  <script src="{{ asset ('assets/js/counterup/counterup-active.js')}}"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="{{ asset ('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="{{ asset ('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset ('assets/js/sparkline/sparkline-active.js')}}"></script>
  <!-- flot JS
		============================================ -->
  <script src="{{ asset ('assets/js/flot/jquery.flot.js')}}"></script>
  <script src="{{ asset ('assets/js/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{ asset ('assets/js/flot/flot-active.js')}}"></script>
  <!-- knob JS
		============================================ -->
  <script src="{{ asset ('assets/js/knob/jquery.knob.js')}}"></script>
  <script src="{{ asset ('assets/js/knob/jquery.appear.js')}}"></script>
  <script src="{{ asset ('assets/js/knob/knob-active.js')}}"></script>
  <!--  Chat JS
		============================================ -->
  <script src="{{ asset ('assets/js/chat/jquery.chat.js')}}"></script>

  <script src="{{ asset ('assets/js/dialog/sweetalert2.min.js')}}"></script>
  <script src="{{ asset ('assets/js/dialog/dialog-active.js')}}"></script>
  <!--  todo JS
		============================================ -->
  <script src="{{ asset ('assets/js/todo/jquery.todo.js')}}"></script>
  <!--  wave JS
		============================================ -->
  <script src="{{ asset ('assets/js/wave/waves.min.js')}}"></script>
  <script src="{{ asset ('assets/js/wave/wave-active.js')}}"></script>
  <!-- plugins JS
		============================================ -->
  <script src="{{ asset ('assets/js/plugins.js')}}"></script>
  <script src="{{ asset ('assets/js/dialog/sweetalert2.min.js')}}"></script>
  <!-- main JS
		============================================ -->
  <script src="{{ asset ('assets/js/main.js')}}"></script>
  <!-- tawk chat JS
		============================================ -->
  <!-- <script src="{{ asset ('assets/js/tawk-chat.js')}}"></script> -->

  <script src="{{ asset ('assets/js/main.js')}}"></script>
  @yield('script')

</body>

</html>