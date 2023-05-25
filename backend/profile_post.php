<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'class_eighteen');


if (isset($_POST['name_change_btn'])) {
    $name = $_POST['profile_name'];
   $id = $_SESSION['s_id'];
   $name_change_query = "UPDATE users SET name = '$name' WHERE id = '$id';";
   mysqli_query($db_connect, $name_change_query);
   $_SESSION['s_name']=$name;
   header('location: profile.php');
}
if (isset($_POST['name_change_btn'])) {
    $email = $_POST['profile_email'];
   $id = $_SESSION['s_id'];
   $email_change_query = "UPDATE users SET email = '$email' WHERE id = '$id';";
   mysqli_query($db_connect, $email_change_query);
   $_SESSION['s_email']=$email;
   header('location: profile.php');
}



?>