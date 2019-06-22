<?php include('../Base/head.php'); ?>
<body>
<?php include('../Base/navbar.php'); ?>

  <div class="container head_categorie pb-3 pt-3">
    <div class="row justify-content-center pt-4">
      <div class="jumbotron presentation_categorie col-12">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="display-4 text-center">"Armes de guerres anciennes"</h1>
            <p class="lead text-center">Bienvenue sur notre page dédié au armes de nos ancêtres"</p>
            <hr class="my-4">
            <p class="text-center">"Collectionner les objets militaires est une passion qui demande du temps, de la patience et de la modestie et une solide documentation. Ces exigences sont d’autant plus importantes qu’avec le temps, les objets deviennent plus rares et de plus en plus difficiles d’accès. Toutefois, l’art militaire est un thème de collection qui permet encore, selon les possibilités de chacun, de trouver des objets de premier choix historique, sans nécessairement que le prix soit inaccessible.<br>AVERTISSEMENT<br>
            Seuls l’achat et la vente d’armes anciennes et de collection sont permis sur ce site. L’achat, la vente et la mise en ligne d’annonces concernant des armes de catégories A, B et C sont strictement interdits.
            Pour rappel, afin d’acheter/vendre une arme ancienne ou de collection sur ce site, vous devez remplir les conditions suivantes :
            - Etre majeur
            - Etre au courant de la législation en vigueur .</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- TEMPLATE PRODUIT-->

  <section id="produits">
    <div class="container">
      <div class="row">
<?php
include('../../../data/data_cards_armes.php');
foreach($tableauArmes as $key =>$values){
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="<?php echo $values[2]?>" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#<?php echo $key?>">Plus d'infos</button>
          <div class="produits_titre">
            <h2><?php echo $key?></h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p><?php echo $values [0]?></p>
              </div>
              <div class="col-6 text-right">
                <p><?php echo $values[1]?></p>
              </div>
            </div>
          </div>
        </div>
<?php }
?>
      </div>
    </div>
  </section>
  <!-- MODAL-->
<div></div>
<?php
include('../../../data/data_cards_armes.php');
foreach($tableauArmes as $key =>$values){
          ?>
      <div class="modal fade" id="<?php echo $key?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title title_details" id="exampleModalLabel"><?php echo $key?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-pic">
          <img src="<?php echo $values[3]?>" class="card-img " alt="...">
        </div>
        <div class="modal-body">
          <p><?php echo $values[4]?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-success">Ajouter au panier</button>  
        </div>
      </div>
    </div>
  </div>
  <?php }
?>

  </div>

  <section>
 
    <div><a id="cRetour" class="cInvisible" href="#"></a></div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      window.onscroll = function(ev) {
        document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
      };
    });
    </script>
    </section>


<!-- Footer -->
<?php include('../Base/footer.php'); ?>
</body>
</html>