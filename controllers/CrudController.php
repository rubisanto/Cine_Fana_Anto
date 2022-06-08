<?php

require_once "models/Crud.php";

function getCrud()
{
    $crud = new Crud();
    $tables = $crud->showTable();
    require_once "views/crudView.php";
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

function getUsersTable()
{
    $crud = new Crud();
    $users = $crud->showUsers();
    require_once "views/crudUsersView.php";
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

function deleteUsersTable($delete)
{
    $crud = new Crud();
    $delete = $crud->sqlDeleteUsersTable($delete);
    header("Location: index.php?table=users");
}
