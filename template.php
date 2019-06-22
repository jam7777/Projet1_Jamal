<!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:300|Lilita+One" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Pawn Shop</title>
</head>

<body class="poster_list">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom bg-dark">
      <p class="navbar-brand text-white my-0 mr-md-auto">&#xe04f;Pawn&#x00e4;Shop&#xe050;</p>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="#">Qui sommes-nous?</a>
        <a class="p-2 text-white" href="#">Produits du mois</a>
      </nav>
      <div class="dropdown mr-md-5">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button"
          aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Voitures années 70</a>
          <a class="dropdown-item" href="Page_secondaire/page-arme.html">Armes de guerres anciennes</a>
          <a class="dropdown-item" href="#">Juke-Box et vyniles</a>
          <a class="dropdown-item" href="#">URSS</a>
          <a class="dropdown-item" href="Page_secondaire/page_retro.html">Retro-gaming</a>
        </div>
      </div>
      <a class="btn btn-light" data-toggle="modal" data-target=".modal_seConnecter" href="#">Se connecter</a>
      <!-- Modal Se connecter du menu-->
      <div class="modal fade modal_seConnecter" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <main class="login-form">
              <div class="cotainer">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">Se connecter</div>
                      <div class="card-body">
                        <form action="" method="">
                          <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                            <div class="col-md-6">
                              <input type="text" id="email_address" class="form-control" name="email-address" required
                                autofocus>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                            <div class="col-md-6">
                              <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                              <div class="checkbox">
                                <label><input type="checkbox" name="remember">se souvenir</label>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                            <a href="#" class="btn btn-link">Mot de passe oublié?</a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container head_categorie pb-3 pt-3">
    <div class="row justify-content-center pt-4">
      <div class="jumbotron presentation_categorie col-12">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="display-4">"nom de la catégorie"</h1>
            <p class="lead">Bienvenu sur notre page dédié à "nom de la catégorie"</p>
            <hr class="my-4">
            <p>"description de la catégorie". Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque tenetur
              explicabo commodi enim nemo blanditiis modi similique nesciunt. Expedita laudantium aliquam doloribus non
              aut aliquid eaque iure itaque et provident.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- TEMPLATE PRODUIT-->

  <section id="produits">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo2.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo3.jpeg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="./images/velo1.jpg" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#test">Plus d'infos</button>
          <div class="produits_titre">
            <h2>Un joli titre</h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année 1990</p>
              </div>
              <div class="col-6 text-right">
                <p>199$</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- MODAL-->

  <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title title_details" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-pic">
          <img src="images/clem-onojeghuo-179397-unsplash-1.jpg" class="card-img " alt="...">
        </div>
        <div class="modal-body">
          <p> Article Description</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>


    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="affiche2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Titre Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> Article Description</p>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>


  <footer class="page-footer font-small bg-grey pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-3 mb-md-0 mb-3">
          <a class="btn-socialMedia">
            <i class="fab fa-facebook-square"></i></a>
          <a class="btn-socialMedia">
            <i class="fab fa-twitter-square"></i>
          </a>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <ul class="list-unstyled">
            <li>
              <a class="text-muted" href="#">Produits du mois</a>
            </li>
            <li>
              <a class="text-muted" href="#">Retro-gamming</a>
            </li>
            <li>
              <a class="text-muted" href="#">URSS</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <ul class="list-unstyled">
            <li>
              <a class="text-muted" href="#">Voitures années 70</a>
            </li>
            <li>
              <a class="text-muted" href="#">Armes de guerres anciennes</a>
            </li>
            <li>
              <a class="text-muted" href="#">Juke-Box et vyniles</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <ul class="list-unstyled">

            <li>
              <a class="text-muted" href="#">Qui sommes nous</a>
            </li>
            <li>
              <a class="text-muted" href="#">Contactez nous</a>
            </li>
            <li>
              <a class="text-muted" href="https://wildcodeschool.com/">Wild Code School</a>
            </li>
          </ul>
        </div>
        <div class="col-xs-12">
          <div class="text-muted font-weight-light font-italic">© copyright - 2019</div>
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
</body>

</html>