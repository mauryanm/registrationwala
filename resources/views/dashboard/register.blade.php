@extends('templates.web')
@section('title', "Register")
@section('description', "Register")
@section('keywords', "Register")
@section('content')
@include('templates.header')
<link rel="stylesheet" href="{{ asset('/css/user-dashboard.css') }}">
<section class="bg-light pt-0 pb-5 border-bottom "> 
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
                        <h2 class="text-center">Register</h2>
                        <form class="login-form" action="{{ route('dashboard.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Emnail" name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-login w-50 ">Register</button> <small class="text-right mt-2 pull-right"></small>
                            </div>      
                        </form>  
                        <div class="copy-text">
                            <div class="or"><span>OR</span></div>
                            <div class="row  ">
                                <div class="col-md-12">
									<a href="{{ url('auth/facebook') }}" class="btn text-white btn-fb btn-sm btn-block mb-2 btn-round radius0 normal-text-size"> <span class="btn-label"><i class="icon fa fa-facebook"></i></span> Login with Facebook</a>
								</div>
								<div class="col-md-12">
									<a href="{{ url('auth/google') }}" class="btn text-white btn-gm btn-sm btn-block  mb-2  btn-round radius0 normal-text-size "> <span class="btn-label"><i class="icon fa fa-google"></i></span> Login with Gmail</a>
								</div>
                                <div class="col-md-12">
                                <button type="button"  class="btn btn-fb btn-sm btn-block mb-2  btn-round radius0 normal-text-size "> <span class="btn-label"><i class="fa fa-users"></i></span> Associate Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </section>
</section>
@endsection