@extends('layout.shopmaster')

@section('title')
InfinitechStudio
@stop

@section('home')
<li ><a href="{{route('shop')}}">home</a>
                    </li>
@endsection


@section('content')
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        @foreach ($categorys as $category)
                        <li>{{$category->name}}</li>
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
                </div>

                <div class="col-md-9">
                    @foreach($categorys as $category)
                    <div class="box">
                        <h1>{{$category->name}}</h1>
                        <p>{{$category->description}}.</p>
                    </div>
                    @endforeach

                    @foreach($categorys as $category)
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>6</strong> of <strong>{{$products->total()}}</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">6</a>  <a href="#" class="btn btn-default btn-sm">12</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="row products">

                        @foreach($products as $product)

                        <div class="col-md-4 col-sm-6">
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
                                    <p class="price">{{$product->price}}</p>
                                    <p class="buttons">
                                        <a href="{{route('product.show', $product->name)}}" class="btn btn-default">View detail</a>
                                        <a><form action="{{route('cart')}}" method="POST" class="add_to_cart" style="margin-left:25%">
                                          {!! csrf_field() !!}
                                          <input type="hidden" name="id" value="{{ $product->id }}">
                                          <input type="hidden" name="name" value="{{ $product->name }}">
                                          <input type="hidden" name="image" value="{{ $product->image }}">
                                          <input type="hidden" name="price" value="{{ $product->price }}">
                                          <input type="hidden" name="_token" value="{{Session::token()}}">
                                          <button type="submit" class="btn btn-primary btn-md" ><i class="fa fa-shopping-cart"> Add to cart</i></button>
                                        </form></a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        @endforeach

                        

                        
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        @include('pagination', ['paginator'=>$products])

                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
@stop