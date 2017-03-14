<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('/img/default-user.jpg') }}" class="img-circle" alt="User Image" />
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
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-database'></i><span>Manage Assets</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('equipments') }}"><i class='fa fa-list-ul'></i> <span>List of Assets</span></a></li>
                    <li><a href="{{ url('equipment/add') }}"><i class='fa fa-list-ul'></i> <span>Add New Asset</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-wrench'></i><span>Corrective Maintenance</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('correctives') }}"><i class='fa fa-list'></i> <span>Corrective Lists</span></a></li>
                    <li><a href="{{ url('corrective/add') }}"><i class='fa fa-plus'></i> <span>Add New Corrective</span></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-gavel'></i><span>Preventive Maintenance</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('preventives') }}"><i class='fa fa-list'></i> <span>Preventive Lists</span></a></li>
                    <li><a href="{{ url('preventive/add') }}"><i class='fa fa-plus'></i> <span>Add New Corrective</span></a></li>
                </ul>
            </li>
            

            <!-- <li class="treeview">
                <a href="#"><i class='fa fa-ticket'></i> <span>Manage Tickets</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-folder-open'></i> <span>Open a New Ticket</span></a></li>
                    <li><a href=""><i class='fa fa-ticket'></i> <span>View All Tickets</span></a></li>
                </ul>
            </li> -->
            <li class="treeview">
                <a href="#"><i class='fa fa-list'></i> <span>Manage Groups</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('categories') }}"><i class='fa fa-list-ul'></i> Asset Categories</a></li>
                    <li><a href="{{ url('departments') }}"><i class='fa fa-flag'></i> <span>Departments</span></a></li>
                    <li><a href="{{ url('manufacturers') }}"><i class='fa fa-truck'></i> <span>Manufacturers</span></a></li>
                    <li><a href="{{ url('suppliers') }}"><i class='fa fa-tags'></i> <span>Suppliers</span></a></li>
                    <li><a href="{{ url('locations') }}"><i class='fa fa-map-marker'></i> <span>Locations</span></a></li>
                    <!-- <li><a href="{{ url('tenants') }}"><i class='fa fa-map-marker'></i> <span>Tenants</span></a></li> -->
                </ul>
            </li>
           <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Manage Particulars</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('classifications') }}"><i class='fa fa-list-ul'></i> Classification Levels</a></li>
                    <li><a href="{{ url('conditions') }}"><i class='fa fa-list-ul'></i> Condition Levels</a></li>
                    <li><a href="{{ url('criticals') }}"><i class='fa fa-list-ul'></i> Critical Levels</a></li>
                    <li><a href="{{ url('frequencies') }}"><i class='fa fa-list-ul'></i> Frequency Levels</a></li>
                    <li><a href="{{ url('proficiencies') }}"><i class='fa fa-list-ul'></i> Proficiency Levels</a></li>
                    <li><a href="{{ url('requests') }}"><i class='fa fa-list-ul'></i> Request Types</a></li>
                    <li><a href="{{ url('risks') }}"><i class='fa fa-list-ul'></i> Risk Types</a></li>
                    <li><a href="{{ url('statuses') }}"><i class='fa fa-list-ul'></i> Status Types</a></li>
                    <li><a href="{{ url('utilizations') }}"><i class='fa fa-list-ul'></i> Utilization Types</a></li>
                    <li><a href="{{ url('work_statuses') }}"><i class='fa fa-list-ul'></i> Work Status Types</a></li>
                    <li><a href="{{ url('work_types') }}"><i class='fa fa-list-ul'></i> Work Types</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-list'></i> <span>Manage Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('reports/cm') }}"><i class='fa fa-file-text'></i> <span>CM Accomplishment</span></a></li>
                    <li><a href="{{ url('reports/pm') }}"><i class='fa fa-file-text'></i> <span>PM Accomplishment</span></a></li>
                    <!-- <li><a href="{{ url('analysis') }}"><i class='fa fa-file-text'></i> <span>Analysis</span></a></li> -->
                    <!-- <li><a href="{{ url('employee') }}"><i class='fa fa-file-text'></i> <span>Employee</span></a></li> -->
                    <!-- <li><a href="{{ url('category') }}"><i class='fa fa-file-text'></i> <span>Category</span></a></li> -->
                </ul>
            </li>
 
            <!-- <li><a href="#"><i class='fa fa-briefcase'></i> <span>Manage Employees</span></a></li> -->
            @if(Auth::user()->type == 0)
                <li><a href="{{ url('accounts') }}"><i class='fa fa-group'></i> <span>Manage User Accounts</span></a></li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
