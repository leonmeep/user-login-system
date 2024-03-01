<form>
    <label for="username">Username</label>
    <input type="text" id="username" name="user_name" />

    <label for="password">Password</label>
    <input type="password" id="password" name="password" />

    <input type="submit" />
</form>
<?php
require_once 'src/Models/UserLoginModel.php';
readonly class UserLogin {
    public string $name;
    protected string $password;

    public function __construct(string $name, string $password)
    {

        $this->name = $name;
        $this->password = $password;

    }
}