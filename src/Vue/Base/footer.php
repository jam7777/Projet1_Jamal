<footer class="page-footer font-small text-white pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-xs-12 col-md-2 offset-md-1">
          <a class="btn-socialMedia" href="https://fr-fr.facebook.com/" target="_blank">
            <i class="fab fa-facebook-square fa-lg mr-md-4"></i></a>
          <a class="btn-socialMedia" href="https://twitter.com/login?lang=fr" target="_blank">
            <i class="fab fa-twitter-square fa-lg"></i>
          </a>
        </div>
          <!-- Bouton contact-->
        <div class="col-xs-12 col-md-2">
            <button type="button" class="text-white btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
              Contactez nous
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="container modal-content bg-dark text-white">
                  <div class="modal-header">
                    <h5 class="modal-title text-white moodal" id="exampleModalLabel">Contactez nous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body bg-dark">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control"
                        style="  font-family: 'rockstar', cursive;  font-size: 2em;" placeholder="Votre email"
                        aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="moodal input-group-text">Votre message</span>
                      </div>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                  <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-danger moodal" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary moodal">Envoyer</button>
                  </div>
                </div>
              </div>
            </div>
          <!-- fin du bouton contact-->
        </div>
        <div class="col-xs-12 col-md-2 mb-md-0 mb-4 ">
          <ul class="list-unstyled ">            
            <li>
              <a class="text-white" href="/src/Vue/Retro/retro.php">Retro-gamming</a>
            </li>
            <li>
              <a class="text-white" href="/src/Vue/Voiture/voiture.php">Voitures 70-80</a>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-md-2 mb-md-0 mb-4">
          <ul class="list-unstyled">           
            <li>
              <a class="text-white" href="/src/Vue/Arme/arme.php">Armes anciennes</a>
            </li>
            <li>
              <a class="text-white" href="/src/Vue/Mobilier/mobilier.php">Mobilier</a>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-md-2 mb-md-0 mb-4">
          <ul class="list-unstyled">

            <li>
              <a class="text-white" href="/index.php#NOUS">Qui sommes nous</a>
            </li>
            <li>
              <a class="text-white"  href="https://wildcodeschool.com/" target="_blank">Wild Code School</a>
            </li>
            <li>
                <div class="text-white font-weight-light font-italic">© copyright - 2019</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  </script>