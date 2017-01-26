<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-gears'></i> <span>Manage Services</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-wrench'></i> <span>Preventive Maintenance</span></a></li>
                    <li><a href="#"><i class='fa fa-magic'></i> <span>Corrective Maintenance</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-database'></i> <span>Manage Equipments</span></a></li>
            <li><a href="#"><i class='fa fa-dollar'></i> <span>Manage Purchases</span></a></li>
            <li><a href="#"><i class='fa fa-flag'></i> <span>Manage Departments</span></a></li>
            <li><a href="#"><i class='fa fa-truck'></i> <span>Manage Manufacturers</span></a></li>
            <li><a href="#"><i class='fa fa-tags'></i> <span>Manage Suppliers</span></a></li>
            <li><a href="#"><i class='fa fa-map-marker'></i> <span>Manage Locations</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Manage Other List</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-list-ul'></i> Classification Types</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Condition Status Types</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Critical Types</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Frequency Types</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Proficiency Types</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Request Types</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Risks</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Specifications</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Status</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Utilizations</a></li>
                    <li><a href="#"><i class='fa fa-list-ul'></i> Work Status</a></li>
                `    <li><a href="#"><i class='fa fa-list-ul'></i> Work Types</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-briefcase'></i> <span>Manage Employees</span></a></li>
            <li><a href="#"><i class='fa fa-group'></i> <span>Manage User Accounts</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
