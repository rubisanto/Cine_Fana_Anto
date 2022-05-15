<?php
// Changement dynamique du header
$title = "Crud Contacts";
$css = "crud.css";
$table = "Contacts";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">contact_id</th>
            <th scope="col">contact_first_name</th>
            <th scope="col">contact_last_name</th>
            <th scope="col">contact_type</th>
            <th scope="col">contact_content</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $contact->fetch()) { ?>
            <tr>
                <td><?= $result["contact_id"] ?></td>
                <td><?= $result["contact_first_name"] ?></td>
                <td><?= $result["contact_last_name"] ?></td>
                <td><?= $result["contact_type"] ?></td>
                <td><?= $result["contact_content"] ?></td>
                <td><a href="?delete_contact=<?= $result["contact_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
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