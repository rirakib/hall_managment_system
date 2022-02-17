<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('backend/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session()->get('name')}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <div class="menu_section">
                    <ul class="nav side-menu">
                        <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                    </ul>
                </div>

                <h3>Student Information</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fas fa-hourglass"></i> Department <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('department.index')}}">Index</a></li>
                            <li><a href="{{route('department.create')}}">Create</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fas fa-user-graduate"></i> Student <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('student.index')}}">Index</a></li>
                            <li><a href="{{route('student.create')}}">Create</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu_section">
                <h3>Deposit</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fas fa-chalkboard-teacher"></i> Deposite <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('deposite.ammount.index')}}">Deposite category</a></li>
                            <li><a href="{{route('deposite.index')}}">Index</a></li>
                            <li><a href="{{route('deposite.create')}}">Create</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


            <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                    <!-- this is another section  -->
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>