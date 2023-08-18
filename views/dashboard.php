<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    session_destroy();
    exit(header("Location: login.php"));
}

// $user_id = $_SESSION['user_id'];
// print_r($user_id);
require "../connect.php";
require "header.php";

// print_r($_SESSION['user_id']);
// die;
?>

<style>
    .row {
        max-width: unset !important;
        display: inline-flex;
        gap: 12px;
        margin-left: 5px;
    }

    .col {
        width: 25%;
        height: 330px;
        /* margin-left: 2px; */
    }

    .video {
        width: 100%;
        height: 60%;
        /* border-radius: 20px !important; */
    }

    .title {
        display: flex;
        /* align-items: center; */
        gap: 5px;
    }

    .title p {
        margin: 0 !important;
    }

    .video-container {
        display: flex;
    }

    i {
        margin-right: 15px;
    }
</style>

<body>
    <div style="width:100%; height: 100vh; display: flex;">
        <div style="width: 14%">
            <?php require "sidebar.php"; ?>
        </div>
        <div style="width: 90%; height: 100vh; overflow: scroll;" >
            <?php require "videos.php"; ?>
        </div>

    </div>

</body>

<!-- <script>
    $(document).ready(function () {
        // videoLoading();
    });

    function videoLoading() {

        var value = "something";
        console.log(value);
        $.ajax({
            url: "../functions/allVideos.php",
            type: "POST",
            data: value,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    // displayingAllDetails(data.data);

                } else {

                }
            },
            error: function () {
                console.log("Failed to fetch videos");
            }
        });
    }

    function displayingAllDetails(data) {
        // console.log(data);
        // for(var i =0;i<data.length; i++){

        // var videoElement = `
        //         <div class="row">
        //             <div class="col">
        //                 <div class="video">
        //                     <video src="${data.filePath}" controls width="300px" height="200px"></video>
        //                 </div>
        //                 <div class="title">
        //                     <div class="icon">
        //                         <img src="./assets/images/default.png" alt="ProfilePic" width="40px" height="40px">
        //                     </div>
        //                     <p>${data.title}</p>
        //                     <p>
        //                     ? views |
        //                     </p>
        //                 </div>
        //             </div>
        //         </div>
        //      `;

        // Append the videoElement to the videoContainer
        // $("#videoContainer").append(videoElement);
        // }

    }

</script> -->