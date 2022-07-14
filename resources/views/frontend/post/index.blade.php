@extends('frontend.layouts.main')

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
          <div class="col-sm-12 col-md-12">
            <div class="d-flex position-relative float-left">
                <h3 class="section-title">{{$post->category->name . " | " .$post->name }}</h3>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-sm-9 grid-margin mb-5 mb-sm-2 " >
                <div class="container bg-snow p-4">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 grid-margin mb-5 mb-sm-2 bg-snow">
                            {{-- <h5 class="section-title font-weight-bold mt-3">
                                {{ $post->name }}
                            </h5> --}}
                            <p class="fs-15 font-weight-normal">
                                {!! $post->description !!}
                            </p>
                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                <span class="fs-10 mr-1">posted on {{ $post->created_at->format('d-M-Y') }}</span>
                                <i class="mdi mdi-event-time mr-3"></i>
                                <span class="fs-10 mr-1">{{ $post->comments_count }}</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                </div>
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
    {{-- comment section --}}
    <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="d-flex position-relative float-left">
              <h3 class="section-title">Leave a Comment</h3>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 mb-5 mb-sm-2">
        <form action="{{ route('comment.store') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $post->slug }}" name="post_slug">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control textarea"
                        placeholder="Leave a Comment here"
                        id="comment"
                        name="comment" required></textarea>
                    </div>
                </div>
            </div>
            @if (auth()->check())
                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <button value="submit" class="btn btn-dark font-weight-bold">
                            Submit
                        </button>
                    </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-dark font-weight-bold">
                                Login to Comment
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </form>
        </div>
    </div>
    @forelse ($comments as $comment)
    <div class="row">
        <div class="col-lg-9 col-sm-9 grid-margin mb-2 mb-sm-2 bg-snow">
            <p class="fs-15 font-weight-bold">
                @if (!auth()->check())
                    {{ $comment->user->name }}

                @endif
              @auth
                    {{ $comment->user_id==auth()->user()->id ? $comment->user->name . " (You)": $comment->user->name}}
              @endauth
            </p>
            <p class="fs-12 font-weight-normal">
                {!! $comment->comment !!}
            </p>
            <p class="text-color m-0  d-flex align-items-center">
                <span class="fs-10 mr-1">added on {{ $comment->created_at->format('d-M-Y h:i:s') }}</span>
                @auth
                    @if ($comment->user_id == auth()->user()->id)
                        <i class="mdi mdi-event-time mr-3"></i>
                        <span class="fs-10 mr-1">edit</span>
                        <i class="mdi mdi-comment-outline mr-2"></i>
                        <span class="fs-10 mr-1">delete</span>
                        <i class="mdi mdi-comment-outline"></i>
                    @endif
                @endauth
            </p>
        </div>
    </div>
    @empty
    <div class="row">
        <div class="col-lg-9 col-sm-9 grid-margin mb-2 mb-sm-2 bg-snow">
            <p class="fs-15 font-weight-normal">
                No Comments Added...
            </p>
        </div>
    </div>
    @endforelse
    {!! $comments->links('pagination::bootstrap-4') !!}


    {{-- comment section --}}
</div>
  <!-- container-scroller ends -->
@endsection



@section('title',$post->meta_title)
@section('meta_keywords',$post->meta_keywords)
@section('meta_description',$post->meta_description)
