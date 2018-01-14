<?php
    require "database.php";

    var_dump($_POST);

    //push button check
    if(isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $hobby = $_POST['hobby'];
        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);
        $birth_date = $_POST['birth_date'];
        $credit_card = $_POST['credit_card'];
        $about = $_POST['about'];
        $categories = $_POST['categories'];

        if(!empty($first_name) && !empty($user_name) && !empty($password)) {
            $query = "SELECT * FROM `users` WHERE user_name ='$user_name'";
            $data = mysqli_query($mysqli, $query);
            if(mysqli_num_rows($data) == 0){
                 $string_ins = $mysqli->query("INSERT INTO 
                       `users` (`id`, `first_name`, `last_name`, `age`, `sex`, `hobby`, `user_name`, `password`, `birth_date`, `credit_card`, `about`, `categories`)
                        VALUES (' ', '$first_name', '$last_name', '$age', '$sex', '$hobby', '$user_name','$password', '$birth_date', '$credit_card', '$about', '$categories')");

                echo 'Registration completed successfully';
                mysqli_close($mysqli);
                exit();
            }
            else {
                echo 'Login already exists. Select another login';
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP registration</title>
</head>
<body>
<div>
    <form name="registration-form" method="post">
        <ul>
            <li>
                <label for="first_name">Enter your name:</label>
                <input type="text" name="first_name" id="first_name">
            </li>
            <li>
                <label for="last_name">Enter your last name:</label>
                <input type="text" name="last_name" id="last_name">
            </li>
            <li>
                <label for="age">Eter you age:</label>
                <input type="number" name="user_age" id="age" max="100">
            </li>
            <li>
                <label>Indicate your gender:</label>
                <input type="text" name="sex" id="sex">
            </li>
            <li>
                <p>What is your hobby?</p>
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="football">
                            to play football
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="watch">
                            watch films
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="travel">
                            travel
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="sing">
                            sing
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="dance">
                            dance
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="handmade">
                            do handmade products
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="fishing">
                            go fishing
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="studying">
                            studying
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="pictures">
                            take pictures
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobby" value="draw">
                            draw
                        </label>
                    </li>
                </ul>
            </li>
            <li>
                <label for="user_name">Write a username:</label>
                <input type="text" id="user_name">
            </li>
            <li>
                <label for="password">Choose a password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="birth_date">Enter your date of birth:</label>
                <input type="date" name="birth_date" id="birth_date">
            </li>
            <li>
                <label for="credit_curd">Enter your credit card number:</label>
                <input type="text" name="credit_card" id="credit_card" placeholder="0000-0000-0000-0000">
            </li>
            <li>
                <p><label for="about">Tell us a little about yourself:</label></p>
                <textarea name="about" id="about" rows="6" cols="40"></textarea>
            </li>
            <li>
                <label for="categories">What are you most interested in?</label>
                <select name="categories" id="categories">
                    <option value="cooking">Cooking</option>
                    <option value="fishing">Fishing</option>
                    <option value="knowledge">Knowledge</option>
                    <option value="art">Art</option>
                    <option value="beauty">Beauty</option>
                    <option value="gardening">Gardening</option>
                    <option value="design">Design</option>
                    <option value="sport">Sport</option>
                </select>
            </li>
            <li>
                <input type="submit" id="submit" name="check_in" value="Register">
            </li>
        </ul>

    </form>
</div>
</body>
</html>