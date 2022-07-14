<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('meta_description')" />
    <meta name = "keywords" content = "@yield('meta_keywords')" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> @yield('title') </title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{ asset('frontend/assets/vendors/mdi/css/materialdesignicons.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/aos/dist/aos.css/aos.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('frontend/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('frontend/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css') }}"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- endinject -->
    {{-- page level css --}}
    @yield('css')
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li>{{ date('D').", ".date('d M').", ".date('Y')." " }}</li>
                  <li>30°C,USA</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="#"
                    ><img src="{{ asset('frontend/assets/images/logo.svg') }}" alt=""
                  /></a>
                </div>
                <div class="d-flex">
                    @if(!auth()->check())
                        <ul class="navbar-right">
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    @endif
                    <ul class="navbar-right">
                        @auth
                        <li>
                            <a href="{{ auth()->user()->is_admin?route('admin.dashboard'):"#" }}">
                                    {{ auth()->user()->name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}">Logout</a>
                        </li>
                        @endauth
                    </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"id="navbarSupportedContent" >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center">
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    @php
                        $categories = App\Models\Admin\Category::where('status','1')->get();
                    @endphp
                    @foreach ($categories as $category)
                        <li class="nav-item ">
                            <a class="nav-link @if(empty($post)) {{ '' }} @else {{ $post->category->slug==$category->slug?'p-active':' ' }}  @endif" style="padding: 10px !important" href="{{ route('viewByCategory',$category->slug) }}" >{{ $category->name }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- partial -->
        </div>
    </header>
