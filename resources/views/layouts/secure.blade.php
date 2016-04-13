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
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- CSS Stylesheets -->
    <link href='/css/style.css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the head --}}
    @yield('head')

</head>
<body>

    <div class="container">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                    data-target="#kt-navbar-collapse-6" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/dashboard">Keeper Tracker</a> 
                </div> 

                <div class="collapse navbar-collapse" id="kt-navbar-collapse-6">
                    <ul class="nav navbar-nav"> 
                        <li><a href="/create-customer">Create Customer</a></li>
                        <li><a href="/customers">Customers</a></li>
                        <li><a href="/sales">Sales</a></li>
                        <li><a href="/profile">Profile</a></li>
                    </ul> 
                </div> 
            </div>
        </nav>

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