<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    @include('layouts.cssLink')
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
@section('app-wrapper')   
<div class="app-wrapper"> 
        <!--begin::Header-->
        @include('layouts.header')
        <!--end::Header--> 
        <!--begin::Sidebar-->
        @include('layouts.left_side_bar')
       <!--end::Sidebar--> 
        <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    @section('edit-header')
                    @yield('edit-content-header')
                    
                    @show<!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
            @section('edit-body')
                <div class="container-fluid"> <!--begin::Row-->
                    
                    @yield('edit-content-body')
                    
                    <!-- /.row (main row) -->
                </div> <!--end::Container-->
            @show
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
        @include('layouts.footer') <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
  @show
    @include('layouts.script')<!--end::Script-->
</body><!--end::Body-->

</html>