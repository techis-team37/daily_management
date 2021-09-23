<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットCSSの読み込み -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>daily_management</title>
</head>
<body>
    <div class="logo-header">
    <main id="main">
        @yield('content')
    </main>
    </div>
</body>
</html>