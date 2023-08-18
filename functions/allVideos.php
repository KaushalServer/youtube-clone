<?php
require "../connect.php";

// Sending all the videos 
$sql = "SELECT `title`,`filePath`, `uploadDate` FROM videos";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
// die;
$data = [];
foreach ($result as $video) {
    $data = $video;

}

$response = ['success' => true, 'data' => $data]; // only success case i guess to make a separate response and then just call it from everywhere.
// print_r($data);
echo json_encode($response);

// die;
?>