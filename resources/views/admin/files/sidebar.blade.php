 <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Overview</li>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="ion ion-md-speedometer"></i><span> Dashboard </span>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-list"></i><span>Sub Category<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin.subcategory_create') }}">Create Sub Category</a></li>
                                    <li><a href="{{ route('admin.subcategory_list') }}">Sub Category List</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ion ion-md-calendar"></i><span>Products List </span></a>
                            </li>
                           
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>