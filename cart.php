<?php
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (isset($_COOKIE['Article'])) {
        echo 'Article dans votre panier : '. $_COOKIE['Article'];
        }
        else {
        echo 'Votre panier est vide';
            }
            ?>
        <a href="index.php"><p>Retour à l'accueil</p></a>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
