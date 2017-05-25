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

                <div class="row">
                    <form class="form-inline">
                        <div class="col-md-6 col-sm-6">
                            <div class="products-number">
                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">25</a>  <a href="#" class="btn btn-default btn-sm">50</a>  <a href="#" class="btn btn-default btn-sm">All</a> rows
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="products-sort-by">
                                <strong>Sort by</strong>
                                <select name="sort-by" class="form-control">
                                    <option>Latest</option>
                                    <option>Id</option>
                                    <option>Update time</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    @foreach($columns as $column)
                                    <th>{{$column}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rows as $row)
                                <tr>
                                    @foreach($columns as $column)
                                        <td>{{$row->$column}}</td>
                                    @endforeach

                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
@stop