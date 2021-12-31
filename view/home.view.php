<?php ob_start() ?>


<p class="center">Immo'Hallouf, la seule agence immobilière qui vous dégote des prix de cochons malades !</p>


<?php
$content =  ob_get_clean();
$title = "Bienvenue chez Immo'Hallouf";
require_once "base.html.php";
?>