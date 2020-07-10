<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DESG Nouvelle Reception') }}</title>

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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

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
        <div class="content">
           <form method="POST" action="{{ route('injecteurs.update', [$injecteur->id]) }}">
             @csrf  
        <div class="bg-class">
          <h2 class="text-center ">ETAT INJECTEUR</h2>
          @if(Auth::user()->role == 'technicien')
			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">CLIENT </label>
                    <input type="hidden" name="_method" value="put">
					<input type="text" class="form-control @error('client') is-invalid @enderror" placeholder="{{$injecteur->client}}" name="client" value="{{ old('client') }}" required disabled="">
					               @error('client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer013">Date d'entree </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="date" class="form-control @error('date_entree') is-invalid @enderror" placeholder="{{$injecteur->date_entree}}" name="date_entree" value="{{ old('date_entree') }}" required disabled="">
                                   @error('date_entree')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>
				
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Contact </label>
                    <input type="hidden" name="_method" value="put">
					<input type="number" class="form-control @error('contact') is-invalid @enderror" placeholder="{{$injecteur->contact}}" name="contact" value="{{ old('contact') }}" required disabled="">
					               @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4 mb-3">
					<label for="validationServer013">quantite</label>
                    <input type="hidden" name="_method" value="put">
                    <input type="number" class="form-control @error('quantite') is-invalid @enderror" placeholder="{{$injecteur->quantite}}" name="quantite" value="{{ old('quantite') }}" required disabled="">
                                   @error('quantite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Type </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="number" class="form-control @error('type') is-invalid @enderror" placeholder="{{$injecteur->type}}" name="type" value="{{ old('type') }}" required disabled="">
					               @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>
				<div class="col-md-4 mb-3">
					<label for="validationServer023">Serie </label>
                    <input type="hidden" name="_method" value="put">
					<input type="text" class="form-control @error('serie') is-invalid @enderror" placeholder="{{$injecteur->serie}}" name="serie" value="{{ old('serie') }}" required disabled="">
					               @error('serie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
				</div>
			</div>


			<div class="form-row">
				<div class="col-md-4 offset-md-2 mb-3">
					<label for="validationServer013">Reference</label>
                    <input type="hidden" name="_method" value="put">
					<input type="text" class="form-control @error('reference') is-invalid @enderror" placeholder="{{$injecteur->reference}}" name="reference" value="{{ old('reference') }}" required disabled="">
					               @error('reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

				</div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer013">Etat</label>
                    <div class="form-group">
                            <div class="form-line">          
                                <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->cassure}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                                &nbsp;
                                <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->deja_plombe}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                                  &nbsp;
                                  <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->deja_repare}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                                &nbsp;
                                  <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->deja_controle}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                            </div>
                    </div>

                </div>

			</div>

            <div class="form-row">
                <div class="col-md-8 offset-md-2 mb-6">
                    <label for="validationServer013">Avis client</label>
                    <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" name="_method" value="put">
                                <textarea rows="4" class="form-control no-resize" name="avis_client" placeholder="{{$injecteur->avis_client}}"value="{{ old('avis_client') }}" required disabled=""></textarea>
                                 @error('avis_client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                            </div>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <div class="col-md-8 offset-md-2 mb-6">
                    <label for="validationServer013">Avis technicien</label>
                    <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" name="_method" value="put">
                                <textarea rows="4" class="form-control no-resize" name="avis_technicien" placeholder="{{$injecteur->avis_technicien}}"value="{{$injecteur->avis_technicien}}" required></textarea>
                                 @error('avis_technicien')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                            </div>
                    </div>

                </div>
            </div>

             @else

             <div class="form-row">
                <div class="col-md-4 offset-md-2 mb-3">
                    <label for="validationServer013">CLIENT </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="text" class="form-control @error('client') is-invalid @enderror" placeholder="{{$injecteur->client}}" name="client" value="{{$injecteur->client}}" required>
                                   @error('client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer013">Date d'entree </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="date" class="form-control @error('date_entree') is-invalid @enderror" placeholder="{{$injecteur->date_entree}}" name="date_entree" value="{{$injecteur->date_entree}}" required>
                                   @error('date_entree')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>
                
            </div>

            <div class="form-row">
                <div class="col-md-4 offset-md-2 mb-3">
                    <label for="validationServer013">Contact </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="number" class="form-control @error('contact') is-invalid @enderror" placeholder="{{$injecteur->contact}}" name="contact" value="{{$injecteur->contact}}" required>
                                   @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer013">quantite</label>
                    <input type="hidden" name="_method" value="put">
                    <input type="number" class="form-control @error('quantite') is-invalid @enderror" placeholder="{{$injecteur->quantite}}" name="quantite" value="{{$injecteur->quantite}}" required>
                                   @error('quantite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 offset-md-2 mb-3">
                    <label for="validationServer013">Type </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="number" class="form-control @error('type') is-invalid @enderror" placeholder="{{$injecteur->type}}" name="type" value="{{$injecteur->type}}">
                                   @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer023">Serie </label>
                    <input type="hidden" name="_method" value="put">
                    <input type="text" class="form-control @error('serie') is-invalid @enderror" placeholder="{{$injecteur->serie}}" name="serie" value="{{$injecteur->serie}}" required>
                                   @error('serie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-4 offset-md-2 mb-3">
                    <label for="validationServer013">Reference</label>
                    <input type="hidden" name="_method" value="put">
                    <input type="text" class="form-control @error('reference') is-invalid @enderror" placeholder="{{$injecteur->reference}}" name="reference" value="{{$injecteur->reference}}" required>
                                   @error('reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 

                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer013">Etat</label>
                    <div class="form-group">
                            <div class="form-line">          
                                <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->cassure}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                                &nbsp;
                                <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->deja_plombe}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                                  &nbsp;
                                  <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->deja_repare}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                                &nbsp;
                                  <label class="form-check-label" for="defaultCheck1">
                                    {{$injecteur->deja_controle}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>
                                  <input type="hidden" name="_method" value="put">
                            </div>
                    </div>

                </div>

            </div>

            <div class="form-row">
                <div class="col-md-8 offset-md-2 mb-6">
                    <label for="validationServer013">Avis client</label>
                    <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" name="_method" value="put">
                                <textarea rows="4" class="form-control no-resize" name="avis_client" placeholder="{{$injecteur->avis_client}}" value="{{$injecteur->avis_client}}"></textarea>
                                 @error('avis_client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                            </div>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <div class="col-md-8 offset-md-2 mb-6">
                    <label for="validationServer013">Avis technicien</label>
                    <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" name="_method" value="put">
                                <textarea rows="4" class="form-control no-resize" name="avis_technicien" placeholder="{{$injecteur->avis_technicien}}"value="{{$injecteur->avis_technicien}}" disabled=""></textarea>
                                 @error('avis_technicien')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                            </div>
                    </div>

                </div>
            </div>

            @endif

            <!-- <div class="form-row">
                <div class="col-md-8 offset-md-2 mb-6">
            <span>NB: Du moment ou vous clickez sur ENVOYER votre temps de travail debute</span>
            </div>
            </div> -->
	<div class="form-row">
                <div class="col-md-12">
                    @if(Auth::user()->role == 'technicien')
    			<button class="btn btn-lg btn-primary offset-md-5" type="submit" value="submit">Envoyer avis</button>
                </div>
                @else
                <button class="btn btn-lg btn-primary offset-md-5" type="submit" value="submit">Modifier reception</button>
                @endif
            </div>
            </form>
            @if(Auth::user()->role == 'technicien')
                <form method="POST" action="{{ route('injecteurs.starttask', [$injecteur->id]) }}">
             @csrf  

             <div style="display: none;">
                    <input type="hidden" name="_method" value="get">
                    <input type="date" class="form-control @error('debut_tache') is-invalid @enderror" placeholder="{{$injecteur->debut_tache}}" name="debut_tache" value="{{$injecteur->debut_tache}}" required disabled="">
                                   @error('debut_tache')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                <input type="hidden" name="taskstatut" value="En cours">

                </div>
                <div class="col-md-6">
                    <button class="btn btn-lg btn-success offset-md" type="submit" value="submit"> Debuter Tache</button>
                </div>
            </form>

            <form method="POST" action="{{ route('injecteurs.endtask', [$injecteur->id]) }}">
             @csrf  

             <div style="display: none;">
                    <input type="hidden" name="_method" value="get">
                    <input type="date" class="form-control @error('fin_tache') is-invalid @enderror" placeholder="{{$injecteur->fin_tache}}" name="fin_tache" value="{{$injecteur->fin_tache}}" required disabled="">
                                   @error('fin_tache')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                <input type="hidden" name="taskstatut" value="Terminé">

                </div>
                <div class="col-md-6">
                    <button class="btn btn-lg btn-danger offset-md-5" type="submit" value="submit">Terminer Tache</button>
                </div>
            </form>
        </div>

        </div>

                </div>
		</div>
        @endif
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Admin
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

