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
                <form method="post" action="{{route('placeorder')}}">
                    {!! csrf_field() !!}
                    <h1>Checkout</h1>
                    <ul class="nav nav-pills nav-justified">
                        <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                        </li>
                        <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                        </li>
                    </ul>

                            <div class="content">

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telephone</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{route('orderreview')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to order review</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Place an order<i class="fa fa-chevron-right"></i>
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