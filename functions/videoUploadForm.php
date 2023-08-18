<?php
session_start();
$user_id = $_SESSION['user_id'];
require "../connect.php";
// require "common_functions.php";
require "../class/User.php";

$userObject = new User($con, $user_id);
$userName = $userObject->getUsername();
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // no validation for short videos.
    $videoFilename = $_FILES['file']['name'];
    $videoType = $_FILES['file']['type'];
    $videoTempname = $_FILES['file']['tmp_name'];
    $videoSize = $_FILES['file']['size'];
    $ext = strtolower(pathinfo($videoFilename, PATHINFO_EXTENSION));

    $typeArray = ['video/mp4','video/mkv','video/ogg','video/ogv','video/mpeg4','video/webm','video/mov'];
    if(!in_array($videoType, $typeArray)){
        echo json_encode(['success' => false, 'message' => 'Not a video file type.']);
        return;
    }

    $videoNewName = "video=" . bin2hex(random_bytes(5));

    $storageDir = "../uploads/" . "$userName/";

    if(!is_dir($storageDir)){
        mkdir($storageDir);
    }

    $fileLocation = $storageDir . $videoNewName .'.'.$ext;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $fileLocation)) {

        $sql = "INSERT INTO `videos` (`title`, `description`, `filePath`,`user_id`) VALUES (?,?,?,?)";
        $stmt = $con->prepare($sql);
        $stmt->execute([$title, $description, $fileLocation, $user_id]);
        
    }
    echo json_encode(['success' => true, 'message' => 'File Uploaded Successfully']);

}

?>