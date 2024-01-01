<!-- Full screen modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Votre panier</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            
            {{-- if card is empty --}}
                <div class="row mt-5">
                    <div class="col-3 col-md-2 col-lg-2 mx-auto text-center">
                        <img src="https://weprint.ma/content/images/empty-cart.png" class="img-thumbnail border-0 mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-4 mx-auto">
                        <h4>Votre panier est vide</h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-4 mx-auto">
                        <p>
                            On dirait que vous n'avez pas encore pris votre décision. Peut-être que vous devriez vous rendre sur notre Page d'accueil ou...
                        </p>
                    </div>
                </div>
            {{-- Fin if card is empty --}}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Full screen modal -->