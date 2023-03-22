<?php

if (isset($_POST['supprimer'])) {
        $supprimer = "DELETE FROM page WHERE id=:id";
        $stmt = Db::getDb()->prepare($supprimer);
        $stmt->execute(['id' => $_POST['id_page']]);
    }
    
    // Répertorie les différentes pages (de la BDD) soit sous forme de liste, soit sous forme de tableau
    $pages = Page::loadPages();
    
    // Affichage de la vue
    $template = "adminpages.php";
    require "vue/layout.php";