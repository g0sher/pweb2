<?php

/******************
 * CASTRO Frédéric
 ******************/

//Définition du site_name et page_title
$replace = array('%page_title%', '%site_name%');
$with = array('Événements', 'AEE Strasbourg');

//Start
ob_start();

//Obligatoires
include('./templates/head-top.php');
include('./templates/head-bottom.php');
include('./templates/navbar.php');

//Compléments
include('./assets/init-container.php');
include('./assets/comp-listarticle.php');
include('./assets/comp-article.php');

//Footer
include('./templates/footer.php');

//Sortie
$ob = ob_get_clean();

echo str_replace($replace, $with, $ob);

?>