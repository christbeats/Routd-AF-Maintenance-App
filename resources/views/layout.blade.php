<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin Template by Tooplate.com</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/css/tooplate.css">
</head>


<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="/">
                            <h1 class="tm-site-title mb-0">Dashboard</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('employee.*') ? 'active' : '' }}" href="{{route('employee.index')}}">Employer</a>
                                    @if (Route::is('employee.*'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link {{ Route::is('material.*') ? 'active' : '' }}" href="{{route('material.index')}}">Materiel</a>
                                    @if (Route::is('material.*'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link {{ Route::is('piece.*') ? 'active' : '' }}" href="{{route('piece.index')}}">Piece</a>
                                    @if (Route::is('piece.*'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link {{ Route::is('anomalie.*') ? 'active' : '' }}" href="{{route('anomalie.index')}}">Anomalie</a>
                                    @if (Route::is('anomalie.*'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link {{ Route::is('diagnostic.*') ? 'active' : '' }}" href="{{route('diagnostic.index')}}">Diagnostic</a>
                                    @if (Route::is('diagnostic.*'))
                                        <span class="sr-only">(current)</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
            <main class="p-4">
                @yield('main')
            </main>
        </div>
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="/js/utils.js"></script>
    <script src="/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="/js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="/js/tooplate-scripts.js"></script>
</body>
</html>
