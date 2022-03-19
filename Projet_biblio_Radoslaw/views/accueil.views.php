<?php
ob_start()
?>

Ici c'est la page d'accueil 

<?php
$content = ob_get_clean();
$titre = "Bibilothèque Municipale d'Yvetot";
require "template.php";
?>