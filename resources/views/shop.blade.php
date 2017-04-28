@extends('layout.shopmaster')

@section('title')
InfinitechStudio
@stop

@section('home')
<li class="active"><a href="{{route('shop')}}">home</a>
                    </li>
@endsection

@section('home')
<li class="active"><a href="{{route('shop')}}">home</a>
                    </li>
@endsection

@section('header')
<!--header-->
        <div class="banner">
<div class="container"> 
          <div class="wmuSlider example1">
               <div class="wmuSliderWrapper">
                <?php $i=1;?>
            @foreach($bannerimages->chunk(2) as $chunk)
             <article style="position: absolute; width: 100%; opacity: 0;"> 
                    <div class="banner-wrap">
                    @foreach($chunk as $bannerimage)
                    <?php 
                    if ($i%2==0) {?>
                    <div class="banner-top banner-bottom">
                         <a href="{{route('product.show', $bannerimage->name)}}">
                        <div class="banner-top-in at">
                            <img src="{{asset('bannerimages/'.$bannerimage->image)}}" class="img-responsive" alt="">
                        </div></a>
                        <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >UGX {{$bannerimage->price}}<i> </i> </span></div>
                            <div class="off">
                                <label>{{$bannerimage->discounted_price}}% off !</label>
                                <p>{{$bannerimage->description}}</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        
                        </div>
                        <?php
                    $i++;} else {?>
                        <div class="banner-top">
                        <a href="{{route('product.show', $bannerimage->name)}}">
                        <div class="banner-top-in">
                            <img src="{{asset('bannerimages/'.$bannerimage->image)}}" class="img-responsive" alt="">
                        </div></a>
                        <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" style="width:80%;margin-left:0px;" >UGX {{$bannerimage->price}}<i> </i> </span></div>
                            <div class="off">
                                <label>35% off !</label>
                                <p>White Blended Cotton "still fresh" t-shirt</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        
                        </div>
                   <?php $i++;}
                    
                    ?>
                        
                        @endforeach
                        
                         <!--
                          -->
                        
                         <div class="clearfix"> </div>
                         
                     </div>
            </article>
            @endforeach
            </div>
             <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                    <li><a href="#" class="wmuActive">2</a></li>
                </ul>
        </div>
        <!---->
        <script src="{{ URL::asset('assets/js/jquery-1.11.0.min.js')}}"></script>
          <script src="{{ URL::asset('assets/js/jquery.wmuSlider.js')}}"></script> 
             <script>
                $('.example1').wmuSlider({
                     pagination : true,
                     nav : false,
                });         
             </script>  
        
        </div>   
    </div>

@stop

@section('advantages')
<div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                                <p>We are known to provide best possible service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->
@stop

@section('hot')
<div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Hot this week</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">
                        @foreach ($products as $product)
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{route('product.show', $product->name)}}">
                                                <img src="{{asset('productimages/'.$product->image)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{route('product.show', $product->name)}}">
                                                <img src="{{asset('productimages/'.$product->image)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('product.show', $product->name)}}" class="invisible">
                                    <img src="{{asset('productimages/'.$product->image)}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{route('product.show', $product->name)}}">{{$product->name}}</a></h3>
                                    <p class="price">UGX {{$product->price}}</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        @endforeach

                        

                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
@stop