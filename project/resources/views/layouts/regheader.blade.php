<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css" />
    <title>header</title>
</head>
<body>
    <div class="header">
        <div class="header-right">
            @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            <a href="/aboutus.php">Contact</a>
            <a href="https://www.iti.gov.eg/iti/about-us">About</a>
        </div>
    </div>
</body>
</html>
