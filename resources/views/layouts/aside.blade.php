<nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="menu-icon fa fa-laptop"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                    </li>
                    <li class="menu-title">Etablir reception</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('injecteurs.index') }}"> <i class="menu-icon fa fa-cogs"></i>Injecteur</a>
                    </li>
                    <li>
                        <a href="{{ route('pompes.index') }}"> <i class="menu-icon fa fa-table"></i>Pompe</a>
                    </li>
                    <li>
                        <a href="{{ route('vehicules.index') }}"> <i class="menu-icon fa fa-car"></i>Vehicule</a>
                    </li>
                    <li>
                        <a href="{{ route('mecaniques.index') }}"> <i class="menu-icon fa fa-wrench"></i>Mecanique</a>
                    </li>

                    <li class="menu-title">Debuter tache</li><!-- /.menu-title -->

                    <li>
                        <a href="{{ route('injecteurs.index') }}"> <i class="menu-icon fa fa-tasks"></i>Tache Injecteur</a>
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
                        <a href="{{ route('users.edit', [Auth::user()->id]) }}"> <i class="menu-icon fa fa-pencil-square-o"></i>Modifier profil</a>
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
                                    </li>
                    </ul>
            
            </div><!-- /.navbar-collapse -->
        </nav>