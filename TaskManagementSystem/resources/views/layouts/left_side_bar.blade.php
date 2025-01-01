<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light" >Task Management System</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{asset('/dashboard')}}" @if(Request::segment(1)=="dashboard") class="nav-link active" @else class="nav-link" @endif> <i class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard</p>
                                    </a> </li>
                               
                            </ul>
                        </li>
                        <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Task
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{asset('/create-task')}}" @if(Request::segment(1)=="create-task") class="nav-link active" @else class="nav-link" @endif > <i class="nav-icon bi bi-circle"></i>
                                        <p>Create Task</p>
                                    </a> </li>
                                    <li class="nav-item"> <a href="{{asset('/tasks')}}" @if(Request::segment(1)=="tasks") class="nav-link active" @else class="nav-link" @endif> <i class="nav-icon bi bi-circle"></i>
                                        <p>Task List</p>
                                    </a> </li>
                               
                            </ul>
                        </li>

                        <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Settings
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{asset('/profile#update_info')}}" @if(Request::segment(1)=="create-task") class="nav-link active" @else class="nav-link" @endif > <i class="nav-icon bi bi-circle"></i>
                                        <p>Edit Information</p>
                                    </a> </li>
                                    <li class="nav-item"> <a href="{{asset('/profile#update_pass')}}" @if(Request::segment(1)=="tasks") class="nav-link active" @else class="nav-link" @endif> <i class="nav-icon bi bi-circle"></i>
                                        <p>Change Password</p>
                                    </a> </li>
                               
                            </ul>
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside>