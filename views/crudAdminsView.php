<?php
// Changement dynamique du header
$title = "Crud Admins";
$css = "crud.css";
$table = "Admins";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">admin_id</th>
            <th scope="col">admin_pseudo</th>
            <th scope="col">admin_mail</th>
            <th scope="col">admin_adress</th>
            <th scope="col">admin_date_of_birth</th>
            <th scope="col">admin_sex</th>
            <th scope="col">admin_first_name</th>
            <th scope="col">admin_last_name</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $admins->fetch()) { ?>
            <tr>
                <td><?= $result["admin_id"] ?></td>
                <td><?= $result["admin_pseudo"] ?></td>
                <td><?= $result["admin_mail"] ?></td>
                <td><?= $result["admin_adress"] ?></td>
                <td><?= $result["admin_date_of_birth"] ?></td>
                <td><?= $result["admin_sex"] ?></td>
                <td><?= $result["admin_first_name"] ?></td>
                <td><?= $result["admin_last_name"] ?></td>
                <td><a href="?delete_admin=<?= $result["admin_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
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