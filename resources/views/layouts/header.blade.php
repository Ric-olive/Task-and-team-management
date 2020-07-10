<header class="main-header">
    	
		<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="top-outer clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li><a href="#"><span class="icon fa fa-phone"></span>  Appelez nous 22-29-42-634</a></li>
                            <li><a href="#"><span class="icon fa fa-envelope-o"></span>info@des-pnr.com</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<ul class="links">
                            <!--Language-->
                            <li>
                                @auth
                    
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">CONNEXION</a>
                        <a href="{{ route('register') }}">SIGN UP</a>
                    @endauth
                            </li>
                        </ul>  
						<ul class="social-icon-one">
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>				
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
		
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="header-upper-inner clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="{{ route('welcome')}}">Acceuil</a>
									</li>
									<li class="dropdown"><a href="#">A Propos</a>
										<ul>
											<li><a href="{{ route('about')}}">A Propos de Nous</a></li>
											<li><a href="team.html">Equipe</a></li>
											<li><a href="clients.html">Clients</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="price.html">Prix</a></li>
											<li><a href="we-do.html">Que faisons nous</a></li>
										</ul>
									</li>
									<li><a href="{{ route('services')}}">Services</a></li>
									<li><a href="{{ route('gallerie')}}">Gallerie</a></li>
									<li class="dropdown"><a href="{{ route('blog')}}">Blog</a>
										<ul>
											<li><a href="blog-standard.html">Blog Standard</a></li>
											<li><a href="blog-masonry.html">Blog Masonry</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul>
									</li>
									<li><a href="{{ route('nouscontacter')}}">Nous Contacter</a></li>
								</ul>
							</div>
							
						</nav>
						
					</div>
                   <!--Option Box-->
					<div class="btn-box">
						<a href="#" class="theme-btn btn-style-one">Prendre un RDV</a>
					</div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('welcome')}}">Acceuil</a>
								</li>
								<li class="dropdown"><a href="#">A Propos</a>
									<ul>
										<li><a href="{{ route('about')}}">A Propos de Nous</a></li>
										<li><a href="team.html">Equipe</a></li>
										<li><a href="clients.html">Clients</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="price.html">Prix</a></li>
										<li><a href="we-do.html">Que faisons nous</a></li>
									</ul>
								</li>
								<li><a href="{{ route('services')}}">Services</a></li>
								<li><a href="{{ route('gallerie')}}">Gallerie</a></li>
								<li class="dropdown"><a href="{{ route('blog')}}">Blog</a>
									<ul>
										<li><a href="blog-standard.html">Blog Standard</a></li>
										<li><a href="blog-masonry.html">Blog Masonry</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="{{ route('nouscontacter')}}">Contacter Nous</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>