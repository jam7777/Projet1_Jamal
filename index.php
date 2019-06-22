<?php include('src/Vue/Base/head.php'); ?>
<body>
<?php include('src/Vue/Base/navbar.php'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1>Produits les plus visités</h1>
      </div>
    </div>
  </div>
  <section>
  <?php include 'src/Vue/Accueil/les_plus_vues_caroussel.php' ?>
  </section>  
  <hr>
  <section id="categorie">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Categories</h1>
        </div>
      </div>
      <!-- CARDS -->
      <div class="row justify-content-center">
      <?php
      //on appelle le tableau avec les données des cartes présentant les catégories.
      include('data/data_cards_index.php');      
      foreach($tableauCategorie as $key => $values){?>
        <div class="col-12 col-lg-6">
          <div class="card mx-auto text-white card_article">
            <a href="<?php echo $values[2]?>" class="noStyle">
              <img src="<?php echo $values[1]?>" class="card-img" alt="..." width="100%">
              <div class="card-img-overlay">
                <h2 class="card-title"><?php echo $values[0];?></h2>
                <i class="far fa-arrow-alt-circle-right fleche"></i>
              </div>
            </a>
          </div>
        </div>      
      <?php }  ?>
    </div><!-- end div row -->
    </div><!-- end div container -->
  </section>
  <hr>
    <!-- Qui sommes-nous? -->
  <section>
    <div class="container-fluid nous" id="NOUS">
      <h1>Qui sommes-nous?</h1>
      <p class="lead text-nous">Pawn Shop est la boutique de prêt sur gage la plus connue de France. Nous sommes une
        équipe de 6 copains prêteur sur gages avec chacun une catégorie d'objet que l'on maitrise et sommes fan. Le rôle
        de notre entreprise est de prêter de l'argent à des personnes qui nous apportent des objets de valeur et qu'ils
        laissent au prêteur sur gages. Des exemples d'objets qu'une personne peut laisser sont les armes de guerres
        anciennes, voitures année 70, jukebox et vinyle, rétro-gaming ainsi que tous ce qui est en rapport avec l'URSS.
        Nous faisons en quelques sorte revivre les articles les plus Mytiques de ces dernieres années. Notre relation
        envers les personnes désirant de refaire un retour dans le passé avec les choix d'articles que nous proposons ce
        font par passion. PawnShop à été pour la dixième années élu au 1er rang des sociètés les plus Performantes en
        therme de relation clients.</p>
      <div class="team"> 
        <a class="btn btn-outline-secondary btn-lg" href="#" role="button">Notre équipe</a>
      </div>
    </div>
  </section>
  <hr>
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
  <?php include('src/Vue/Base/footer.php'); ?>
</body>
</html>