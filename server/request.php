<?php
session_start();
include("../common/db.php");
print_r($_POST);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];

$user = $conection->prepare("INSERT INTO `user` (`username`, `email`, `password`, `address`) VALUES ('$username', '$email', '$password', '$address')");
$result = $user->execute();
if ($result) {
$_SESSION["user"]=["username"=>$username, "email"=>$email,];
header("Location: /php-kamran/php");
} else {
    echo "user is not registered";
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conection->query($query);
    echo $result->num_rows;
}
?>



?>
