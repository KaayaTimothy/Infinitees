<div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="./shop" data-animate-hover="bounce">
                    <img src="{{asset('img/logo.png')}}" alt="infinitech logo" class="hidden-xs">
                    <img src="{{asset('img/logo.png')}}" alt="Infinitech logo" class="visible-xs"><span class="sr-only">Infinitech - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="{{route('cart.show')}}">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"> {{count($cart)}} items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    @yield('home')
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Category<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <?php $i=0;?>
                                        @foreach($categories as $category )
                                        <?php ;
                                            if (($i%4)==0) {?>
                                            <div class="col-sm-3">
                                                <ul>
                                                <li><a href="{{route('category.show',$category->name)}}">{{$category->name}}</a>
                                                </li> 
                                            
                                           <?php } else { ?>
                                               <li><a href="{{route('category.show',$category->name)}}">{{$category->name}}</a>
                                                </li>
                                           <?php if (($i%4)==3) { ?>
                                               </ul>
                                           </div>
                                           <?php }}
                                            $i++;?>
                                        @endforeach
                                    
                                          
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="{{route('contact')}}" class="dropdown-toggle"  data-hover="dropdown" data-delay="200">Help</b></a>
                        
                    </li>

                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="{{route('cart.show')}}" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"> {{count($cart)}} items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search" action="{{route('search')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>