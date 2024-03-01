<?php

require_once 'src/Entities/UserLogin.php';
//require_once 'src/login.php';
class UserModel
{
    protected string $username;
    protected string $password;


    private PDO $db;

    public function __construct(PDO $db, string $username, string $password)
    {
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
    }
    private function connectToDb(): PDO {
        $db = new PDO('mysql:host=db; dbname=exercise', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;
    }






}