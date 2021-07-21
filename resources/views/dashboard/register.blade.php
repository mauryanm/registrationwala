@extends('templates.web')
@section('title', "Login")
@section('description', "Login")
@section('keywords', "Login")
@section('content')
@include('templates.header')
<style>
.login-block {
	background: #DE6262;
	/* fallback for old browsers */
	background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
	/* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to bottom, #FFB88C, #DE6262);
	/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	float: left;
	width: 100%;
	padding: 50px 0; margin-bottom:100px;
}

.login-block1 {
	background: #DE6262;
	/* fallback for old browsers */
	background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
	/* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to bottom, #FFB88C, #DE6262);
	/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	
	width: 100%;
	padding: 20px 10px; border-radius:20px;  
}
.login-block1 .modal-content img{ border-radius:0px;}


.closemodel{ position:relative;}
.closemodel span{ position:absolute; right:10px; top:10px; background-color:#FFF; width:20px; height:20px; border-radius:50%; text-align:center; line-height:20px;}

.banner-sec {
	background: #ddd;

	min-height: 500px;
	border-radius: 0 0px 0px 0;
	padding: 0;
}
.banner-sec1 {
	background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;
	background-size: cover;
	min-height: 430px;
	border-radius: 0 10px 10px 0;
	padding: 0;
}


.bgbox {
	background: #fff;
	border-radius: 0px;
	box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
}

.carousel-inner {
	border-radius: 0 0px 0px 0;
}

.carousel-caption {
	text-align: left;
	left: 5%;
}



.login-sec {
	padding: 20px 30px;
	position: relative;
}

.login-sec .copy-text {
	position: relative;
	width: 100%;
	bottom: 0px;
	font-size: 13px;
	text-align: center;
}

.login-sec .copy-text i {
	color: #fff;
}

.login-sec .copy-text a {
	color: #E36262;
}


.login-sec1 {
	padding: 20px 30px;
	position: relative; background-color: rgba(255,255,255,0.8); margin:30px 0px;
}

.login-sec1 .copy-text {
	width: 100%;
	bottom: 20px;
	font-size: 13px;
	text-align: center;
}

.login-sec1 .copy-text i {
	color: #fff;
}

.login-sec1 .copy-text a {
	color: #E36262;
}


.login-sec1 h2 {
    margin-bottom: 30px;
    font-weight: 800;
    font-size: 30px;
    color: #DE6262;
}
.login-sec1 h2:after {
    content: " ";
    width: 100px;
    height: 5px;
    background: #FEB58A;
    display: block;
    margin-top: 20px;
    border-radius: 3px;
    margin-left: auto;
    margin-right: auto;
}


.login-sec h2 {
	margin-bottom:20px;
	font-weight: 800;
	font-size: 26px;
	color: #DE6262;
}

.login-sec h2:after {
	content: " ";
	width: 100px;
	height: 5px;
	background: #FEB58A;
	display: block;
	margin-top: 20px;
	border-radius: 3px;
	margin-left: auto;
	margin-right: auto
}

.btn-login {
	background: #DE6262;
	color: #fff;
	font-weight: 600;
}

.banner-text {
	width: 70%;
	position: absolute;
	bottom: 40px;
	padding-left: 20px;
}

.banner-text h2 {
	color: #fff;
	font-weight: 600;
}

.banner-text h2:after {
	content: " ";
	width: 100px;
	height: 5px;
	background: #FFF;
	display: block;
	margin-top: 20px;
	border-radius: 3px;
}

.banner-text p {
	color: #fff;
}

.or {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #ddd; 
   line-height: 0.1em;
   margin: 30px 0 20px; 
} 

.or span { 
    background-color:#fff; width:30px; height:30px; border-radius:50%;
    padding:10px 10px; 
}

 .loginbg{ background-image:url(images/login-bg.jpg);} 
</style>
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
                                    <button type="button" class="btn  btn-fb btn-sm btn-block mb-2 btn-round radius0 normal-text-size"> <span class="btn-label"><i class="icon fa fa-facebook"></i></span> Login with Facebook</button>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-gm btn-sm btn-block  mb-2  btn-round radius0 normal-text-size "> <span class="btn-label"><i class="icon fa fa-google"></i></span> Login with Gmail</button>
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