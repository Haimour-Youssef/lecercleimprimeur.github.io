<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="https://lecercleimprimeur.ma/images/recycle.png" alt="Vemto Logo" class="brand-image">
        <span class="brand-text font-weight-light">Le Cercle Imprimeur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @auth
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://lecercleimprimeur.ma/images/user.png" alt="Vemto Logo" class="brand-image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</a>
            </div>
        </div>
        @endauth

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu">

                @auth
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon icon ion-md-pulse"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon icon ion-md-apps"></i>
                        <p>
                            Apps
                            <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('view-any', App\Models\User::class)
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="nav-icon icon ion-md-radio-button-off"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        @endcan
                        @can('view-any', App\Models\Caracteristique::class)
                        <li class="nav-item">
                            <a href="{{ route('caracteristiques.index') }}" class="nav-link">
                                <i class="nav-icon icon ion-md-radio-button-off"></i>
                                <p>Caracteristiques</p>
                            </a>
                        </li>
                        @endcan
                        @can('view-any', App\Models\Produit::class)
                        <li class="nav-item">
                            <a href="{{ route('produits.index') }}" class="nav-link">
                                <i class="nav-icon icon ion-md-radio-button-off"></i>
                                <p>Produits</p>
                            </a>
                        </li>
                        @endcan
                        @can('view-any', App\Models\Commande::class)
                        <li class="nav-item">
                            <a href="{{ route('commandes.index') }}" class="nav-link">
                                <i class="nav-icon icon ion-md-radio-button-off"></i>
                                <p>Commandes</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon icon ion-md-exit"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>