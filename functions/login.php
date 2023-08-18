<?php
session_start();

require "../connect.php";
// print_r($_POST);
extract($_POST);

// $username $password
// add uniquness
$sql  = "SELECT `id`,`username`, `password` FROM `users` WHERE `username` = ? AND `password` = ?";
$stmt = $con->prepare($sql);
$stmt->execute([$username, $password]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
// print_r($result);

if($result){
    $response = ['success' => true, 'message' => 'User loged in sucessfully'];
}
$_SESSION['user_id'] = $result['id'];
echo json_encode($response);

?>