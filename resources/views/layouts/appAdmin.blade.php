<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MobiliSense</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        MobiliSense
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tableau de bord Admin</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif



                            <div class="sidebar">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <ul class="Information">
                                      <li><a href="{{ url('newsHome') }}"><h3>Actualité</h3></a></li>
                                      <li> <a id="Qualification" class="link" href="{{ url('userHome') }}"> <h3>Utilisateurs</h3></a></li>
                                      <li> <a href="{{ url('newsletterAdmin') }}"><h3>Liste des abonnés à la Newsletter</h3></a></li>
                                      <li><a id="Experience" class="link"> <h3>Publications et communications</h3> </a></li>
                                      <li><a href="{{ url('wave') }}"> <h3>Gestion des vagues</h3> </a></li>
                                      <li><a href="{{ url('dossierHome') }}"> <h3>Dossier de presse </h3> </a></li>
                                      <li><a id="Interests" class="link"> <h3>Collaborateurs</h3> </a></li>
                                      <li><a href="{{ url('calendarHome') }}"> <h3>Calendrier</h3> </a></li>
                                      <li><a href="{{ url('infoletterHome') }}"> <h3>Lettre d'information</h3> </a></li>
                                      <li><a href="{{ url('faqHome') }}"> <h3>FAQ - En savoir plus</h3> </a></li>
                                    </ul>
                                  </div>
                                  <div class="col-sm-9">
                                    @yield('content')
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
      <script type="text/javascript">
        tinymce.init({
        selector: '#mytextarea',
        });
      </script>
</body>
</html>
