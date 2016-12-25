<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Vaelux&nbsp;@yield('title')</title>


    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}
    <style>@import url('https://fonts.googleapis.com/css?family=Bungee+Hairline|Electrolize|Orbitron:300|Poppins|Work+Sans:300|Kanit:300');</style>
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/font-awesome-extension.min.css" rel="stylesheet">
    <link href="/css/jquery-ui-1.12.1.custom/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="/css/jquery-ui-1.12.1.custom/jquery-ui.theme.min.css" rel="stylesheet">
    <link href="/css/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/tether.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet">
    <link href="/css/spectrum.css" rel="stylesheet">
    <link href="//gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="/css/slate.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/pjax/pjax.js"></script>
    <script type="text/javascript" src="/js/moment.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>
    <script type="text/javascript" src="/js/spectrum.js"></script>
    <script type="text/javascript" src="//gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="/js/site.js"></script>

    <script>
        window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token() ]); ?>
    </script>

    <script>
        $(function ()
        {
            // This one is important, many browsers don't reset scroll on refreshes
            // Reset all scrollable panes to (0,0)
            $('div.pane').scrollTo(0);
            // Reset the screen to (0,0)
            $.scrollTo(0);
        });
    </script>

</head>

<body style="overflow:hidden;">

<div class="loading-slate">
    <div class='triangles'>
        <div class='tri invert'></div>
        <div class='tri invert'></div>
        <div class='tri'></div>
        <div class='tri invert'></div>
        <div class='tri invert'></div>
        <div class='tri'></div>
        <div class='tri invert'></div>
        <div class='tri'></div>
        <div class='tri invert'></div>
    </div>
</div>

<div id="app" style="height:100vh;overflow:hidden;">
    <div style="width:100%;top:0;">
        <nav class="navbar navbar-default navbar-static-top" style="background:none;background-color:rgb(55,55,55);margin:0px;box-shadow: 0px 5px 5px #111;">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        VAELUX
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="{{ $active_tab == 'home' ? 'active ' : '' }}hover-expand nav-home">
                            <a href="/">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="hover-expand-target"> Home</span>
                            </a>
                        </li>
                        <li class="{{ $active_tab == 'about' ? 'active ' : '' }}hover-expand nav-about">
                            <a href="/about">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hover-expand-target"> About</span>
                            </a>
                        </li>
                        <li class="{{ $active_tab == 'forum' ? 'active ' : '' }}hover-expand nav-forum">
                            <a href="http://forum.{{$_SERVER['HTTP_HOST']}}">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <span class="hover-expand-target"> Forum</span>
                            </a>
                        </li>
                        <li class="{{ $active_tab == 'wiki' ? 'active ' : '' }}hover-expand nav-wiki">
                            <a href="/wiki">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                <span class="hover-expand-target"> Wiki</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="hover-expand">
                                <a href="{{ url('/login') }}">
                                    <span class="hover-expand-target">Login </span>
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="hover-expand">
                                <a href="{{ url('/register') }}">
                                    <span class="hover-expand-target">Signup </span>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bell" aria-hidden="true"></i>
                                </a>
                            </li>



                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="subnav">
            <div class="container">
                <div id="breadcrumbs-container">
                    <a href="/index" style="float: left;">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>

                    <div id="#breadcrumbs-wrapper" class="breadcrumbs-wrapper">
                        @yield('breadcrumbs')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
    <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>We encountered the following errors:</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="loading" style="display:none;width:100%;height:calc(100vh - 91px - 40px - 30px);">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

    <div id="content-container" name="content-container">
        <a name="#top" id="top"></a>
        @yield('content')
        <a name="#bottom" id="bottom"></a>
    </div>

    <div id="footer" name="footer">
        <div class="page-up-down">
            <div class="page-down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
            <div class="page-up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
        </div>
    </div>
</div>


<!-- Scripts -->
<script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>

</body>
</html>
