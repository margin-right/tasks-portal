<!DOCTYPE html>
<html class="h-100" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body class=" d-flex flex-column h-100 justify-content-between">

    {{-- header --}}
        <div>
        <div class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <i class="bi bi-boxes c-white display-4"></i>
                        <span class="fs-4 px-2">Utopy</span>
                    </a>
                    
                    <ul class="me-lg-auto">
                    </ul>
            
                    @if (session()->has('login'))
                        <a href="/profile" class="btn btn-outline-light me-2">
                            <i class="bi bi bi-person"></i>
                        </a>
                    @else
                        <a href="/login" class="btn btn-outline-light me-2">Вход</a>
                        <a href="/registration" class="btn btn-warning">Регистрация</a>
                    @endif
                    


                    </div>
                </div>
            </div>
            @include('alert')
        </div>
    </div>
    
    {{-- header --}}
    <div class="content-wrapper">
    @yield('content')
    </div>
    {{--footer--}}
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2022 "City Life"</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <i class="bi bi-boxes display-4"></i>
            </a>
        
            <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
    {{--footer--}}

    @yield('scripts')
</body>
</html>