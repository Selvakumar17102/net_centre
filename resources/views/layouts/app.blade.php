<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>NET CENTRE</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/src/assets/img/jp.png')}}"/>
    <link href="{{asset('/layouts/collapsible-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/layouts/collapsible-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('/layouts/modern-light-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/layouts/modern-light-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('/layouts/collapsible-menu/loader.js')}}"></script>
    <script src="{{asset('/layouts/modern-light-menu/loader.js')}}"></script>


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('/src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/layouts/collapsible-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/layouts/collapsible-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('/layouts/modern-light-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/layouts/modern-light-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('/src/assets/css/light/elements/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/assets/css/dark/elements/alert.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('/src/plugins/src/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/src/assets/css/light/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/src/assets/css/dark/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/src/table/datatable/datatables.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/css/dark/table/datatable/dt-global_style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/src/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/css/light/table/datatable/custom_dt_custom.css')}}">
    <link href="{{asset('/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/src/glightbox/glightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/plugins/src/splide/splide.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/src/assets/css/light/components/tabs.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/assets/css/light/apps/ecommerce-details.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('/src/assets/css/dark/components/tabs.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/src/assets/css/dark/apps/ecommerce-details.css')}}">

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('/src/assets/css/light/apps/invoice-preview.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/src/assets/css/dark/apps/invoice-preview.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <!--  END CUSTOM STYLE FILE  -->

</head>
<body class="layout-boxed alt-menu">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.navbar.theam-navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.sidbar.theam-sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                {{$slot}}
            </div>
            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('/src/plugins/src/global/vendors.min.js')}}"></script>
    <script src="{{asset('/src/assets/js/custom.js')}}"></script>
    <script src="{{asset('/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
    <script src="{{asset('/src/plugins/src/waves/waves.min.js')}}"></script>
    <script src="{{asset('/layouts/collapsible-menu/app.js')}}"></script>

    {{-- <script src="{{asset('/layouts/modern-light-menu/app.js')}}"></script> --}}
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('/src/plugins/src/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('/src/assets/js/dashboard/dash_1.js')}}"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('/src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('/src/plugins/src/glightbox/glightbox.min.js')}}"></script>
    <script src="{{asset('/src/plugins/src/splide/splide.min.js')}}"></script>
    <script src="{{asset('/src/assets/js/apps/ecommerce-details.js')}}"></script>    
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('/src/plugins/src/table/datatable/datatables.js')}}"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10 
        });

        c3 = $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        multiCheck(c3);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
