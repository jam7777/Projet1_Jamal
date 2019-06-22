<?php include('../Base/head.php'); ?>
<body>
<?php include('../Base/navbar.php'); ?>
    <div class="container head_categorie pb-3 pt-3">
    <div class="row justify-content-center pt-4">
      <div class="jumbotron presentation_categorie col-12">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="display-4 text-center mb-3">Retro-gaming</h1>
            <p class="lead text-center">Bienvenu sur notre page dédié au Retro-gaming!</p>
            <hr class="mb-5">
            <h3 class="text-center">Nous vous proposons 2 consoles, la Nintendo Entertainement System et la Mega Drive ainsi que certains de leurs jeux les plus marquant tel que Super Mario Bros. ou Sonic The Hedgehog 2! </h3><h3 class="my-5 text-center">Tous nos jeux sont vendus en loose, les console sont dezonné, moddée rgb et sont fourni avec leurs cable d'alimentation et rgb.</h3>
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
        //on appelle le tableau avec les données des cartes présentant les catégories.
        include('../../../data/data_card_retro.php');      
        foreach($tableauRetro as $key => $values){?>       
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="<?php echo $tableauRetro[$key][0]?>" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#<?php echo $key ?>">Plus d'infos</button>
          <div class="produits_titre">

            <h2><?php echo $tableauRetro[$key][1]?></h2>
            <hr>
            <div class="row">
              <div class="col-6">

                <p><?php echo $tableauRetro[$key][2]?></p>

              </div>
              <div class="col-6 text-right">

                <p><?php echo $tableauRetro[$key][3]?></p>
                
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



                <?php
      //on appelle le tableau avec les données des cartes présentant les catégories.
      include('./card_category.php');
      
      foreach($tableauRetro as $key => $values){
          ?>
  <div class="modal fade" id="<?php echo $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title title_details" id="exampleModalLabel"><?php echo $tableauRetro[$key][1]?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-pic">
          <img src="<?php echo $tableauRetro[$key][5]?>" alt="...">
        </div>
        <div class="modal-body">

          <p><?php echo $tableauRetro[$key][4]?></p>
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