<?php

session_start();
require "header.php";
require "../connect.php";
require "../functions/common_functions.php";

$videoData = allVideosByUser();

$user_id = $_SESSION['user_id'];

$vcount = getVideoCount();

?>
<style>

    body {
        padding-left: 250px;
        background-color: #fff;
    }

    .row {
        margin-left: 5px;
    }
    .col{
        padding-left: 0;
        padding-right: 5px;
    }

    .video {
        width: 100%;
        height: 60%;
        /* border-radius: 20px !important; */
    }
    .userProfile {
        display: inline-flex;
        margin-left: 10px;
    }

    .profileDetails {
        display: block;
        margin: 25px;

    }

    .detailsContainer {
        display: inline-flex;
        margin-left: 50px;
        gap: 40px;
    }

    a {
        color: black
    }

    a:hover {
        color: black
    }

    .uploadVideo {
        padding: 40px;
    }

    .uploadVideo button {
        font-size: 15px;
        border-radius: 20px;
    }
    .videoByUser{
        display: flex;
        gap: 15px;
    }

</style>

<body>
    <div class="mainContentContainer">
        <div class="userInfo">
            <div class="userProfile">
                <img src="<?= $userObject->getProfilePic(); ?>" height="150px" width="150px" alt="No Preview">
                <div class="profileDetails">
                    <span>(Name :- <?= $userObject->getFullName(); ?>)</span>
                    <div>
                        <span>(Username :- @<?= $userObject->getUsername() ?>)</span>
                        <span>Subscribers (Value)</span>
                        <span>(Number Of Videos :-
                            <?= $vcount ?>)
                        </span>
                    </div>
                    <div>
                        <span>More about this Channel (About)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="detailsContainer">
            <a href="home.php">
                <div>
                    HOME
                </div>
            </a>
            <a href="home.php">
                <div>
                    PLAYLISTS
                </div>
            </a>
            <a href="home.php">
                <div>
                    CHANNELS
                </div>
            </a>
            <a href="home.php">
                <div>
                    ABOUT
                </div>
            </a>
        </div>
        <div class="videoByUser">
            <?php foreach ($videoData as $video) { ?>
                <a href="#">
                    <div class="row">
                        <div class="col">
                            <div class="video">
                                <video src="<?= $video['filePath'] ?>" controls width="300px" height="180px"
                                    style="border-radius: 16px;"></video>
                                <div class="title">
                                    <div>
                                        <p>
                                            <?= $video['title'] ?> <!-- Video class -->
                                        </p>
                                        <span>
                                            ? views |
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>

        <div class="uploadVideo">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoUploadModal">
                Upload Video
            </button>

            <!-- Video Upload Modal -->
            <div class="modal fade" id="videoUploadModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Video Upload</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="" enctype='multipart/form-data' id="videoSubForm">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Title of the video">
                                <label for="desc">Description</label>
                                <input type="text" name="description" id="desc" class="form-control"
                                    placeholder="About video"><br>
                                <input type="file" name="file">
                                <br><br>
                                <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script>

    $("#videoSubForm").on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        // console.log(formData);
        $.ajax({
            url: '../functions/videoUploadForm.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) { // video validation and inserting in DB
                // handling success
                if (data.success) {
                    $("#videoUploadModal").modal('hide');
                    toastr.success(data.message);
                } else {

                }
            },
            error: function () {
                // handling errors
            }
        });
    });

</script>