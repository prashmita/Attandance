<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets/images/li.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->first_name.' '. Auth::user()->last_name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Settings Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('setting.add')}}"><i class="fa fa-circle-o"></i> Add Setting</a></li>
                    <li><a href="{{route('settings')}}"><i class="fa fa-circle-o"></i> Settings</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Present Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('present.add')}}"><i class="fa fa-circle-o"></i> Add Present</a></li>
                    <li><a href="{{route('presents')}}"><i class="fa fa-circle-o"></i>Presents</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Position Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('position.add')}}"><i class="fa fa-circle-o"></i> Add Position</a></li>
                    <li><a href="{{route('positions')}}"><i class="fa fa-circle-o"></i> Positions</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Permission Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('permissions.add')}}"><i class="fa fa-circle-o"></i> Add Permission</a></li>
                    <li><a href="{{route('permissions')}}"><i class="fa fa-circle-o"></i> Permissions</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>LeaveCategory Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('leavesCategory.add')}}"><i class="fa fa-circle-o"></i> Add LeaveCategory</a></li>
                    <li><a href="{{route('leavesCategory')}}"><i class="fa fa-circle-o"></i> LeaveCategory</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Leave Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('leave.add')}}"><i class="fa fa-circle-o"></i> Add Leave</a></li>
                    <li><a href="{{route('leave')}}"><i class="fa fa-circle-o"></i> Leaves</a></li>
                </ul>
            </li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i>
                <span>Holiday Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('holiday.add')}}"><i class="fa fa-circle-o"></i> Add Holiday</a></li>
                <li><a href="{{route('holiday')}}"><i class="fa fa-circle-o"></i> Holidays</a></li>
            </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>