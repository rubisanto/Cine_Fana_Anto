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
    public function showAdmins()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM admins");
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
    public function showProducts()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM products");
        return $request;
    }
    public function showUsers()
    {
        $database = $this->connectionDatabase();
        $request = $database->query("SELECT * FROM users");
        return $request;
    }
}
