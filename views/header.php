<?php

require "../connect.php";
require "../class/User.php";
$user_id = $_SESSION['user_id'];

$userObject = new User($con, $user_id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>

    <!-- favicon -->
    <link href="assets/images/video_logo.jpg" rel="icon">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    <style>
        #pageContainer {
            margin: 80px 0 0 0;
        }

        .imageProfile {
            width: 200px;
            height: 200px;
            border: 2px solid black;
            border-radius: 100px;
            /* background-color: deepskyblue; */
            overflow: hidden;
        }

        .imageProfile img {
            width: 100%;
            height: 100%;
        }

        .logoDiv {
            width: 100%;
            height: 200px;
            display: flex;
            justify-items: center;
            align-items: center;
            margin-bottom: 35px;
        }

        label {
            margin-bottom: 0rem;
        }

        .modal-title {
            word-spacing: 5px;
        }

        .form-control {
            margin-bottom: 15px;
            width: 500px;
        }

        .modal-content {
            width: 800px;
            border-radius: 25px;
            height: auto;
        }

        .form-group {
            padding-left: 120px;
        }

        .modal-footer {
            border-top: 0px;
        }

        .modal-header {
            border-bottom: 0px;
        }

        #modalImageDiv {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div id="pageContainer">
        <!-- main header -->
        <div id="mastHeadContainer">
            <!-- menu bar btn -->
            <button class="navShowHide">
                <img src="./assets/images/menu.png" height="20px" width="20px" alt="menu">
            </button>
            <!-- app logo  -->
            <a class='logoContainer' href="dashboard.php">
                <img src="./assets/images/VideoTubeLogo.png" title="VideoTube home" alt="site-logo">
            </a>
            <!--Search bar  -->
            <div class="searchBarContainer">
                <form action="" method="get">
                    <input type="text" class="searchBar" name="term" placeholder="Search" autofocus>
                    <button class="searchButton">
                        <img src="./assets/images/search.png" height="20px" width="10px" alt="menu">
                    </button>
                </form>
            </div>

            <div class="rightIcons">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <?php if ($_SESSION['user_id']) { ?>
                        <img src="<?= $userObject->getProfilePic() ?>" alt="Preview" height="30px" width="30px">
                    <?php } else { ?>
                        <img src="./assets/images/default.png" alt="Preview" height="30px" width="30px">
                    <?php } ?>
                </button>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:350px;">
                    <div class="modal-header" style="gap:10px;">
                        <img src="<?= $userObject->getProfilePic(); ?>" alt="Profile Image" width="45px" height="45px">
                        <div style="display: flex; flex-direction: column; margin-top:2px; gap: 5px;">
                            <p class="modal-title" id="exampleModalLabel"><?= $userObject->getFullName(); ?></p>
                            <p><?= $userObject->getEmail(); ?></p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 0rem;">
                        <ul
                            style="list-style: none; line-height:3; padding: 0px 20px; color: black; margin-bottom:0rem;">
                            <?php if ($userObject->getChannelCreated()) { ?>
                                <a href="profile_page.php">
                                    <li><i class="ri-user-follow-line"></i>Your Channel</li>
                                </a>
                            <?php }else{ ?>
                            <a href="#" data-toggle="modal" data-target="#createChannelModal">
                                <li><i class="ri-user-follow-line"></i> Create a Channel</li>
                            </a>
                            <?php }?>
                            <a href="#">
                                <li><i class="ri-vidicon-line"></i> Studio</li>
                            </a>
                            <a href="#">
                                <li><i class="ri-tv-2-line"></i> Switch Account</li>
                            </a>
                            <a href="logout.php">
                                <li><i class="ri-logout-box-r-line"></i> Sign Out</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li><i class="ri-currency-line"></i> Purchases and Memberships</li>
                            </a>
                            <a href="#">
                                <li><i class="ri-shield-user-line"></i> Your data</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Channel Modal -->
        <div class="modal fade" id="createChannelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">How you'll appear</h5>
                        <!-- <span>Username</span> -->
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="form-group" id="modalImageDiv">
                            <div class="logoDiv">
                                <div class="imageProfile">
                                    <img src="<?= $userObject->getProfilePic(); ?>" alt="" id="imageUpload">
                                </div>
                            </div>
                            <!-- <label for="channelImage">Channel Image:</label> -->
                            <input type="file" class="form-control-file" id="channelImage" name="channelImage">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name"
                                value="<?= $userObject->getFullName(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="handle">Handle</label>
                            <input type="text" class="form-control" id="handle" name="handle"
                                value="@<?= $userObject->getUsername(); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn" style="color: blue;">Create Channel</button>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>


<script>
    $('#createChannelModal').on('click', function () {
        $("#exampleModal").modal('hide');
    });

    let uploadButton = document.getElementById("channelImage");
    let chosenImage = document.getElementById("imageUpload");

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        reader.onload = () => {
            chosenImage.setAttribute("src", reader.result);
        }
    }
</script>