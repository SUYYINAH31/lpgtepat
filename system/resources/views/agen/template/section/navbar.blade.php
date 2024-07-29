<div class="header-left">
    <div class="menu-icon dw dw-menu"></div>
   
</div>
<div class="header-right">
   
{{--     <div class="user-notification">
        <div class="dropdown">
            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                <i class="icon-copy dw dw-notification"></i>
                <span class="badge notification-active"></span>
            </a>
            
        </div>
    </div> --}}
    <div class="user-info-dropdown">
        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <span class="user-icon">
                    <img src="{{url('public/assetAgen')}}/vendors/images/photo1.jpg" alt="">
                </span>
                <span class="user-name">{{Auth::user()->username}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                <a class="dropdown-item" href="{{url('logout')}}"><i class="dw dw-logout"></i> Log Out</a>
            </div>
        </div>
    </div>

</div>