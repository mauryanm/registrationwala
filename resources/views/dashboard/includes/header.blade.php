<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="bg-white pt-2 pb-2 dashboard-header">
              <div class="row align-items-center h-100">
                  <div class="col-sm-12 col-md-12 col-lg-3 text-center">
                      <a href="javascript:void(0);"><img src="../images/logo.png" alt="Logo" class="img-fluid" /></a>
                      <nav class="navbar navbar-expand-lg pull-right topnavbar">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fa fa-bars" aria-hidden="true"></i>
                          </button>
                      </nav>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-9">
                      <nav class="navbar navbar-expand-lg float-lg-right topnavbar">
                          <div class="collapse navbar-collapse" id="top">
                              <ul class="navbar-nav mr-auto">
                                  <li>
                                      <form class="my-2 my-lg-0">
                                          <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Search" />
                                              <div class="input-group-append">
                                                  <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                                              </div>
                                          </div>
                                      </form>
                                  </li>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a></div>

                                  <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="https://www.registrationwala.com/dashboard/user.jpg" alt="user" class="profile-pic rounded-circle" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" />{{ \Auth::user()->name }}
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="{{ route('dashboard.logout') }}">Logout</a></div>
                                      <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
