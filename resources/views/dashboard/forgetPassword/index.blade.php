@extends('templates.web')
@section('title', "Reset Password")
@section('description', "Reset Password")
@section('keywords', "Reset Password")
@section('content')
@include('templates.header')
<link rel="stylesheet" href="{{ asset('/css/user-dashboard.css') }}">
<section class="bg-light pt-0 pb-5 border-bottom forgetpassword">
  <section class="login-block">
     <div class="container">
      <div class="bgbox ">
       <div class="row">
        <div class="col-md-6 col-lg-8 banner-sec d-none d-md-block">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
             <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                 <div class="banner-text"> </div>
              </div>
             </div>
             <div class="carousel-item">
              <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                 <div class="banner-text"> </div>
              </div>
             </div>
            </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-4 login-sec">
           <h2 class="text-center">Reset Password</h2>
           @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
          @endif
          @foreach (['danger', 'warning', 'success', 'info'] as $key)
          @if(Session::has($key))
            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
          @endif
          @endforeach
          @if (Session::has('message'))
               <div class="alert alert-success" role="alert">
                  {{ Session::get('message') }}
              </div>
          @endif
          <form action="{{ route('dashboard.forget.password.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email_address" class="col-form-label">E-Mail Address</label>
                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                </button>
            </div>
        </form>


        </div>
       </div>
      </div>
     </div>
  </section>
  <div class="clearfix"></div>
  <!--Option 1 End-->
 </section>

@endsection