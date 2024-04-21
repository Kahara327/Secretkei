<?php
    $flag = 'ini_fek_flag_untuk_testing';
    $plainsecret = 'hashcatdDqPeYghreF1';
    $secret = md5($plainsecret);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $input = $_POST["input"];
        $answer = md5($input);
        if ($answer == $secret && $answer !== $secret) {
            echo "<script>alert('Password Correct')</script>";
            echo "$flag";
        } else {
            echo "Wrong Password, Pls Try Again";
        }
    }
?>
