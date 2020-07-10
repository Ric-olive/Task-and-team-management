<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DESG Reception Injecteur') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font/flaticon.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Poppins" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<style>
html {
  font-size: 62.5%; }

body {
  box-sizing: border-box; 
    background:#222;
}

    .row {
  max-width: 114rem;
  margin: 0 auto; }
  .row::after {
    content: '';
    clear: both;
    display: table; }
  .row [class^="col-"] {
    float: left; }
    .row [class^="col-"]:not(:last-child) {
      margin-right: 6rem; }
  .row:not(:last-child) {
    margin-bottom: 6rem; }
  .row .col-1-of-2 {
    width: calc((100% - 6rem) / 2); }
  .row .col-1-of-3 {
    width: calc((100% - 2 * 6rem) / 3); }
  .row .col-1-of-4 {
    width: calc((100% - 3 * 6rem) / 4); }
  .row .col-2-of-4 {
    width: calc(2 * ((100% - 3 * 6rem) / 4) + 6rem); }
  .row .col-3-of-4 {
    width: calc(3 * ((100% - 3 * 6rem) / 4) + 2 * 6rem); }


.section-tours {
  background-color: #f7f7f7; }
  
.card {
  perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
  height: 52rem; }
  .card__side {
    height: 52rem;
    transition: all .8s ease;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    backface-visibility: hidden;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); }
    .card__side--front {
      background-color: #fff; }
    .card__side--back {
      transform: rotateY(180deg); }
      .card__side--back-1 {
        background-image: linear-gradient(to right bottom, #ffb900, #ff7730); }
      .card__side--back-2 {
        background-image: linear-gradient(to right bottom, #000428, #004e92); }
      .card__side--back-3 {
        background-image: linear-gradient(to right bottom, #2998ff, #5643fa); }
  .card:hover .card__side--front {
    transform: rotateY(-180deg); }
  .card:hover .card__side--back {
    transform: rotateY(0); }
  .card__picture {
    background-size: cover;
    height: 23rem;
    background-blend-mode: screen;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
    .card__picture--1 {
      background-image: linear-gradient(to right bottom, #ffb900, #ff7730), url(https://picsum.photos/300/250?random=5); }
    .card__picture--2 {
      background-image: linear-gradient(to right bottom, #000428, #004e92), url(https://picsum.photos/300/250?random=6); }
    .card__picture--3 {
      background-image: linear-gradient(to right bottom, #2998ff, #5643fa), url(https://picsum.photos/300/250?random=7); }
  .card__heading {
    font-size: 2.8rem;
    text-transform: uppercase;
    color: #fff;
    font-weight: 300;
    position: absolute;
    top: 12rem;
    right: 2rem;
    text-align: right;
    width: 74%; }
  .card__heading-span {
    padding: .5rem 1.5rem;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone; }
    .card__heading-span--1 {
      background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85)); }
    .card__heading-span--2 {
      background-image: linear-gradient(to right bottom, rgba(0, 4, 40, 0.85), rgba(0, 78, 146, 0.85)); }
    .card__heading-span--3 {
      background-image: linear-gradient(to right bottom, rgba(41, 152, 255, 0.85), rgba(86, 67, 250, 0.85)); }
  .card__details {
    padding: 3rem; }
    .card__details ul {
      list-style: none;
      width: 80%;
      margin: 0 auto; }
      .card__details ul li {
        text-align: center;
        font-size: 1.5rem;
        padding: 1rem; }
        .card__details ul li:not(:last-child) {
          border-bottom: 1px solid #eee; }
  .card__cta {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); }
  .card__price-box {
    color: #fff;
    text-align: center;
    margin-bottom: 8rem; }
  .card__price-only {
    font-size: 1.4rem;
    text-transform: uppercase; }
  .card__price-value {
    font-size: 6rem;
    font-weight: 100; }
    
    
.btn--animated {
  animation: fadeInUp .5s ease-out;
  animation-fill-mode: backwards; }

.btn:link, .btn:visited {
  text-transform: uppercase;
  padding: 1.5rem 4rem;
  display: inline-block;
  transition: all .2s;
  color: initial;
  position: relative;
  font-size: 1.6rem; }

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2); }

.btn:active {
  transform: translateY(-1px);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2); }

.btn::after {
  content: '';
  display: inline-block;
  height: 100%;
  width: 100%;
  border-radius: 10rem;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
  transition: all .2s; }

.btn::after {
  background: #fff; }

.btn:hover::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0; }

.btn--white {
  background-color: #fff;
  border-radius: 10rem; }

.btn--blue {
  background-color: #004e92;
  border-radius: 10rem;
  color: #fff !important; }

.text-center {
  text-align: center; }

    </style>

<body>
    <div id="app">
        <aside id="left-panel" class="left-panel">
            @include('layouts.aside')
        </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'DESG') }}</a>
                    <a class="navbar-brand hidden" href="{{ url('/') }}">{{ config('app.name', 'DESG') }}</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        
        <section class="section-tours">
            <div class=" text-center  u-margin-bottom-medium">
                <br>  <br>  <h2 class="heading-secondary">
                    LISTE RECEPTION INJECTEUR
                </h2>
                @if(Auth::user()->role == 'admin')
        <div class="text-right" ><a style="float: right;margin-right: 15px" href="{{ route('injecteurs.create') }}"><span class="flaticon-add-1">Creer</span></a></div>
        @endif
                <br>  <br>

            </div>
            <div class="row">
              @foreach($injecteurs as $injecteur)
                <div class="col-1-of-3">
                     <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                 
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">DESG FICHE INJECTEUR</span><br>
                                <span style="color:">{{$injecteur->taskstatut}}</span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Client:{{$injecteur->client}}</li>
                                    <li>Date:{{$injecteur->date_entree}}</li>
                                    <li>Reference:{{$injecteur->reference}}</li>
                                    <li>Avis client:{{$injecteur->avis_client}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Reserve</p>
                                    <p class="card__price-value">Agent</p>
                                </div>
                                <a href="/injecteurs/{{$injecteur ->id}}" class="btn btn--white">Voir Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </section>

        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href=""></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="{{ asset('js/init/weather-init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="{{ asset('js/init/fullcalendar-init.js') }}"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Local Stuff-->
  

    </div>
</body>
</html>

