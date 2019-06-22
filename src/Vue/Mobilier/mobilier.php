<?php include('../Base/head.php'); ?>
<body>
<?php include('../Base/navbar.php'); ?>


  <div class="container head_categorie pb-3 pt-3">
    <div class="row justify-content-center pt-4">
      <div class="jumbotron presentation_categorie col-12">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="display-4">Mobilier vintage</h1>
            <p class="lead">Bienvenu sur notre page dédié au mobilier vintage</p>
            <hr class="my-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque tenetur
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
        <?php 
        include('../../../data/data_cards_mobilier.php');
        foreach ($productsMobilier as $key => $value) {
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="<?= $value[0]?>" alt="">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#<?= $value[4]?>">Plus d'infos</button>
          <div class="produits_titre">
          <h2><?php echo $value[1]?></h2>
          <hr>
            <div class="row">
              <div class="col-6">
              <p><?php echo $value[2]?></p>
              </div>
              <div class="col-6 text-right">
              <p><?php echo $value[3]?></p>
              </div>
            </div>
          </div>
        </div>

  <!-- MODAL-->


  <div class="modal fade" id="<?= $value[4]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title title_details" id="exampleModalLabel"><?= $value[1]?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-pic">
          <img src="<?= $value[0]?>" class="card-img " alt="...">
        </div>
        <div class="modal-body">
          <p><?= $value[1]?></p>
          <p><?= $value[2]?></p>
          <p><?= $value[3]?>€</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
          <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

</div>
</div>
</section>


<!-- Footer -->
<?php include('../Base/footer.php'); ?>
</body>
</html>