<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body class="d-flex flex-column h-100">
<header class="bg-primary text-center text-lg-start shadow">
    <!-- Image -->
    <nav class="d-flex flex-row justify-content-end py-3 align-items-start mx-5">
        <a class="btn btn-primary" href="{{ route('dashboard') }}" style="">Strona domowa</a>
        <a class="btn btn-primary" href="{{ route('wykladowca.katalog_prac') }}" style="">Katalog prac</a>
        <a class="btn btn-primary" href="{{ route('wykladowca.ocena_prac') }}" style="">Ocena prac</a>
        <button type="button" class="btn btn-primary" style="">Ustawienia</button>
        <a class="btn btn-primary" href="#" style="">{{ Auth::user()->name }}</a>
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-danger" type="submit">Wylogować się</button>
        </form>
        </a>
    </nav>


</header>

{{--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--    @if (Route::has('login'))--}}
{{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}
<div class="container my-5">
@yield('main_content')
</div>


<footer class="mt-auto bg-primary text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-4 text-white">
        <!-- Copyright date will automatically update and sync with current year -->
        © <?php echo date("Y"); ?> Copyright all rights reserved
    </div>
    <!-- Copyright -->
</footer>


</body>
