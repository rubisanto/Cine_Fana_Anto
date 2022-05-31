<?php
// Changement dynamique du header
$title = "CRUD";
$css = "crud.css";
$table = "Back-Office";
$href = "index.php";
$link = "Back to home";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<div class="row row-cols-md-2">
    <?php while ($result = $tables->fetch()) { ?>
        <div class="col mt-5">
            <div class="card text-center">
                <img src="img/img.png" class="card-img-top" alt="image d'illustration du CRUD">
                <div class="card-body">
                    <h5 class="card-title"><?= $result["Tables_in_cine_fana"] ?></h5>
                    <a href="?table=<?= $result["Tables_in_cine_fana"] ?>" class="btn btn-warning">Acceder a la table</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "crudLayout.php";
?>