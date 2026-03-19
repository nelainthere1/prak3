<?php

$email = $_POST['email'];
$password = $_POST['password'];

$data = file("data.txt");

foreach($data as $user){

    $pecah = explode("|", $user);

    if($pecah[1] == $email && $pecah[2] == $password){
        header("Location: dashboard.php");
        exit();
    }

}

echo "Login berhasil.";

?>