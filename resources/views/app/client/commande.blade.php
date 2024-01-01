<x-layout.master title="Le cercle - L’imprimerie Marocaine">
    <main>
        <div class="" id="carousel"></div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" class="container my-1" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-secondary" href="#">Le Cercle</a></li>
                    <li class="breadcrumb-item active" style="color: #D22F6F;" aria-current="page">{{ $produit->nom }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Detail de commande -->
        <section>
            <div class="container-fluid">
                <div class="row col-10 col-md-11 col-lg-10 mx-auto">
                    <div class="col-12 col-md-5">
                        <img src="{{ $produit->thumbnail ? \Storage::url($produit->thumbnail) : '' }}" class="img-fluid"
                            alt="...">
                        <div class="d-none d-md-block">
                            <!-- details table -->
                            <div class="row ps-4">
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Format</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Epaisseur</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Tranche</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Papier</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Impression</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Coins</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Pelliculage</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Vernis</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Quantité</div>
                                    <div class="col-6">--</div>
                                </div>
                                <div class="row border-bottom border-1 px-0">
                                    <div class="col-6 mx-0 px-0">Adaptation graphique</div>
                                    <div class="col-6">--</div>
                                </div>
                            </div>
                            <!-- fin details table -->
                            <button type="button" class="btn btn-sm rounded-0 mt-3 mb-4 col-12"
                                style="background-color: #D12F6F;color: #ffffff;">TELECHARGER UN DEVIS</button>
                            <!-- banner devis 1 -->
                            <div class="row text-center pt-4 pb-5 col-12 mx-auto" style="background-color: #F5F5F5;">
                                <p class="my-0">VOUS NE TROUVEZ</p>
                                <div style="color: #D12F6F;">
                                    <p class="fs-3 fw-bolder my-0">LE PRODUIT</p>
                                    <p class="fs-3 fw-bolder my-0">OU LA FINITION</p>
                                    <p>QUE VOUS RECHERCHEZ?</p>
                                </div>
                                <p style="font-size: small;" class="my-0">DEMANDEZ VOTRE</p>
                                <button type="button" class="btn btn-sm rounded col-4 mx-auto"
                                    style="background-color: #D12F6F;color: #ffffff;">DEVIS SUR-MESURE</button>
                            </div>
                            <!-- fin banner devis 1 -->
                        </div>
                    </div>
                    {{-- Details produit --}}
                    <div class="col-12 col-md-7">
                        <h4 class="fs-6 fw-bold">Configurez vos {{ $produit->nom }}</h4>
                        <p class="col-12 col-md-10 col-xl-8" style="font-size: small;">Que ce soit pour célébrer une
                            fête ou un événement interne
                            à votre entreprise, vos cartes de vœux reflèteront votre image de marque et renforceront le
                            message qu’elles délivrent, grâce à un très large choix de supports et de finitions.</p>
                        <p class="mt-3">Format <i class='bx  mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0" id="detail">
                                    <img src="\assets/images/Details de produit/Pelliculage Brillant R°.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Simple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0" id="detail">
                                    <img src="\assets/images/Details de produit/Pelliculage Mat R°.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Double épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0" id="detail">
                                    <img src="\assets/images/Details de produit/Coins Arrondis.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Triple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Epaisseur <i class='bx  mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Papier <i class='bx mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Impression <i class='bx  mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Pelliculage Brillant R°.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Simple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Pelliculage Mat R°.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Double épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Coins Arrondis.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Triple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Type de coin <i class='bx  mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Pelliculage <i class='bx  mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Pelliculage Brillant R°.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Simple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Pelliculage Mat R°.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Double épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Coins Arrondis.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Triple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Vernis <i class='bx  mx-2 bxs-right-arrow'
                                style="color: #F1B944;font-size: x-small;"></i></p>
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8">
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Coins Arrondis.svg"
                                        style="height: 39px;" class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">Triple épaisseur</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto Verso.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">85 x 45</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 px-0 mx-1 mt-2">
                                <div class="card p-0">
                                    <img src="\assets/images/Details de produit/Recto.svg" style="height: 39px;"
                                        class="card-img-top pt-2 pb-0" alt="...">
                                    <div class="card-body p-0 mx-auto ">

                                        <p class="card-text text-center mx-0 mx-md-2 mt-1 mb-2"
                                            style="font-size: x-small;">65 x 65</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- la partie de le prix unitaire et total avec le button de l'ajout au panier -->
                        <div class="row col-12 col-md-12 col-lg-12 col-xxl-8 mt-4">
                            <div class="row text-center pt-3 mb-2 col-12 mx-auto" style="background-color: #F5F5F5;">
                                <div class="row" style="color: #D12F6F;">
                                    <div class="col-6">
                                        <p class="text-start">Prix unitaire</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end">18,998 Dhs HT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center pt-3 mb-2 col-12 mx-auto" style="background-color: #F5F5F5;">
                                <div class="row" style="color: #D12F6F;">
                                    <div class="col-6">
                                        <p class="text-start fw-bolder">Total <sub class="fw-light">( Economisez
                                                474.95 Dhs )</sub></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end fw-bolder">949.9 Dhs HT</p>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-md mt-3 mb-4 col-12"
                                style="background-color: #D12F6F;color: #ffffff;">Ajouter au panier</button>
                        </div>
                        <!-- Fin de la partie de le prix unitaire et total avec le button de l'ajout au panier -->
                    </div>
                    {{-- Fin de Details produit --}}
                </div>
            </div>
        </section>
        <!-- fin Detail de commande -->
        <!-- Nos services dédiés aux entreprises -->
        <x-sections.our-servicesforentreprises />
        <!-- fin Nos services dédiés aux entreprises -->
    </main>
    <script>
        document.querySelector("#detail").addEventListener("click", () => {
            document.querySelector("#detail").classList.add("selected");
        });
    </script>
</x-layout.master>
