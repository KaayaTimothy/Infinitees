@extends('layout.master')

@section('title')
    InfinitechStudio
@stop

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @include('include.adminnav')
@foreach($thistables as $thistable)
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" action="{{route('table.submit')}}" method="POST">
                            {!! csrf_field() !!}
                            @foreach($columns as $column)
                                <div class="form-group">
                                    <label for="{{$column}}">{{$column}}</label>
                                    <input type="text" name="{{$column}}" class="form-control" id="{{$column}}" >
                                </div>
                            @endforeach
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="table" value="{{head($thistable)}}">
                                </div>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div>
                </div>
            @endforeach
                <!--end row-->
            </div>
        </div>
    </div>
@stop