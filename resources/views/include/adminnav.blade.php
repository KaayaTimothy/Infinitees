<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            @foreach($thistables as $thistable)
                <h4 class="page-title">{{head($thistable)}}</h4>
            @endforeach
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="#">Browse</a>
                </li>
                <li>
                    @foreach($thistables as $thistable)
                        <a href="{{route('table.insert',head($thistable))}}">Insert</a>
                    @endforeach
                </li>
                <li >
                    Search
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end row-->