<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/admin/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/admin/chartist/css/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/admin/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin/slim.css') }}">

    {{-- CSS assets in head section --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

    {{-- ... a lot of main HTML code ... --}}

    {{-- JS assets at the bottom --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    {{-- ...Some more scripts... --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @yield('scripts')

  </head>
  <body>
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="/dashboard">slim<span>.</span></a></h2>

          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}" alt="">
              <span>{{ Auth::user()->name }}</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="page-signin.html" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  <i class="icon ion-forward"></i> Sign Out
                </a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                  @csrf
                </form>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="/">
              <i class="icon ion-ios-home"></i>
              <span>Ön səhifə</span>
            </a>
          </li>
          <li class="nav-item {{ classActivePath('dashboard') }}">
            <a class="nav-link" href="/dashboard">
              <i class="icon ion-ios-speedometer"></i>
              <span>İdarə paneli</span>
            </a>
          </li>
          <li class="nav-item {{ classActivePath('flights') }} with-sub">
            <a class="nav-link" href="/flights">
              <i class="icon ion-plane" ></i>
              <span>Uçuşlar</span>
            </a>
            <div class="sub-item">
              <ul>
                <li>
                  <a href="/flights/create">Uçuş əlavə et</a>
                </li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item  {{ classActivePath('hotels') }} with-sub">
            <a class="nav-link" href="/hotels">
              <i class="icon fa fa-bed"></i>
              <span>Otellər</span>
            </a>
            <div class="sub-item">
              <ul>
                <li>
                  <a href="/hotels/create">Otel əlavə et</a>
                </li>
              </ul>
            </div><!-- sub-item -->
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

    <div class="slim-mainpanel">
      <div class="container">

        <div class="slim-pageheader">
          {{ Breadcrumbs::render() }}
          <h6 class="slim-pagetitle">@yield('title')</h6>
        </div><!-- slim-pageheader -->

        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              {{ session('success') }}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              Xəta baş verdi!
          </div>
        @endif

        <div class="section-wrapper">
          @yield('content')
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
    

    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="">ThemePixels</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="{{ asset('lib/admin/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('lib/admin/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('lib/admin/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/admin/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('lib/admin/chartist/js/chartist.js') }}"></script>
    <script src="{{ asset('lib/admin/d3/js/d3.js') }}"></script>
    <script src="{{ asset('lib/admin/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('lib/admin/jquery.sparkline.bower/js/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('js/admin/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/admin/dashboard.js') }}"></script>
    <script src="{{ asset('js/admin/slim.js') }}"></script>
  </body>
</html>
