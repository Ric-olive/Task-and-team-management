<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DESG') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>

<body>
    <div id="app">
        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="menu-icon fa fa-laptop"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                    </li>
                    <li class="menu-title">Etablir une reception</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('injecteurs.index') }}"> <i class="menu-icon fa fa-cogs"></i>Injecteur</a>
                    </li>
                    <li>
                        <a href="{{ route('pompes.index') }}"> <i class="menu-icon fa fa-table"></i>Pompe</a>
                    </li>
                    <li>
                        <a href="{{ route('mecaniques.index') }}"> <i class="menu-icon fa fa-th"></i>Mecanique</a>
                    </li>

                    <li class="menu-title">Commander devis</li><!-- /.menu-title -->

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    </li>
                    <li class="">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </ul>
                </li>
            </div><!-- /.navbar-collapse -->
        </nav>
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
        <div class="content">
           <form method="POST" action="{{ route('injecteurs.store') }}">
             @csrf  
        <div class="bg-class">
          <h2 class="text-center text-success">Reception Injecteur</h2>

			<div class="form-row">
				<div class="col-md-8 offset-md-2 mb-3">
					<label for="validationServer013">CLIENT </label>
					<input type="text" class="form-control @error('client') is-invalid @enderror" placeholder="client" name="client" value="{{ old('client') }}" required>
					               @error('client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
				
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Contact </label>
					<input type="number" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact" name="contact" value="{{ old('contact') }}" required>
					               @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4 mb-3">
					<label for="validationServer023">N° devis </label>
					<input type="text" class="form-control @error('num_devis') is-invalid @enderror" placeholder="N° devis" name="num_devis" value="{{ old('num_devis') }}" required>
					               @error('num_devis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Type </label>
					<input type="text" class="form-control @error('type') is-invalid @enderror" placeholder="Type" name="type" value="{{ old('type') }}" required>
					               @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4 mb-3">
					<label for="validationServer023">Serie </label>
					<input type="text" class="form-control @error('serie') is-invalid @enderror" placeholder="Serie" name="serie" value="{{ old('serie') }}" required>
					               @error('serie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Date d'entree </label>
					<input type="date" class="form-control @error('date_entree') is-invalid @enderror" placeholder="Date d'entree" name="date_entree" value="{{ old('date_entree') }}" required>
					               @error('date_entree')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4 mb-3">
					<label for="validationServer023">Date de sortie</label>
					<input type="date" class="form-control @error('date_sortie') is-invalid @enderror" placeholder="Date de sortie" name="date_sortie" value="{{ old('date_sortie') }}" required>
					               @error('date_sortie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">N° bon de livraison </label>
					<input type="text" class="form-control @error('num_bon_de_livraison') is-invalid @enderror" placeholder="n° bon de livraison" name="num_bon_de_livraison" value="{{ old('num_bon_de_livraison') }}" required>
					               @error('num_bon_de_livraison')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4 mb-3">
					<label for="validationServer023">Bon de commande</label>
					<input type="text" class="form-control @error('bon_de_cde') is-invalid @enderror" placeholder="bon de commande" name="bon_de_cde" value="{{ old('bon_de_cde') }}" required>
					               @error('bon_de_cde')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">N° facture</label>
					<input type="text" class="form-control @error('num_facture') is-invalid @enderror" placeholder="n° facture" name="num_facture" value="{{ old('num_facture') }}" required>
					               @error('num_facture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4  mb-3">
					<label for="validationServer013">Designation</label>
					<input type="text" class="form-control @error('designation') is-invalid @enderror" placeholder="designation" name="designation" value="{{ old('designation') }}" required>
					               @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Reference</label>
					<input type="text" class="form-control @error('reference') is-invalid @enderror" placeholder="reference" name="reference" value="{{ old('reference') }}" required>
					               @error('reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4  mb-3">
					<label for="validationServer013">N° bl/fact</label>
					<input type="text" class="form-control @error('num_bl/fact') is-invalid @enderror" placeholder="n° bl/fact" name="num_bl/fact" value="{{ old('num_bl/fact') }}" required>
					               @error('num_bl/fact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
			</div>

            <div class="form-row">
                <div class="col-md-4 offset-md-2 mb-3">
                    <label for="validationServer013">quantite</label>
                    <input type="text" class="form-control @error('quantite') is-invalid @enderror" placeholder="quantite" name="quantite" value="{{ old('quantite') }}" required>
                                   @error('quantite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>
                <div class="col-md-4  mb-3">
                    <label for="validationServer013">Avis client</label>
                    <input type="text" class="form-control @error('avis_client') is-invalid @enderror" placeholder="avis client" name="avis_client" value="{{ old('avis_client') }}" required>
                                   @error('avis_client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>
            </div>
	
			<button class="btn btn-lg btn-primary offset-md-5" type="submit" value="submit">Submit form</button>
		</div></form>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
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

    <!--Local Stuff-->
  

    </div>
</body>
</html>

