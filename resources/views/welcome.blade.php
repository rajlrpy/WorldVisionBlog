@extends('frontend.layouts.main')

@section('content')
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between  mb-3 mb-lg-0">
                <div>
                  <img
                    src="{{ asset('assets/images/dashboard/star-magazine-1.jpg') }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  The morning after: What people
                </h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="assets/images/dashboard/star-magazine-2.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">How Hungary produced the</h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="assets/images/dashboard/star-magazine-3.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  A sleepy island paradise's most
                </h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="assets/images/dashboard/star-magazine-4.jpg"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  America's most popular national
                </h5>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="owl-carousel owl-theme" id="main-banner-carousel">
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="assets/images/dashboard/banner.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="assets/images/dashboard/banner_1.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="assets/images/dashboard/banner_2.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
                        Lorem Ipsum has been the industry's standard
                      </h5>
                      <p class="text-color m-0 pt-2 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    <div class="carousel-image">
                      <img src="assets/images/dashboard/banner_3.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-sm-6">
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="assets/images/dashboard/Profile_1.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Henry Itondo</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      The Most And Least Visited Countries In The World
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="assets/images/dashboard/Profile_2.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Oka Tomoaki</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      The Best Places to Travel in month August
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="pt-4 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="assets/images/dashboard/Profile_2.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Joana Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Focus On Fun And Challenging Lifetime Activities
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pt-3 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="assets/images/dashboard/Profile_4.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Rita Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Bread Is The Most Widely Consumed Food In The World
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="pt-4 pb-4">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="assets/images/dashboard/Profile_5.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Jurrien Oldhof</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      What Is Music, And What Does It Mean To Us
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pt-3 pb-4">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="assets/images/dashboard/Profile_6.jpg"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Yamaha Toshinobu</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Is Breakfast The Most Important Meal Of The Day
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/images/dashboard/travel.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">TRAVEL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  Refugees flood Turkey's border with Greece
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/images/dashboard/news.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">NEWS</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  South Korea’s Moon Jae-in sworn in vowing address
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/images/dashboard/art.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">ART</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  These puppies are training to assist in avalanche rescue
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/images/dashboard/business.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">BUSINESS</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  'Love Is Blind' couple opens up about their first year
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
            </div>
          </div>
          <div class="editors-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Popular News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/images/dashboard/glob.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">NEWS</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                  Melania Trump speaks about courage at State Department
                </h1>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type
                  and
                </p>
              </div>
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-5.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">POLITICS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      A look at California's eerie plane graveyards
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-6.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">TRAVEL</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The world's most beautiful racecourses
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-7.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">POLITICS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Japan cancels cherry blossom festivals over virus fears
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-8.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">TRAVEL</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Classic cars reborn as electric vehicles
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Editor choice</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-9.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">LIFESTYLE</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The island country that gave Mayor Pete his name
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-10.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">SPORTS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Disney parks expand (good) vegan food options
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-11.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">INTERNET</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      A hot springs where clothing is optional after dark
                    </h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-12.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Japanese chef carves food into incredible pieces of art
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-13.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The Misanthrope Society: A Taipei bar for people who
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="assets/images/dashboard/star-magazine-14.jpg"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">TOURISM</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      From Pakistan to the Caribbean: Curry's journey
                    </h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="position-relative mb-3">
                  <img
                    src="assets/images/dashboard/star-magazine-15.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <div class="video-thumb text-muted">
                    <span><i class="mdi mdi-menu-right"></i></span>LIVE
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest News</h3>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->
@endsection
