<?php

if (isset($_GET['page'])) {
    $page = Page::loadFromUrl(trim($_GET['page']));

    if ($page) {
        //require_once "vue/affichepage.php";
        $template = "vue/form_page.php";
    } else {
        $template = "vue/404.html";
    }
    require "vue/layout.php";
} else {
    require "controleur/form.php";
}

if (isset($_POST['send'])) {
    $page = Page::loadFromUrl(trim($_GET['page']));
   if($page) {
    $page->setUrl($_POST['url']);
    $page->setTitre($_POST['titre']);
    $page->setContenu($_POST['contenu']);
    $page->saveUpdate();
   }
}
?>