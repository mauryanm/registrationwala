@extends('templates.dashboard')
@section('title', "Dashboard Registrationwala | ".\Auth::user()->name )
@section('description', "Login")
@section('keywords', "Login")
@section('content')
@include('dashboard.includes.header')
@include('dashboard.includes.error')

<section class="dashboadbg pt-5 pb-5">
  <div class="container">
    <div class="row">
      @include('dashboard.includes.sidebar')
      <div class="col-12 col-md-8 d-flex">
        <div class="tabs-section-nav user_sidebarbox p-3 w-100 align-items-stretch">
          <h4>Profile Account</h4>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs justify-content-end" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#profile" role="tab" data-toggle="tab">My Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#Upload" role="tab" data-toggle="tab">Upload Photo</a></li>
                <li class="nav-item"><a class="nav-link" href="#Password" role="tab" data-toggle="tab">Change Password</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content p-3">
                <div role="tabpanel" class="tab-pane fade in active show" id="profile">
                  <form method="post" action="{{ route('dashboard.updateuser',\Auth::user()->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="profile" value="profile">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="{{ \Auth::user()->name }}" name="name" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" disabled class="form-control" value="{{ \Auth::user()->email }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="{{ \Auth::user()->phone }}" name="phone" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>City Name</label>
                                <input type="text" class="form-control" value="{{ \Auth::user()->city }}" name="city" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label>Company Name</label>
                              <input type="text" class="form-control" value="{{ \Auth::user()->compname }}" name="compname" />
                          </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">
                          <label>Company Type</label>
                          <select class="form-control" name="comptype">
                              <option value="Private Limited Company" {{ ((\Auth::user()->comptype=='Private Limited Company')?'selected':'')}}>Private Limited Company</option>
                              <option value="One Person Company" {{ ((\Auth::user()->comptype=='One Person Company')?'selected':'')}}>One Person Company</option>
                              <option value="Nidhi Company" {{ ((\Auth::user()->comptype=='Nidhi Company')?'selected':'')}}> Nidhi Company</option>
                              <option value="Section 8 Company" {{ ((\Auth::user()->comptype=='Section 8 Company')?'selected':'')}}>Section 8 Company</option>
                              <option value="Producer Company" {{ ((\Auth::user()->comptype=='Producer Company')?'selected':'')}}> Producer Company</option>
                              <option value="Public Limited Company" {{ ((\Auth::user()->comptype=='Public Limited Company')?'selected':'')}}> Public Limited Company</option>
                              <option value="Sole Proprietorship" {{ ((\Auth::user()->comptype=='Sole Proprietorship')?'selected':'')}}> Sole Proprietorship</option>
                              <option value="Limited Liability Partnership" {{ ((\Auth::user()->comptype=='Limited Liability Partnership')?'selected':'')}}> Limited Liability Partnership</option>
                              <option value="Partnership Registration" {{ ((\Auth::user()->comptype=='Partnership Registration')?'selected':'')}}> Partnership Registration</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control">{!! \Auth::user()->address !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 offset-sm-6 text-right">
                            <button type="submit" class="btn btn-secondary w-50 align-items-end btn-sm">Save</button>
                        </div>
                    </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Upload">
                  <form method="post" enctype="multipart/form-data" action="{{ route('dashboard.updateuser',\Auth::user()->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="profile" value="image">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Upload Photo</label>
                                <input type="file" name="image" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="btn btn-secondary w-50 align-items-end btn-sm">Submit</button>
                        </div>
                    </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Password">
                  <form method="post" action="{{ route('dashboard.updateuser',\Auth::user()->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="profile" value="password">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" name="new_password" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" name="new_password_confirmation" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="btn btn-secondary w-50 align-items-end btn-sm">Submit</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  @include('dashboard.includes.footer')
 @endsection