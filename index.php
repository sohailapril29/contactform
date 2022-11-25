<?php

try {
    $db = new mysqli("localhost", "root", "", "sohaildata");
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $is_insert = $db->query("INSERT INTO `sohaildatatable`(`name`, `email`, `msg`) VALUES ('$name','$email','$msg')");

    if($is_insert == true) {
        echo "Thankyou For Submitting";
        exit();
    }

}

?>