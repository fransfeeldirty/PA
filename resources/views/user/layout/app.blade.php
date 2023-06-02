<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        section {
            padding: 2rem 0;
        }

        /* Magnific Popup CSS */
        .mfp-container {
            padding: 0;
            background: none;
            max-width: none;
        }

        .mfp-content {
            box-shadow: none;
        }

        .mfp-figure {
            margin: 0;
            padding: 0;
        }

        .mfp-img {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .mfp-close {
            right: 0;
        }

        /* Optional: Add animation */
        .mfp-zoom-in .mfp-bg {
            opacity: 0.001;
            -webkit-transition: opacity 0.3s ease-out;
            transition: opacity 0.3s ease-out;
        }

        .mfp-zoom-in.mfp-ready .mfp-bg {
            opacity: 0.75;
        }

        .mfp-zoom-in.mfp-removing .mfp-bg {
            opacity: 0;
        }

        /* Set the same size for all images */
        .img-fluid {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <img src="{{ asset('img/Logo.png') }}" alt="" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Setting
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf>Logout</a>
                        </form>
                        <form id="logout-form" action="{{ route('cart') }}" class="d-none">
                    Pesanan
                        </form>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('app')
    </div>

    <footer class="bg-primary navbar" style="height: 100px;">
        <div class="container">
            <img src="{{ asset('img/Logo.png') }}" alt="">
        </div>
    </footer>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script>
        // Magnific Popup JavaScript
        import 'magnific-popup/dist/jquery.magnific-popup.min.js';

        $(document).ready(function() {
            $('.gallery-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true,
                },
            });
        });

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').focus()
        })
    </script>
</body>

</html>
