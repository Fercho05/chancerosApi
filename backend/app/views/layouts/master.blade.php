<html>
    <head>
        <meta charset="UTF-8">
        <title>Chanceros UTB</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap core CSS -->
        {{ HTML::style('recursos/css/bootstrap.min.css' , array('media'=>'screen')) }}
        {{ HTML::style('recursos/css/bootstrap-theme.min.css' , array('media'=>'screen')) }}
        {{ HTML::style('recursos/css/style.css' , array('media'=>'screen')) }}
    </head>
    <body>
        @section('header')
        <nav class="headercolor navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ChanceUTB</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/chanceslist">Home</a></li>
                        <li><a href="/registerchance">New Chance</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/profile">{{ Auth::user()->name}} {{Auth::user()->lastname }}</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        @show
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <div class="contentfooter">
                @yield('footer')
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
    </body>
</html>
