<?php
// Changement dynamique du header
$title = "Crud Products";
$css = "crud.css";
$table = "Products";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">product_id</th>
            <th scope="col">product_title</th>
            <th scope="col">product_date</th>
            <th scope="col">product_type</th>
            <th scope="col">product_synopsis</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $products->fetch()) { ?>
            <tr>
                <td><?= $result["product_id"] ?></td>
                <td><?= $result["product_title"] ?></td>
                <td><?= $result["product_date"] ?></td>
                <td><?= $result["product_type"] ?></td>
                <td><?= $result["product_synopsis"] ?></td>
                <td><a href="?delete_product=<?= $result["product_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "crudLayout.php";
?>