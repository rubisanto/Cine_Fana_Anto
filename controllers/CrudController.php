<?php

require_once "models/Crud.php";

function getCrud()
{
    $crud = new Crud();
    $tables = $crud->showTable();
    require_once "views/crudView.php";
}

function getAdminsTable()
{
    $crud = new Crud();
    $admins = $crud->showAdmins();
    require_once "views/crudAdminsView.php";
}

function getArticlesTable()
{
    $crud = new Crud();
    $articles = $crud->showArticles();
    require_once "views/crudArticlesView.php";
}

function getCommentsTable()
{
    $crud = new Crud();
    $comments = $crud->showComments();
    require_once "views/crudCommentsView.php";
}

function getContactsTable()
{
    $crud = new Crud();
    $contact = $crud->showContacts();
    require_once "views/crudContactsView.php";
}

function getForumTable()
{
    $crud = new Crud();
    $forum = $crud->showForum();
    require_once "views/crudForumView.php";
}

function getProductsTable()
{
    $crud = new Crud();
    $products = $crud->showProducts();
    require_once "views/crudProductsView.php";
}

function getUsersTable()
{
    $crud = new Crud();
    $users = $crud->showUsers();
    require_once "views/crudUsersView.php";
}

function deleteAdminsTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteAdminsTable($delete);
    header("Location: index.php?table=admins");
}

function deleteArticlesTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteArticlesTable($delete);
    header("Location: index.php?table=articles");
}

function deleteCommentsTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteCommentsTable($delete);
    header("Location: index.php?table=comments");
}

function deleteContactsTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteContactsTable($delete);
    header("Location: index.php?table=contacts");
}

function deleteForumTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteForumTable($delete);
    header("Location: index.php?table=forum");
}

function deleteProductsTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteProductsTable($delete);
    header("Location: index.php?table=products");
}

function deleteUsersTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteUsersTable($delete);
    header("Location: index.php?table=users");
}
