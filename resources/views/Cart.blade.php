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
                        <li><a href="#">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="{{route('cart.upgrade')}}">

                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have {{count($cart)}} item(s) in your cart.</p>
                            <div class="table-responsive">
                            	@if(count($cart))
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Discount</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($cart as $item)
                                        <tr>
                                            <td>
                                                <a href="{{route('product.show', $item->name)}}">
                                                    <img src="{{asset('productimages/'.$item->options->image)}}" alt="White Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="{{route('product.show', $item->name)}}">{{$item->name}}</a>
                                            </td>
                                            <td>
                                                <input type="number" name="quantity[{{$item->rowId}}]" value="{{$item->qty}}" class="form-control">
                                            </td>
                                            <td>UGX {{$item->price}}</td>
                                            <td>UGX {{$item->tax}}</td>
                                            <td>UGX {{($item->subtotal)}}</td>
                                            <td><a href="{{route('cart.remove', $item->rowId)}}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">UGX {{Cart::total()}}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                @else
                                <p>You have no items in the cart</p>
                                @endif

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{route('shop')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    <a href="{{route('orderreview')}}"><button type="button" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button></a>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


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


                </div>
                <!-- /.col-md-9 -->
                @include('include.orderright')
                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@stop