<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <title> SaaS POS</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap"
        rel="stylesheet" />
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/flag-icon.css') }}" />
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('assets/css/iconly-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bulk-style.css') }}" />
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('assets/css/themify.css') }}" />
    <!--fontawesome-->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-min.css') }}" />
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/vendors/weather-icons/weather-icons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}" />
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen" />
    <style>
        .active>.page-link,
        .page-link.active {
            background-color: #884A39;
            border-color: #884A39 !important
        }

        .page-link {
            color: #884A39 !important
        }
    </style>
</head>

<body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
        <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        @include('layouts.tenant.header')


        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page sidebar start-->
            @include('layouts.tenant.sidebar')
            <!-- Page sidebar end-->


            <div class="page-body">
                {{ $slot }}
            </div>


            @include('layouts.landlord.footer')

        </div>
    </div>
    <!-- jquery-->
    <script src="{{ asset('assets/js/vendors/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/vendors/bootstrap/dist/js/popper.min.js') }}" defer=""></script>
    <!--fontawesome-->
    <script src="{{ asset('assets/js/vendors/font-awesome/fontawesome-min.js') }}"></script>
    <!-- feather-->
    <script src="{{ asset('assets/js/vendors/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/feather-icon/custom-script.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <!-- height_equal-->
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <!-- config-->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- apex-->
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <!-- scrollbar-->
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <!-- slick-->
    <script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>

    <!-- data_table-->
    {{-- <script src="{{ asset('assets/js/js-datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('assets/js/js-datatables/datatables/datatable.custom.js') }}"></script>
    <!-- page_datatable1-->
    <script src="{{ asset('assets/js/js-datatables/datatables/datatable.custom1.js') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script> --}}
    <!-- theme_customizer-->
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- tilt-->
    <script src="{{ asset('assets/js/animation/tilt/tilt.jquery.js') }}"></script>
    <!-- page_tilt-->
    <script src="{{ asset('assets/js/animation/tilt/tilt-custom.js') }}"></script>
    <!-- dashboard_1-->
    {{-- <script src="{{ asset('assets/js/dashboard/dashboard_1.js') }}"></script> --}}
    <!-- custom script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="../assets/js/toasts-custom.js"></script>



    <script>
        function toast(mensaje, tipo = 'success') {
            // creamos el contenedor si no existe
            let toastContainer = document.getElementById('toastContainer');
            if (!toastContainer) {
                toastContainer = document.createElement('div');
                toastContainer.id = 'toastContainer';
                toastContainer.className = 'position-fixed bottom-0 end-0 p-3';
                toastContainer.style.zIndex = '11';
                document.body.appendChild(toastContainer);
            }

            // creamos el elemento html toast
            const toastHTML = `
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-${tipo} text-white">
                        <strong class="me-auto">Notificación</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${mensaje}
                    </div>
                </div>
            `;

            // agregamos el toast al contenedor
            toastContainer.insertAdjacentHTML('beforeend', toastHTML);

            // inicializamos y mostramos el toast
            const toastElement = toastContainer.lastElementChild;
            const toast = new bootstrap.Toast(toastElement);
            toast.show();

            // eliminamos el toast del DOM después de ocultarlo
            toastElement.addEventListener('hidden.bs.toast', () => {
                toastElement.remove();
            });
        }

        
    </script>



    <script>
        $(document).ready(function () {
            localStorage.setItem("color", 'color-5');
            localStorage.setItem("primary", '#884A39');
            localStorage.setItem("secondary", '#C38154');
        })
    </script>
</body>

</html>