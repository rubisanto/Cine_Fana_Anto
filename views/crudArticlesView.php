<?php
// Changement dynamique du header
$title = "Crud Articles";
$css = "crud.css";
$table = "Articles";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">article_id</th>
            <th scope="col">article_title</th>
            <th scope="col">article_date</th>
            <th scope="col">article_author</th>
            <th scope="col">article_content</th>
            <th scope="col">article_type</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $articles->fetch()) { ?>
            <tr>
                <td><?= $result["article_id"] ?></td>
                <td><?= $result["article_title"] ?></td>
                <td><?= $result["article_date"] ?></td>
                <td><?= $result["article_author"] ?></td>
                <td><?= $result["article_content"] ?></td>
                <td><?= $result["article_type"] ?></td>
                <td><a href="?delete_article=<?= $result["article_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
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