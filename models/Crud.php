<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui accede au tables dans la bdd
class Crud extends Database
{
    public function showTable()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SHOW TABLES");
        return $request;
    }
    public function showArticles()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM articles");
        return $request;
    }
    public function showComments()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM comments");
        return $request;
    }
    public function showContacts()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM contacts");
        return $request;
    }
    public function showForum()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM forum");
        return $request;
    }
    public function showUsers()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM users");
        return $request;
    }
    public function sqlDeleteArticlesTable($delete)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("DELETE FROM articles WHERE article_id = ?");
        $request->execute(array($delete));
        return $request;
    }
    public function sqlDeleteCommentsTable($delete)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("DELETE FROM comments WHERE comment_id = ?");
        $request->execute(array($delete));
        return $request;
    }
    public function sqlDeleteContactsTable($delete)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("DELETE FROM contacts WHERE contact_id = ?");
        $request->execute(array($delete));
        return $request;
    }
    public function sqlDeleteForumTable($delete)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("DELETE FROM forum WHERE post_id = ?");
        $request->execute(array($delete));
        return $request;
    }
    public function sqlDeleteUsersTable($delete)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("DELETE FROM users WHERE `user_id` = ?");
        $request->execute(array($delete));
        return $request;
    }
}
