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
          <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">
              <i class="icon ion-ios-speedometer"></i>
              <span>İdarə paneli</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('flights')) ? 'active' : '' }}">
            <a class="nav-link" href="/flights">
              <i class="icon ion-plane" ></i>
              <span>Uçuşlar</span>
            </a>
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link {{ (request()->is('hotels')) ? 'active' : '' }}" href="#">
              <i class="fa fa-bed" style="font-size: 19px;">&nbsp;</i>
              <span>Otellər</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="page-profile.html">Profile Page</a></li>
                <li><a href="page-invoice.html">Invoice</a></li>
                <li><a href="page-contact.html">Contact Manager</a></li>
                <li><a href="page-file-manager.html">File Manager</a></li>
                <li><a href="page-calendar.html">Calendar</a></li>
                <li><a href="page-timeline.html">Timeline</a></li>
                <li class="sub-with-sub">
                  <a href="#">Pricing</a>
                  <ul>
                    <li><a href="page-pricing.html">Pricing 01</a></li>
                    <li><a href="page-pricing2.html">Pricing 02</a></li>
                    <li><a href="page-pricing3.html">Pricing 03</a></li>
                  </ul>
                </li>
                <li class="sub-with-sub">
                  <a href="page-signin.html">Sign In</a>
                  <ul>
                    <li><a href="page-signin.html">Signin Simple</a></li>
                    <li><a href="page-signin2.html">Signin Split</a></li>
                  </ul>
                </li>
                <li class="sub-with-sub">
                  <a href="page-signup.html">Sign Up</a>
                  <ul>
                    <li><a href="page-signup.html">Signup Simple</a></li>
                    <li><a href="page-signup2.html">Signup Split</a></li>
                  </ul>
                </li>
                <li class="sub-with-sub">
                  <a href="#">Error Pages</a>
                  <ul>
                    <li><a href="page-404.html">404 Not Found</a></li>
                    <li><a href="page-505.html">505 Forbidden</a></li>
                    <li><a href="page-500.html">500 Internal Server</a></li>
                    <li><a href="page-503.html">503 Service Unavailable</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Forms</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="form-elements.html">Form Elements</a></li>
                <li><a href="form-layouts.html">Form Layouts</a></li>
                <li><a href="form-validation.html">Form Validation</a></li>
                <li><a href="form-wizards.html">Form Wizards</a></li>
                <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                <li><a href="form-select2.html">Select2</a></li>
                <li><a href="form-rangeslider.html">Range Slider</a></li>
                <li><a href="form-datepicker.html">Datepicker</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page-messages.html">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Messages</span>
              <span class="square-8"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html">
              <i class="icon ion-ios-analytics-outline"></i>
              <span>Widgets</span>
            </a>
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
