<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backned/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backned/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('backned/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backned/assets/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backned/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backned/assets/modules/summernote/summernote-bs4.css') }}">

    {{-- Toster css --}}
    <link rel="stylesheet" href="{{ asset('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">

    {{-- data-table --}}
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backned/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backned/assets/css/components.css') }}">

    {{-- Icon picker from input tag --}}
    <link rel="stylesheet" href="{{ asset('backned/assets/css/bootstrap-iconpicker.min.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            {{-- Navbar content --}}
            @include('admin.layout.navbar')
            {{-- Sidebar Content --}}
            @include('admin.layout.sidebar')


            <!-- Main Content -->
            <div class="main-content">
                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2025 <div class="bullet"></div> Design By <a href="#">Abhay Kant tiwari</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('backned/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('backned/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('backned/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backned/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"></script>

    {{-- data table  --}}
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    {{-- sweet alert  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page Specific JS Fbackned/ile -->
    <script src="{{ asset('backned/assets/js/page/index-0.js') }}"></script>

    {{-- icon picker from input --}}
    <script src="{{ asset('backned/assets/js/bootstrap-iconpicker.bundle.min.js') }}"></script>

    <script src="{{ asset('backned/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('backned/assets/js/custom.js') }}"></script>


    {{-- dynamick delte --}}

    <script>
        $(document).ready(function() {
            // Properly configure the CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('body').on('click', '.delete-item', function(event) {
                event.preventDefault();
                let deleteUrl = $(this).attr('href');
                // alert(deleteUrl);
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: "DELETE",

                            url: deleteUrl,
                            success: function(data) {
                                if (data.success == 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    });
                                }
                                window.location.reload();
                            },
                            error: function(xhr, status, error) {
                                console.log(error);
                            }
                        })


                    }
                });
            })
        })
    </script>


    <script>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{$error}}')
            @endforeach
        @endif 
    </script>



    {{-- this is for datatable --}}
    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}
    @stack('scripts')
</body>

</html>
