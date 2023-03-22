<?php

if (isset($page)) {
?>
    <form method="POST">
        <input type="text" name="url"  value="<?= $page->getUrl() ?>" />
        <input type="text" name="titre"  value="<?= $page->getTitre() ?>"/>
        <textarea name="contenu"><?= $page->getContenu() ?></textarea>
        <input type="hidden" name="id_page" value="<?= $rowpage->id ?>" />
        <input type="submit" name="send" />
    </form>
<?php
}
?>




