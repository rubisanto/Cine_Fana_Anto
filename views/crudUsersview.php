<?php
if ($_SESSION["admin"] == false) {
    header("Location: index.php");
}
// Changement dynamique du header
$title = "Crud Users";
$css = "crud.css";
$table = "Users";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">user_id</th>
            <th scope="col">user_role</th>
            <th scope="col">user_first_name</th>
            <th scope="col">user_last_name</th>
            <th scope="col">user_mail</th>
            <th scope="col">user_adress</th>
            <th scope="col">user_date_of_birth</th>
            <th scope="col">user_pseudo</th>
            <th scope="col">user_password</th>
            <th scope="col">Modif</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($result = $users->fetch()) { ?>
            <tr>
                <td><?= $result["user_id"] ?></td>
                <td><?= $result["user_role"] ?></td>
                <td><?= $result["user_first_name"] ?></td>
                <td><?= $result["user_last_name"] ?></td>
                <td><?= $result["user_mail"] ?></td>
                <td><?= $result["user_adress"] ?></td>
                <td><?= $result["user_date_of_birth"] ?></td>
                <td><?= $result["user_pseudo"] ?></td>
                <td><?= $result["user_password"] ?></td>
                <td><a href="?delete_user=<?= $result["user_id"] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
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