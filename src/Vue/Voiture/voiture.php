<?php include('../Base/head.php'); ?>
<body class="poster_list">
<?php include('../Base/navbar.php'); ?>

  <div class="container head_categorie pb-3 pt-3">
    <div class="row justify-content-center pt-4">
      <div class="jumbotron presentation_categorie col-12">
        <div class="row justify-content-center">
          <div class="col-12 titreVoiture">
                                                               
            <div class="titreVoiture" style="background-image: url('../../../public/images/img_voiture/Motif_retro_70_80/Motif_speed.jpg');
            	background-size: 100% auto;color:black;border:1px solid grey;">
                <h1 class="display-4" > "CAR'S TV 70-80" </h1>
                <p class="lead" style="font-size:30px;font-weight: bold;background-color:#ECECEC;margin:20px 20px;">Bienvenu sur notre page dédié aux autos des années 70 et 80.</p>
                <hr class="my-4" >
                <p style="font-size:20px;30px;font-weight: bold;background-color:#ECECEC;margin:20px 20px;">Voici les fameuses autos de nos séries TV d'enfance des années 70*80.</p>
            </div>               
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- TEMPLATE PRODUIT-->
 
  <section id="produits">
    <div class="container">
      <div class="row">

        <?php include '../../../data/data_cards_voiture/dataAutoCard.php';   
        	foreach($tabCardAuto as $key => $values){
        ?> 

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 overlay">
          <img class="img-responsive" src="<?php echo $values[0]?>" alt="...">
          <button class="btn btn-lg more_info" data-toggle="modal" data-target="#<?php echo $key?>">Plus d'infos</button>
          <div class="produits_titre">
            <h2><?php echo $values[1]?></h2>
            <hr>
            <div class="row">
              <div class="col-6">
                <p>Année<?php echo $values[2]?></p>
              </div>
              <div class="col-6 text-right">
                <p><?php echo $values[3]?>€</p>
                </div>
            </div>
          </div>
        </div>
    <?php }?>
  </section>



    <!-- MODAL-->

    <?php
     include '../../../data/data_cards_voiture/dataAutoModal.php';  

    foreach($tabModAuto as $key => $values){
    ?>
  <div class="modal fade" id="<?php echo $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title title_details" id="exampleModalLabel" style="font-size:1.5rem;">
            <?php echo $values[4] ?> </h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>
          </div>
        
          <div class="row">

            <div class="col-12" style="padding:-5px">
              <img src="<?php echo $values[0] ?>" class="img-fluid img-thumbnail" alt="Responsive image">
              
            </div>
            <div class="col-12" style="display:flex;flex-direction: column;justify-content:center;margin:0px;">
              
              <table class="table table-sm" style="font-size:1rem;width:100%">
               
              <tbody>
                <tr >
                  <th scope="row" >Puissance</th>
                  <td><?php echo $values[2] ?></td>
                </tr>
                <tr>
                  <th scope="row">Kilométrage</th>
                  <td><?php echo $values[3] ?></td>
                </tr>
                <tr>
                  <th scope="row">Année</th>
                  <td><?php echo $values[5] ?></td>
                </tr>
                <tr>
                  <th scope="row">Prix</th>
                  <td><?php echo $values[6] ?></td>
                </tr>
               </tbody>
              </table>
              </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"style="font-size:0.8rem">retour</button>
          <button type="button" class="btn btn-success " style="font-size:0.8rem">Ajouter au panier</button>
        </div>
      </div>
    </div>
  </div>
  <?php
    }
  ?>

<!-- Footer -->
<?php include('../Base/footer.php'); ?>
</body>
</html>


