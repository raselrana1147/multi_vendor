 <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Overview</li>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="ion ion-md-speedometer"></i><span class="badge badge-success badge-pill float-right">2</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title">Apps</li>
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-list"></i><span>Categories<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin.category_create') }}">Create Category</a></li>
                                    <li><a href="{{ route('admin.category_list') }}">Category List</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ion ion-md-calendar"></i><span> Calendar </span></a>
                            </li>

                           

                            <li>
                                <a href="projects.html" class="waves-effect waves-light"><i class="ion ion-md-clipboard"></i><span> Projects </span></a>
                            </li>

                            <li class="menu-title">Pages</li>

                        

                            <li class="menu-title">Components</li>

                           
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>