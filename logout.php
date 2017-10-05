<?php
require 'inc/head.php';
unset($_SESSION["newsession"]);
setcookie("Article", "",-1);
echo "<p>Vous êtes maintenant déconnecté</p><p><a href='login.php'>Retour login</a></p>";