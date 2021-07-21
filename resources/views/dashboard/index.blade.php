@extends('templates.dashboard')
@section('title', "Dashboard Registrationwala | ".\Auth::user()->name )
@section('description', "Login")
@section('keywords', "Login")
@section('content')
@include('dashboard.includes.header')

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
                            <form method="post" action="">
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
                                          <select class="form-control">
                                              <option value="Private Limited Company">Private Limited Company</option>
                                              <option value="One Person Company">One Person Company</option>
                                              <option value=" Nidhi Company"> Nidhi Company</option>
                                              <option value="Section 8 Company">Section 8 Company</option>
                                              <option value=" Producer Company"> Producer Company</option>
                                              <option value=" Producer Company"> Public Limited Company</option>
                                              <option value=" Producer Company"> Sole Proprietorship</option>
                                              <option value=" Producer Company"> Limited Liability Partnership</option>
                                              <option value=" Producer Company"> Partnership Registration</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12 col-md-12">
                                      <div class="form-group">
                                          <label>Address</label>
                                          <textarea class="form-control">{!! \Auth::user()->address !!}</textarea>
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
                              <div class="row">
                                  <div class="col-12 col-md-6">
                                      <div class="form-group">
                                          <label>Upload Photo</label>
                                          <input type="file" class="form-control" />
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <div class="col-sm-6 text-right">
                                      <button type="submit" class="btn btn-secondary w-50 align-items-end btn-sm">Submit</button>
                                  </div>
                              </div>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="Password">
                              <div class="row">
                                  <div class="col-12 col-md-6">
                                      <div class="form-group">
                                          <label>Old password</label>
                                          <input type="password" class="form-control" />
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12 col-md-6">
                                      <div class="form-group">
                                          <label>New password</label>
                                          <input type="password" class="form-control" />
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-12 col-md-6">
                                      <div class="form-group">
                                          <label>Confirm password</label>
                                          <input type="password" class="form-control" />
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <div class="col-sm-6 text-right">
                                      <button type="submit" class="btn btn-secondary w-50 align-items-end btn-sm">Submit</button>
                                  </div>
                              </div>
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