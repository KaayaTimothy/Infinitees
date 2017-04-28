<!--topbar-->
	<div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on your orders</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="{{Auth::check() ? route('customer') : '#'}}" data-toggle="modal" data-target="{{Auth::check() ? '' : '#login-modal'}}"><i class="{{Auth::check()?'fa fa-user':'fa fa-lock'}}"></i> {{Auth::check() ? Auth::user()->name : 'Login'}}</a></li>
                    <li><a href="{{route('userregister')}}">Register</a>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a>
                    </li>
                    <li><a href="{{route('recently.viewed')}}">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        @if (count($errors->get('login_password'))>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->get('login_password')as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                        <form action="{{route('login')}}" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="login_password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                            <input type="hidden" name="_token" value="{{Session::token()}}">

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>