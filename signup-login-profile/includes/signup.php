<?php

if(isset($_POST[submit])){
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    include "../classes/dbh.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.php";

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();
    header("Location: ../index.php?error=none");
}