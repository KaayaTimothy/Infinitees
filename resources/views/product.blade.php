@extends('layout.shopmaster')

@section('title')
InfinitechStudio
@stop

@section('home')
<li class="active"><a href="{{route('shop')}}">home</a>
                    </li>
@endsection

@section('content')
<div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('shop')}}">Home</a>
                        </li>
                        
                        @foreach ($categorys as $category)
                        <li><a href="{{route('category.show',$category->name)}}">{{$category->name}}</a>
                        </li>
                        
                        @foreach ($subcategorys as $subcategory)
                        <li><a href="{{route('subcategory.show',[$category->name, $subcategory->name])}}">{{$subcategory->name}}</a>
                        </li>
                        @endforeach
                        @foreach ($products as $product)
                        <li>{{$product->name}}</li>
                        @endforeach
                        @endforeach
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Sub Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    @foreach ($categorys as $category)
                                    <a href="" class="active">{{$category->name}}<span class="badge pull-right">{{$categories->count()}}</span></a>
                                    <ul>
                                        @foreach($category->subcategories as $subcategory)
                                        <li><a href="category.html">{{$subcategory->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endforeach
                                    
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->
                    <!--Advertisment goes here
                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>-->
                </div>

                <div class="col-md-9">
                	@foreach($products as $product)

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="{{asset('productimages/'.$product->image)}}" alt="" class="img-responsive">
                            </div>

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center">{{$product->name}}</h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
                                </p>
                                <p class="price">UGX 25000</p>

                                <p class="text-center buttons" style="color:black">
                                    
                                        <form action="{{route('cart')}}" method="POST" class="add_to_cart" style="margin-left:25%" id="product_form">
                                          {!! csrf_field() !!}
                                          <input type="hidden" name="id" value="{{ $product->id }}">
                                          <input type="hidden" name="name" value="{{ $product->name }}">
                                          <input type="hidden" name="image" value="{{ $product->image }}">
                                          <input type="hidden" name="price" value="{{ $product->price }}">
                                          <input type="hidden" name="_token" value="{{Session::token()}}">
                                          <label for="size" style="color:black;font-size:1.2em;">Size</label>
                                          <select id="size" style="color:black;font-size:1.2em;">
                                            <option value="volvo">Small</option>
                                            <option value="saab">Medium</option>
                                            <option value="mercedes">Large</option>
                                            <option value="audi">Extra Large</option>
                                          </select>
                                          <label for="color">Color</label>
                                          <select id="color" style="color:black;font-size:1.2em;">
                                            <option value="volvo">Black</option>
                                            <option value="saab">Gray</option>
                                            <option value="mercedes">White</option>
                                            <option value="audi">Blue</option>
                                          </select><br/>
                                          <button type="submit" class="btn btn-primary btn-md" ><i class="fa fa-shopping-cart"> Add to cart</i></button>
                                          <button type="submit" class="btn btn-primary btn-md" ><i class="fa fa-shopping-cart"> Add to wishlist</i></button>
                                        </form>
                                    
                                </p>


                            </div>

                        </div>

                    </div>
                    @endforeach

                    <div class="box" id="details">
                            <blockquote>
                                <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                </p>
                            </blockquote>

                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>

                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>You may also like these products</h3>
                            </div>
                        </div>
@foreach($simillarproducts as $simillarproduct)
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{route('product.show', $simillarproduct->name)}}">
                                                <img src="{{asset('productimages/'.$simillarproduct->image)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{route('product.show', $simillarproduct->name)}}">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('product.show', $simillarproduct->name)}}" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>{{$simillarproduct->name}}</h3>
                                    <p class="price">{{$simillarproduct->price}}</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
                        @endforeach

                    </div>

                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>Products viewed recently</h3>
                            </div>
                        </div>

                        @foreach($recentlyViewedProducts as $recentlyViewedProduct)
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{route('product.show', $recentlyViewedProduct->name)}}">
                                                <img src="{{asset('productimages/'.$recentlyViewedProduct->image)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{route('product.show', $recentlyViewedProduct->name)}}">
                                                <img src="{{asset('productimages/'.$recentlyViewedProduct->image)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('product.show', $recentlyViewedProduct->name)}}" class="invisible">
                                    <img src="{{asset('productimages/'.$recentlyViewedProduct->image)}}" alt="" class="img-responsive">
                                </a>
                            </div>
                            <!-- /.product -->
                        </div>
                        @endforeach
                        </div>

                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@stop

