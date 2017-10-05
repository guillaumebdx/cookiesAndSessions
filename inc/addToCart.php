<?php
$timeCookie = 365*24*3600;
if (isset($_GET['add_to_cart'])){

    if(empty($_COOKIE["Article"])) {
        //si le cookie n'existe pas on le crée avec l'ArticleId
        $timeCookie = 365 * 24 * 3600;
        $articleId = $_GET['add_to_cart'];
        setcookie("Article", $articleId, time() + $timeCookie);
        echo "Votre article a bien été ajouté au panier !";
    }
    else
    {
        //sinon (si le cookie existe), on le met à jour en ajoutant le nouvel articleId
        $timeCookie = 365 * 24 * 3600;
        $articleId = $_GET['add_to_cart'];
        $ContentCookie = $_COOKIE["Article"];
        setcookie("Article", $ContentCookie . "," . $articleId, time() + $timeCookie);

        echo "Votre nouvel article a bien été ajouté au panier";
    }




}
