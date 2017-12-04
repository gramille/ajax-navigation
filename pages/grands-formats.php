<?php

$image_path = 'assets/img/grands-formats/';
$list_ext = array('jpeg', 'jpg', 'png', 'gif');
$folder = opendir($image_path);
$nb_images = 0;

while($file = readdir($folder)) {

    // contrôle de l'extension du fichier courant
    $ext = explode('.', $file);
    // mise en minuscules de l'extension
    $ext = strtolower($ext[count($ext) - 1]);

    // test extension parmi les possibles
    if (in_array($ext,$list_ext)) {
        // stockage nom fichier dans un tableau si extension OK
        $list_images[] = $file;
        // contrôle boucle - fin de boucle
        $nb_images++;
    }
}

// tri naturel du tableau
natcasesort($list_images);
// réindexation du tableau selon le nouvel ordre
$list_images = array_values($list_images);

?>

<h1>Grands formats</h1>

<?php
// boucle pour toutes les images autorisées
for ($i=0; $i<$nb_images; $i++) {
    // affichage image courante - fin de boucle
    echo '<img src="'.$image_path.'/'.$list_images[$i].'"> ';
}
?>
