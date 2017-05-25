<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right"></span> <span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Admin UI </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        @foreach($tables as $table)
                        <li><a href="{{route('table.show',head($table))}}">{{head($table)}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right"></span> <span> Email </span> </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

        <div class="help-box">
            <h5 class="text-muted m-t-0">For Help ?</h5>
            <p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
            <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
        </div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->