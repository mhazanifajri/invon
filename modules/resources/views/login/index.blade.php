@extends('login.layouts.default')
@section('content')
<!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
<!-- End of preloader -->

<div class="inner-wrap">
    <div class="wrap-fluid">
        <div class="large-offset-4 large-4 columns">
            <div class="box bg-white">
                <div class="profile">
                    <img alt="" class="" src="img/logo.png">
                    <h3>INVON <small>1.2</small></h3>
                </div>
                <div class="box-body " style="display: block;">
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="row">
                                <div class="edumix-signup-panel">
                                    <p class="welcome"> Please login!</p>
                                    <form id="formSignIn" autocomplete="off" runat="server">
                                        <div class="row collapse">
                                            <div class="small-2  columns">
                                                <span class="prefix bg-green"><i class="text-white icon-user"></i></span>
                                            </div>
                                            <div class="small-10  columns">
                                                <input type="text" placeholder="Email" name="email" autofocus>
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="small-2 columns ">
                                                <span class="prefix bg-green"><i class="text-white icon-lock"></i></span>
                                            </div>
                                            <div class="small-10 columns ">
                                                <input type="password" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <p><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</p>
                                        @endif
                                        <button type="submit" class="button radius tiny expand bg-green" id="btnSignIn">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main javascript library -->
<script type='text/javascript' src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/waypoints.min.js"></script>
<script type='text/javascript' src='/js/preloader-script.js'></script>
<!-- foundation javascript -->
<script type='text/javascript' src="/js/foundation.min.js"></script>
<script type='text/javascript' src="/js/foundation/foundation.dropdown.js"></script>
<!-- main edumix javascript -->
<script type='text/javascript' src='/js/notie.js'></script>
<script type='text/javascript' src='/js/slimscroll/jquery.slimscroll.js'></script>
<script type='text/javascript' src='/js/slicknav/jquery.slicknav.js'></script>
<script type='text/javascript' src='/js/sliding-menu.js'></script>
<script type='text/javascript' src='/js/scriptbreaker-multiple-accordion-1.js'></script>
<script type="text/javascript" src="/js/number/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/js/circle-progress/jquery.circliful.js"></script>
<script type='text/javascript' src='/js/app.js'></script>
@endsection
