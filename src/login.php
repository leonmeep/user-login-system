<form method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" />

    <label for="password">Password</label>
    <input type="password" id="password" name="password" />

    <input type="submit" name="submit" value="Sign Up"/>
</form>

<?php

require_once 'src/Models/UserModel.php';
require_once 'src/Entities/UserLogin.php';

echo "<pre>";
var_dump($_POST);