<?php
require "../connect.php";
require "../class/Video.php";

$user_id = $_SESSION['user_id'];

function getVideoCount()
{
    global $con, $user_id;
    $sql = "SELECT COUNT(user_id) as vcount FROM videos WHERE user_id = $user_id";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['vcount'];
}

function getProfilePic(){
    
}

function getAllVideos(){
    global $con, $user_id;
    $sql = "SELECT v.title, v.description, v.uploadDate, v.filePath, u.profilePic FROM videos v INNER JOIN users u WHERE v.user_id = u.id ORDER BY RAND();";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $result;
}

// function videoStorage(){
//     $storageLoc = $_ENV['VIDEO_STORAGE'];
//     return $storageLoc;
// }

function allVideosByUser(){
    global $con, $user_id;
    $videoSql = "SELECT `title`, `filePath` , `uploadDate` FROM videos WHERE `user_id` = $user_id";
    $videoStmt = $con->prepare($videoSql);
    $videoStmt->execute();
    $videoResult = $videoStmt->fetchAll(PDO::FETCH_ASSOC);
    return $videoResult;
}

function timeAgo(){
    // display time of video in time ago format
}

?>