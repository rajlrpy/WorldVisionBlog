@extends('frontend.layouts.main')
@section('title',$category->meta_title)
@section('meta_keywords',$category->meta_keywords)
@section('meta_description',$category->meta_description)

@section('css')
    <style>
        .p-active{
            background: rgba(0, 0, 0, 0.9) !important;
            color: #fff !important;
        }
        .bg-snow{
            background: #F5FEFD!important;
        }
    </style>
@endsection

@section('content')
{{-- Main Container --}}
<div class="container">
    <div class="world-news">
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex position-relative  float-left">
              <h3 class="section-title">{{ $category->name }}</h3>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-sm-9 grid-margin mb-5 mb-sm-2">
                @forelse ($posts as $post)
                <div class="container bg-snow p-4 mb-2">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 grid-margin" >
                            <h5 class="font-weight-bold mt-3">
                                {{ $post->name }}
                            </h5>
                            <p class="fs-15 text-secondary">
                               {{ substr($post->meta_description,0,50)."........."}}
                            </p>
                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                <span class="fs-10 mr-1">posted on {{ $post->created_at->format('d-M-Y') }}</span>
                                <i class="mdi mdi-event-time mr-3"></i>
                                <span class="fs-10 mr-1">{{ $post->comments_count }}</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                            <a href="{{ route('viewByPost',[$category->slug,$post->slug]) }}" class="btn btn-dark text-white font-weight-bold  pt-2"
                                >Read Article</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-9 col-sm-9 grid-margin mb-5 mb-sm-2">
                    <h5 class="font-weight-bold mt-3">
                        No Posts Available
                    </h5>
                </div>
                @endforelse
            {!! $posts->links('pagination::bootstrap-4') !!}

            </div>
            <div class="col-lg-3 col-sm-3 grid-margin mb-5 mb-sm-2">
                <div class="container p-4">
                    <div class="row">
                        @forelse ($latestPosts as $post)
                            <div class="col-lg-12 col-sm-12 grid-margin mb-5 mb-sm-2 bg-snow">
                                <h6 class="font-weight-bold mt-3">
                                    {{ $post->name }}
                                </h6>
                                <a href="{{ route('viewByPost',["category_slug"=>$post->category->slug,"post_slug"=>$post->slug]) }}" class="font-weight-normal fs-14 text-dark pt-2">Read Article</a>
                            </div>
                        @empty
                        <div class="col-lg-12 col-sm-12 grid-margin mb-5 mb-sm-2 bg-snow">
                            <h5 class="font-weight-bold mt-3">
                                No Articles
                            </h5>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- container-scroller ends -->
@endsection
