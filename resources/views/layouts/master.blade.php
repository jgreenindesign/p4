<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists --}}
        @yield('title',"Keeper Tracker")
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap framework -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- CSS Stylesheets -->
    <link href='/css/style.css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the head --}}
    @yield('head')

</head>
<body>

    <div class="container">

        <section>
            {{-- Yield page content --}}
            @yield('content')
        </section>

        <div class="clearfix"></div>

        <footer>
            &copy; Greenindesign {{ date('Y') }}
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        {{-- Yield any information at the end of the page --}}
        @yield('js-footer')
    </div>

</body>
</html>