<!-- Top Bar Start -->
<div class="topbar">

  <!-- LOGO -->
  <div class="topbar-left bg-white">
    <div class="text-center">
      <a href="{{url('/dashboard')}}" class="logo">
        @if (getConfig('text_graphic_logo') == 1)
          <i class="icon-c-logo"> <img src="{{$LOGO_URL.getConfig('site_logo_smartphone')}}" height="42"/></i>
        @endif
        <span class="text-light-theme fs40">
          @if (getConfig('text_graphic_logo') == 1)
            <img src="{{$LOGO_URL.getConfig('site_logo_desktop')}}" style="margin-right:10px" height="50"/>
          @endif
        @if (getConfig('text_graphic_logo') == 0)
          {{getConfig('site_name')}}
        @endif
        </span>
      </a>
    </div>
  </div>

  <!-- Button mobile view to collapse sidebar menu -->
  <nav class="navbar-custom bg-dark-theme">

    <ul class="list-inline float-right mb-0">

      <li class="list-inline-item notification-list">
        <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
          <i class="dripicons-expand noti-icon"></i>
        </a>
      </li>

    

      <li class="list-inline-item dropdown notification-list">
        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
          aria-expanded="false">
          @if (Auth::user()->avatar)
          <img src="{{Storage::disk('cms')->url(Auth::user()->avatar)}}" alt="user" class="rounded-circle">
          @else
              @php
                  $name = explode(" ",Auth::user()->name);
                  $count = 1;
              @endphp
          <div style="background-color: black;
                      border-radius: 50px;
                      width: 50px;
                      height: 50px;
                      text-align: center;
                      padding-bottom: 0px !important;
                      line-height: 52px;
                      font-weight:900;
                      color:#e74c3c;">@foreach ($name as $item){{strtoupper($item[0] ?? null)}}@php $count++; if($count>2) break; @endphp@endforeach</div>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5 class="text-overflow">
              <small>Welcome {{Auth::user()->name}} !</small>
            </h5>
          </div>

          <!-- item-->
          <a href="{{route('users.settings')}}" class="dropdown-item notify-item">
            <i class="md md-settings"></i>
            <span>Profile</span>
          </a>

          <!-- item-->
          <a href="{{route('logout')}}" class="dropdown-item notify-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>

      <li class="list-inline-item notification-list">
        <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
          <i class="dripicons-wallet noti-icon"></i>
        </a>
      </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
      <li class="float-left">
        <button class="button-menu-mobile open-left waves-light waves-effect bg-dark-theme">
          <i class="dripicons-menu"></i>
        </button>
      </li>
      {{-- <li class="hide-phone app-search">
        <form role="search" class="">
          <input type="text" placeholder="Search..." class="form-control">
          <a href="">
            <i class="fa fa-search"></i>
          </a>
        </form>
      </li> --}}
    </ul>

  </nav>

</div>
<!-- Top Bar End -->
