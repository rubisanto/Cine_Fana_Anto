<?php
if ($_SESSION["admin"] == false) {
    header("Location: index.php");
}
// Changement dynamique du header
$title = "Crud Comments";
$css = "crud.css";
$table = "Comments";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">comment_id</th>
            <th scope="col">comment_author</th>
            <th scope="col">comment_date</th>
            <th scope="col">comment_content</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $comments->fetch()) { ?>
            <tr>
                <td><?= $result["comment_id"] ?></td>
                <td><?= $result["comment_author"] ?></td>
                <td><?= $result["comment_date"] ?></td>
                <td><?= $result["comment_content"] ?></td>
                <td><a href="?delete_comment=<?= $result["comment_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
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