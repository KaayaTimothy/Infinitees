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
                        <li><a href="#">My orders</a>
                        </li>
                        @foreach($orders as $thisorder)
                        <li>Order #{{$thisorder->id}}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="{{route('customerorders')}}"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="customer-wishlist.html"><i class="fa fa-heart"></i> My wishlist</a>
                                </li>
                                <li>
                                    <a href="customer-account.html"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-order">
                    <div class="box">
                    	@foreach($orders as $thisorder)
                        <h1>Order #{{$thisorder->id}}</h1>


                        <p class="lead">Order #{{$thisorder->id}} was placed on <strong>{{$thisorder->created_at}}</strong> and is currently <strong>{{$thisorder->status}}</strong>.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($thisorder->products as $item)
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="{{asset('productimages/'.$item->image)}}" alt="White Blouse Armani">
                                            </a>
                                        </td>
                                        <td><a href="{{route('product.show', $item->name)}}">{{$item->name}}</a>
                                        </td>
                                        <td>{{$item->pivot->quantity}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>UGX 0.00</td>
                                        <td>UGX {{$item->pivot->quantity*$item->price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">Order subtotal</th>
                                        <th>UGX {{$thisorder->price}}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Shipping and handling</th>
                                        <th>UGX {{$thisorder->transport}}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Tax</th>
                                        <th>0.00</th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Total</th>
                                        <th>UGX 0.00</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.table-responsive -->

                        <div class="row addresses">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <h2>Delivery address</h2>
                                <p>{{$thisorder->address}}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@stop