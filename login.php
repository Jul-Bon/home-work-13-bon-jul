<?php
require "database.php";

if (isset($_POST['submit'])) {
    $user_user_name = $_POST['user_name'];
    $user_password = md5($_POST['password']);

    if (!empty($user_user_name) && !empty($user_password)) {
        $guery = "SELECT `id`, `user_name` FROM `users` WHERE
                      user_name='$user_user_name' AND password='md5($user_password')";
        $data = mysqli_query($mysqli, $guery);
        if (mysqli_num_rows($data) == 1){
            $row = mysqli_fetch_assoc($data);
            echo 'You have successfully logged in';
        } else {
            echo 'Something went wrong';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf - 8">
    <title>PHP registration</title>
</head>
<body>
<div>
    <form action="#" name="login-form" method="post">
        <ul>
            <li>
                <label for="login"> Enter your username:</label>
                <input type="text" name="user_name" id="login">
            </li>
            <li>
                <label for="password"> Enter your password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit"> Sign in</button>
            </li>
        </ul>
    </form>
</div>
</body>
</html>