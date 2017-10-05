<?php
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (isset($_COOKIE['Article'])) {

           $articlesExploded = explode(",",$_COOKIE['Article']);
           $nbArticles = count($articlesExploded);
           echo "<p> " . $nbArticles . " " . 'Article(s) dans votre panier </p>';
           foreach ($articlesExploded as $key=>$value)
           {
               echo "<img src='assets/img/product-$value.jpeg' alt='Votre article'> <br />";
           }


        }
        else {
        echo 'Votre panier est vide';
            }
            ?>
        <a href="index.php"><p>Retour à l'accueil</p></a>
    </div>
   </section>

<?php require 'inc/foot.php'; ?>
