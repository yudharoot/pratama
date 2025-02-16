<!DOCTYPE html>
<html>
<head>
    <title>Photo Upload</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', serif;
            background-color: #eef1f5;
        }
        nav {
            width: 100%;
            background-color: #343a40;
            padding: 20px 0;
        }
        .nav-container {
            max-width: 1000px;
            margin: auto;
            display: flex;
            justify-content: flex-start;
            padding-left: 50px;
        }
        .nav-container a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-right:50px;
            font-family: 'Times New Roman', serif;
            font-size: 18px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('album') }}">Album</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>