<ul>
<?php
    foreach($pages as $rowpage) {
?>
<li>
<a href="edit_page/<?= $rowpage->getUrl() ?>"><?= $rowpage->getTitre() ?></a> 
<form method="POST">
    <input type="hidden" name="id_page" value="<?= $rowpage->id ?>" /> <!--Récupère l'id-->
    <button name="supprimer">X</button>
</form>
</li>
<?php
    }
?>
</ul>