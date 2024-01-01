<header class="fixed-top">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand col-12 col-sm-3" href="http://127.0.0.1:8000/">
                <img src="https://lecercleimprimeur.ma/logo.svg" alt="Logo" width="200" height="50" class="d-inline-block align-text-top">
            </a>
            <!-- start Contact info -->
            <div class="mt-3 col-12 col-sm-8 me-lg-5 pt-2">
                <ul class="nav justify-content-start justify-content-sm-end  col-12 col-sm-12">
                    <li class="info nav-item mr-1" style="display:flex;align-items:center;">
                        <img src="https://lecercleimprimeur.ma/morocco.png" width="24" class="rounded-circle mx-1" alt="...">
                        <span class="d-none d-lg-block"> Maroc</span>
                    </li>
                    <li class="info nav-item mx-1 fs-6 fs-sm-5" style="display:flex;align-items:center;">
                        <i class='bx bxl-whatsapp bx-sm mx-1'></i>
                        <span class="d-none d-md-block">
                            +212 661 314 762
                        </span>
                    </li>
                    @auth
                    <div class="dropdown">
                        <a class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <li class="info nav-item mx-1" style="display:flex;align-items:center;">
                                <i class='bx bx-user bx-sm me-1'></i>
                                <span class="d-none d-lg-block"> Mon compte</span>
                            </li>
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Mes commandes</a></li>
                                @can('view-any', App\Models\User::class)
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                @endcan
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </div>
                    @else
                    <a class="btn" href="{{ route('login') }}">
                        <li class="info nav-item mx-1" style="display:flex;align-items:center;">
                            <i class='bx bx-log-in bx-sm'></i>
                                <span class="d-none d-lg-block"> Inscription / Connexion</span>
                        </li>
                    </a>
                    @endauth
                    <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <li class="info nav-item mx-1" style="display:flex;align-items:center;">
                            <i class='bx bx-cart-add bx-sm mx-1'></i>
                            <span class="d-none d-lg-block"> Panier</span>
                        </li>
                    </a>
                    <li class="info nav-item ms-4 d-block d-lg-none">
                        <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Fin Contact info -->
            {{-- <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div> --}}
            <!-- start Menu -->
            <div class="mt-1 col-12 col-sm-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary pb-0">
                    <div class="container-fluid">
                    {{-- This menu for smalls devices --}}
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                            <ul class="nav navbar-nav justify-content-center ">
                                @foreach ($categories as $categorie)
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{str_replace('_', '/', $categorie->nom)}}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @forelse ($categorie->categories as $subCategorie)

                                            <li>
                                                <div class="dropdown">
                                                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{str_replace('_', '/', $subCategorie->nom)}}
                                                    </a>
                                                    <ul class="dropdown-menu">

                                                        @forelse ($subCategorie->categories as $subCategorie2)

                                                        <li>
                                                            <div class="dropdown">
                                                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    {{str_replace('_', '/', $subCategorie2->nom)}}
                                                                </a>
                                                              
                                                                <ul class="dropdown-menu">
                                                                    @forelse ($subCategorie2->produits as $produit)

                                                                    <li><a class="dropdown-item" href="{{ route("product", $produit) }}">{{$produit->nom}}</a></li>

                                                                    @empty

                                                                    @endforelse
                                                                </ul>
                                                              </div>
                                                        </li>

                                                        @empty

                                                        @endforelse

                                                        @forelse ($subCategorie->produits as $produit)

                                                        <li><a class="dropdown-item" href="{{ route("product", $produit) }}">{{$produit->nom}}</a></li>

                                                        @empty

                                                        @endforelse
                                                    </ul>
                                                </div>
                                            </li>

                                            @empty

                                            @endforelse
                                            @forelse ($categorie->produits as $produit)

                                            <li><a class="dropdown-item" href="{{ route("product", $produit) }}">{{$produit->nom}}</a></li>

                                            @empty

                                            @endforelse
                                        </ul>
                                    </div>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                    {{-- Fin menu for smalls devices --}}
                        {{-- This menu for large devices --}}
                        <div class="collapse navbar-collapse justify-content-center d-none d-lg-block">
                            <ul class="nav navbar-nav justify-content-center ">
                                <li class="nav-item">
                                    <div class="dropdown ttt d-none d-lg-block">
                                        <a class="nav-link text-secondary dropdown-toggle" id="dropdownMenuButton" href="#" aria-expanded="false">
                                            Tous les produits
                                        </a>
                                    </div>
                                </li>
                                @foreach ($categories as $categorie)
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="nav-link text-secondary" href="../category/{{$categorie->nom}}" id="dropdownMenuButton" aria-expanded="false">
                                            {{str_replace('_', '/', $categorie->nom)}}
                                            <span class="badge text-secondary pt-0">
                                                <i class='bx bxs-down-arrow ' style="font-size: xx-small;"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu  border-0 rounded-0" aria-labelledby="dropdownMenuButton">
                                            @forelse ($categorie->categories as $subCategorie)

                                            <li>
                                                <div class="btn-group dropend col-12">
                                                    <a class="nav-link border-start border-3 text-dark mx-2" href="../category/{{$subCategorie->nom}}" aria-expanded="false">
                                                        {{str_replace('_', '/', $subCategorie->nom)}}
                                                    </a>
                                                    <ul class="dropdown-menu border-start rounded-0" @if ($categorie->
                                                        nom=="Carterie") style="margin-left: 205px" @else
                                                        style="margin-left: 150px" @endif>

                                                        @forelse ($subCategorie->categories as $subCategorie2)

                                                        <li>
                                                            <div class="btn-group dropend col-12">
                                                                <a class="nav-link border-start border-3 text-dark mx-2" href="../category/{{$subCategorie2->nom}}" aria-expanded="false">
                                                                    {{str_replace('_', '/', $subCategorie2->nom)}}
                                                                </a>
                                                                <ul class="dropdown-menu border-start rounded-0" @if ($categorie->nom=="Carterie") style="margin-left: 205px" @else
                                                                    style="margin-left: 150px" @endif>
                                                                    @forelse ($subCategorie2->produits as $produit)

                                                                    <li><a class="dropdown-item" href="{{ route("product", $produit) }}">{{$produit->nom}}</a></li>

                                                                    @empty

                                                                    @endforelse
                                                                </ul>
                                                            </div>
                                                        </li>

                                                        @empty

                                                        @endforelse

                                                        @forelse ($subCategorie->produits as $produit)

                                                        <li><a class="dropdown-item" href="{{ route("product", $produit) }}">{{$produit->nom}}</a></li>

                                                        @empty

                                                        @endforelse
                                                    </ul>
                                                </div>
                                            </li>

                                            @empty

                                            @endforelse
                                            @forelse ($categorie->produits as $produit)

                                            <li><a class="dropdown-item" href="{{ route("product", $produit) }}">{{$produit->nom}}</a></li>

                                            @empty

                                            @endforelse
                                        </ul>
                                    </div>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                        {{-- fin menu for large devices --}}
                    </div>
                </nav>
                {{-- All products menu --}}
                <div class="dropdown-menu ttt2 position-absolute bg-body col-11 ms-5" aria-labelledby="dropdownMenuButton">
                    <div class="row p-2">
                        @foreach ($categories as $categorie)
                        <div class="col-3">
                            <a class="nav-link fw-bold" style="color: #E33312;" href="../category/{{$categorie->nom}}">
                                {{$categorie->nom}}
                            </a>

                            @foreach ($categorie->categories as $subCategorie)

                                @foreach ($subCategorie->categories as $subCategorie2)

                                @foreach ($subCategorie2->produits as $produit)
                                <a class="ms-2 pb-0 nav-link text-secondary" href="{{ route("product", $produit) }}">
                                    {{$produit->nom}}
                                </a>
                                @endforeach

                                @endforeach

                            @foreach ($subCategorie->produits as $produit)
                            <a class="ms-2 pb-0 nav-link text-secondary" href="{{ route("product", $produit) }}">
                                {{$produit->nom}}
                            </a>
                            @endforeach

                            @endforeach

                            @foreach ($categorie->produits as $produit)
                            <a class="ms-2 nav-link text-secondary" href="{{ route("product", $produit) }}">
                                {{$produit->nom}}
                            </a>
                            @endforeach

                        </div>

                        @endforeach
                    </div>
                </div>
                {{-- fin all products menu --}}
            </div>
            <!-- Fin Menu -->
        </div>
    </nav>
</header>
