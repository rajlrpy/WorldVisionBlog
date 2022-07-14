@extends('frontend.layouts.main')
@section('title',$category->meta_title ?? "Register ")
@section('meta_keywords',$category->meta_keywords ?? "Register ")
@section('meta_description',$category->meta_description ??" Register ")


@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5 mb-sm-2">
        <div class="text-center">
          <h1 class="text-center mt-4">
            Register Yourself
          </h1>
            <p class="text-secondary fs-15 mb-2 pb-3">
               @if ($errors->any())
                    @foreach ($errors->all() as $error)
                            {{ $error }}
                    @endforeach

               @else
                    It hardly takes a minute.
               @endif
            </p>
        </div>
      </div>
    </div>
    <div class="contact-wrap">
      <div class="row">
        <div class="col-lg-12  mb-5 mb-sm-2">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    aria-describedby="name"
                    placeholder="Name *"/>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    {{ old('email') }}
                    aria-describedby="email"
                    placeholder="Email *"
                  required />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    id="subject"
                    name="password"
                    aria-describedby="Enter Password"
                    placeholder="Enter Password *"
                  required />
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control"
                      id="subject"
                      name="password_confirmation"
                      aria-describedby="Confirm Password"
                      placeholder="Confirm Password *"
                    required />
                  </div>
                </div>
              </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-dark font-weight-bold"
                    >Register</button>
                    <a href="{{ route('login') }}" class="btn btn-lg btn-white font-weight-bold"
                    >Already Registered?</a>
                </div>

              </div>
            </div>
          </form>
        </div>
@endsection
