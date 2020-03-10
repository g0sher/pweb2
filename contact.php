<?php

/******************
 * CASTRO Frédéric
 ******************/

//Définition du site_name et page_title
$replace = array('%page_title%', '%site_name%');
$with = array('Contact', 'AEE Strasbourg');

//Start
ob_start();

//Obligatoires
include('./templates/head-top.php');
include('./templates/head-bottom.php');
include('./templates/navbar.php');

//Compléments
include('./assets/comp-contact.php');

//Footer
include('./templates/footer.php');

//Sortie
$ob = ob_get_clean();

echo str_replace($replace, $with, $ob);

?>