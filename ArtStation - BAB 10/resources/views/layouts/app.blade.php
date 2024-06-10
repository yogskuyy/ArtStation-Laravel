<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/dbstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <style>
        
    </style>
</head>
<body>
    @include('partial.nav')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <main>
            <div class="sales">
                @yield('content')
            </div>
        </main>
    </div>
    <script>
        document.querySelector('.sidebar-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });
    </script>
</body>
</html>