<?php
require_once 'src/Models/UserModel.php';
readonly class UserLogin {
    public string $name;
    protected string $password;

    public function __construct(string $name, string $password)
    {

        $this->name = $name;
        $this->password = $password;

    }
}