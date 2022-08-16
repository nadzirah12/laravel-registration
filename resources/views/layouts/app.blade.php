<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script>
</head>

<body>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl tracking-tight font-bold text-gray-900 flex flex-row">My Application</h1>
        <div class="flex flex-row-reverse">
            @if( auth()->check() )
                <a class="block p-3 m-2 font-weight-bold" href="#"><div>Hi {{ auth()->user()->name }}</div></a>
                <a class="block p-3 m-2" href="/logout"><div>Log Out</div></a>
            @else
                <a class="block p-3 m-2" href="/login"><div>Log In</div></a>
                <a class="block p-3 m-2" href="/register"><div>Register</div></a>
            @endif
        </div>
        </div>
    </header>
    @yield('content')
</body>
</html>
