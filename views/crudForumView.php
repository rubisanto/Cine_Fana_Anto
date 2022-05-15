<?php
// Changement dynamique du header
$title = "Crud Forum";
$css = "crud.css";
$table = "Forum";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">post_id</th>
            <th scope="col">post_title</th>
            <th scope="col">post_date</th>
            <th scope="col">post_author</th>
            <th scope="col">post_content</th>
            <th scope="col">post_type</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $forum->fetch()) { ?>
            <tr>
                <td><?= $result["post_id"] ?></td>
                <td><?= $result["post_title"] ?></td>
                <td><?= $result["post_date"] ?></td>
                <td><?= $result["post_author"] ?></td>
                <td><?= $result["post_content"] ?></td>
                <td><?= $result["post_type"] ?></td>
                <td><a href="?delete_forum=<?= $result["post_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
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