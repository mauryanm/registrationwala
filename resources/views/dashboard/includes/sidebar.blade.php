<div class="col-12 col-md-4 d-flex">
  <div class="user_sidebarbox w-100 align-items-stretch">
     <div class="pt-3  w-100 align-items-stretch">
      @if(\Storage::disk('public')->exists(\Auth::user()->image))
        <div class="text-center"> <img src="{{Voyager::image(\Auth::user()->image)}}" class="img-fluid rounded-circle profile-user-img" alt=""> </div>
        @else
        <div class="text-center"> <img src="{{Voyager::image('images/user.jpg')}}" class="img-fluid rounded-circle profile-user-img" alt=""> </div>
        @endif
        <h5 class="text-center mt-2">{{ \Auth::user()->name }} </h5>
        <hr>
     </div>
     <ul class="list-unstyled p-3 user-sidebar bluebg">
        <li> <i class="fa fa-envelope-o"></i> {{ \Auth::user()->email }}</li>
        <li><i class="fa fa-mobile"></i> {{ \Auth::user()->phone }}</li>
     </ul>
     <ul class="nav flex-column side-nav-dashboard ">
        <?php  $base=basename($_SERVER['PHP_SELF']); ?>
        <li class="nav-item"><a  href="{{ url('/dashboard') }}" class="nav-link {{ (\Request::is('dashboard')?'active':'') }}"> My profile </a></li>
        <li class="nav-item"><a  href="{{ route('dashboard.pay-now') }}" class="nav-link {{ (\Request::is('dashboard/pay-now')?'active':'') }}"> Pay Now</a></li>
        <li class="nav-item"><a  href="{{ route('dashboard.payment-history') }}" class="nav-link {{ (\Request::is('dashboard/payment-history')?'active':'') }}"> Payment History</a></li>
        <li class="nav-item"><a  href="{{ route('dashboard.create-ticket.index') }}" class="nav-link {{ (\Request::is('dashboard/create-ticket')?'active':'') }}"> Raise Ticket</a></li>
        <li class="nav-item"><a  href="{{ route('dashboard.service-request') }}" class="nav-link {{ (\Request::is('dashboard/service-request')?'active':'') }}">  Services Request</a></li>
     </ul>
     <style>
     </style>
  </div>
</div>