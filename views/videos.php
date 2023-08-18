<?php

require "../functions/common_functions.php";
$result = getAllVideos();

?>
<style>
    .video{
        width: 300px;
    }
    p{
        text-overflow: ellipsis;
    }
    a:hover{
        border-radius: 0px;
    }
</style>
<?php foreach ($result as $video) { ?>
    <a href="#">
        <div class="row">
            <div class="col">
                <div class="video">
                    <video src="<?= $video['filePath'] ?>" controls width="300px" height="180px"
                        style="border-radius: 16px;"></video>
                    <div class="title">
                        <div class="icon">
                            <img src="<?= $video['profilePic'] ?>" alt="ProfilePic" width="40px" height="40px"
                                style="border-radius: 20px;">
                        </div>
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