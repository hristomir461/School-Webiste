<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПГМЕТТ "Христо Ботев"</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
<header>
    <div class="container">
        <nav>
            <div class="menu-icons">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
            <img src="{{asset('logo.png')}}" style="width: 70px;" > <a href="index.html" class="logo">ПГМЕТТ</a>
            <ul class="nav-list">
                <li>
                    <a href="{{ url('/') }}">Начало</a>
                </li>
                <li>
                    <a href="#">За училището <i class="fas fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/history') }}">История</a>
                        </li>
                        <li>
                            <a href="{{ url('/teachers') }}">Учители</a>
                        </li>
                        <li>
                            <a href="{{ url('/studentCouncil') }}">Ученически съвет</a>
                        </li>
                        <li>
                            <a href="{{ url('/publicCouncil') }}">Обществен съвет</a>
                        </li>
                        <li>
                            <a href="#">Документи
                                <i class="fas fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ url('/schoolDocuments') }}">Училищни</a>
                                </li>
                                <li>
                                    <a href="{{ url('/monDocuments') }}">На МОН</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/contacts') }}">Контакти</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('/news') }}">Новини</a>
                </li>
                <li>
                    <a href="{{ url('/gallery') }}">Галерия</a>
                </li>
                <li>
                    <a href="{{ url('/specialties') }}">Специалности</a>
                </li>
                <li class="move-right btn" >
                    <a href="http://www.pgmett.shumen.icon.bg/index.php?p=reception"> <button style="margin-top: -5px;margin-left: 120px" id="specialties">Прием</button></a></li>
                </li>
            </ul>

        </nav>
    </div>
</header>

{{$slot}}



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>




</body>

</html>
