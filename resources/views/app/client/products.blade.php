<x-layout.master title="Le cercle - L’imprimerie Marocaine">
    <main>
        <div class="" id="carousel"></div>
        <!-- Carousel -->
        <section>
            <article>
                <div id="carouselExampleDark" class="carousel carousel-dark " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="http://127.0.0.1:8000/assets/images/Carousel/1.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <!-- fin Carousel -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" class="container my-1" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-secondary" href="#">Tout les produits</a></li>
                    <li class="breadcrumb-item active" style="color: #D22F6F;" aria-current="page">Carterie</li>
                </ol>
            </nav>
        </div>
        <!-- Products -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 my-3 col-md-6 mx-auto text-center">
                        <h2 class="text-center" style="color: #D12F6F;">{{str_replace('_', '/', $categorie->nom)}}</h2>
                    </div>
                </div>
                <div class="row col-11 col-md-9 mx-auto">
                    @foreach ($categorie->categories as $subCategories)
                        @foreach ($subCategories->categories as $subCategories2)
                            @foreach ($subCategories2->produits as $produit)
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="row mt-2 ">
                                    <img src="{{ $produit->thumbnail ? \Storage::url($produit->thumbnail) : '' }}" class="img-fluid rounded" alt="">
                                    <span class="text-center fs-6">{{$produit->nom}}</span>
                                    <a href="{{ route("product", $produit) }}" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</a>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        @foreach ($subCategories->produits as $produit)
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="row mt-2 ">
                                    <img src="{{ $produit->thumbnail ? \Storage::url($produit->thumbnail) : '' }}" class="img-fluid rounded" alt="">
                                    <span class="text-center fs-6">{{$produit->nom}}</span>
                                    <a href="{{ route("product", $produit) }}" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                    @foreach ($categorie->produits as $produit)
                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="row mt-2 ">
                            <img src="{{ $produit->thumbnail ? \Storage::url($produit->thumbnail) : '' }}" class="img-fluid rounded" alt="">
                            <span class="text-center fs-6">{{$produit->nom}}</span>
                            <a href="{{ route("product", $produit) }}" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- fin Products -->
        <!-- Articles fréquemment achetés ensemble -->
        <section class="mt-5 pb-5" style="background-color: #F3F4F6;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 my-3 col-md-6 mx-auto text-center">
                        <h5 class="text-center" style="color: #444444;">Articles fréquemment achetés ensemble</h5>
                    </div>
                </div>
                <div class="row col-10 col-md-8 mx-auto">
                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="row mt-2">
                            <img src="./assets/images/best seller/1.svg" class="img-fluid rounded" alt="">
                            <span class="text-center">Cartes de visite</span>
                            <button type="button" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</button>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="row mt-2">
                            <img src="./assets/images/best seller/2.svg" class="img-fluid rounded" alt="">
                            <span class="text-center">Dépliants</span>
                            <button type="button" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</button>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="row mt-2">
                            <img src="./assets/images/best seller/3.svg" class="img-fluid rounded" alt="">
                            <span class="text-center">Flyers</span>
                            <button type="button" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</button>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="row mt-2">
                            <img src="./assets/images/best seller/4.svg" class="img-fluid rounded" alt="">
                            <span class="text-center">Sac en papier</span>
                            <button type="button" class="btn btn-sm mx-auto col-8 col-sm-8 col-md-8" style="background-color: #D12F6F;color: #ffffff;">Commander</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fin Articles fréquemment achetés ensemble -->
        <!-- Nos services dédiés aux entreprises -->
        <x-sections.our-servicesforentreprises />
        <!-- fin Nos services dédiés aux entreprises -->
    </main>
</x-layout.master>
