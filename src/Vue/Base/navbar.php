<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom bg-dark">
      <p class="navbar-brand text-white my-0 mr-md-auto"><a href="/index.php">&#xe04f;Pawn&#x00e4;Shop&#xe050;</a></p>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="m-2 liens_nav" href="/index.php#NOUS">Qui sommes-nous?</a>
      </nav>

      <div class="dropdown mr-lg-5">
        <a class="m-2 dropdown-toggle liens_nav dropdown-toggle" href="/#" 
          id="navbarDropdownMenuLink" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false">
          Categories
        </a>

        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/src/Vue/Voiture/voiture.php">Voitures 70-80</a>
          <a class="dropdown-item" href="/src/Vue/Arme/arme.php">Armes de guerres anciennes</a>
          <a class="dropdown-item" href="/src/Vue/Retro/retro.php">Retro-gaming</a>
          <a class="dropdown-item" href="/src/Vue/Mobilier/mobilier.php">Mobilier</a>
        </div>
      </div>

      <a class="btn btn-light register" data-toggle="modal" data-target=".bd-example-modal-xl" href="#">Se connecter</a>
      <!-- Modal Se connecter du menu-->
      <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content bg-dark text-white">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <h3 class="moodal">Se connecter</h3>
                  <form action="" method="">
                    <div class="row">
                      <label for="email_address" class="moodal col-md-4 col-form-label text-md-right">E-Mail</label>
                      <div class="col-md-6">
                        <input type="text" id="email_address" class="form-control" name="email-address" required
                          autofocus>
                      </div>
                    </div>

                    <div class="row">
                      <label for="password" class="moodal col-md-4 col-form-label text-md-right">Mot de passe</label>
                      <div class="col-md-6">
                        <input type="password" id="password" class="form-control" name="password" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 offset-md-4">
                        <div class="moodal checkbox">
                          <label><input type="checkbox" name="remember">se souvenir</label>
                        </div>
                      </div>
                    </div>

                    <div class="moodal col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">Connexion</button>
                      <a href="#" class="btn btn-link">Mot de passe oublié?</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
