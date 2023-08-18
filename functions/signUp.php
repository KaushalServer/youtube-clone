<?php
require "../connect.php";

extract($_POST);

$profilePic = "../views/assets/images/default.png";  // change it to initials like "KP";
$sql = "INSERT INTO users (`firstName`,`lastName`,`username`,`email`,`password`,`profilePic`) VALUES(?,?,?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->execute([$firstName,$lastName,$username,$email,$password,$profilePic]);

$response = ['success' => true, 'message' => 'User created successfully'];

echo json_encode($response);
?>