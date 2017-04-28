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
                <li>Checkout - Address</li>
            </ul>
        </div>

        <div class="col-md-9" id="checkout">

            <div class="box">
                <form method="post" action="{{route('checkout')}}">
                {!! csrf_field() !!}
                    <h1>Checkout</h1>
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                        </li>
                        <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                        </li>
                    </ul>

                            <div class="content">
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
                                            @foreach($cart as $item)
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="{{asset('productimages/'.$item->options->image)}}" alt="{{$item->name}}">
                                                    </a>
                                                </td>
                                                <td><a href="#">{{$item->name}}</a>
                                                </td>
                                                <td>{{$item->qty}}</td>
                                                <td>UGX {{$item->price}}</td>
                                                <td>UGX 0.00</td>
                                                <td>UGX {{$item->subtotal}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th>UGX {{$item->total}}</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    

                                </div>
                                <!-- /.table-responsive -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{route('cart.show')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to add address<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                @include('include.orderright')

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@stop