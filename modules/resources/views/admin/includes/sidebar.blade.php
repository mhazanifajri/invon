<div class="navbar-wrapper">
    <div class="navbar-content scroll-div">
        <div class="">
            <div class="main-menu-header">
                <img class="img-radius" src="{{ asset('/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
                <div class="user-details">
                    <div id="more-details">Administrator<i class="fa fa-caret-down"></i></div>
                </div>
            </div>
            <div class="collapse" id="nav-user-link" style="display:block">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                    <li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
                    <li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                </ul>
            </div>
        </div>
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item"><a href="{{ url('admin/dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-grid"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>
            <li class="nav-item pcoded-menu-caption">
                <label>Website</label>
            </li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-feather"></i></span><span class="pcoded-mtext">Theme</span></a></li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Content</span></a></li>
            <li class="nav-item pcoded-menu-caption">
                <label>Users</label>
            </li>
            <li class="nav-item"><a href="{{ url('admin/guest') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Guest</span></a></li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Group</span></a></li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Comment</span></a></li>
            <li class="nav-item pcoded-menu-caption">
                <label>Invitation</label>
            </li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Email</span></a></li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="fab fa-whatsapp"></i></span><span class="pcoded-mtext">Whatsapp</span></a></li>
            <li class="nav-item pcoded-menu-caption">
                <label>Setting</label>
            </li>
            <li class="nav-item"><a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Account</span></a></li>
    </div>
</div>