<?php

/******************
 * CASTRO Frédéric
 ******************/

//Définition du site_name et page_title
$replace = array('%page_title%', '%site_name%');
$with = array('', 'AEE Strasbourg');

//Start
ob_start();

//Obligatoires
include('./templates/head-top.php');
include('./templates/head-bottom.php');
include('./templates/navbar.php');

//Compléments
include('./assets/comp-evenement.php');

include('./assets/init-container.php');
include('./assets/comp-xat.php');
include('./assets/comp-twitter.php');

//Footer
include('./templates/footer.php');

//Sortie
$ob = ob_get_clean();

echo str_replace($replace, $with, $ob);

?>