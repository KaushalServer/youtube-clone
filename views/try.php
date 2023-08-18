<?php
// require "header.php";
session_start();
require "../class/User.php";
require "../database/connect.php";
$user_id = $_SESSION['user_id'];
$userObject = new User($con, $user_id);
// print_r($userObject);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>


<style>
  .imageProfile {
    width: 200px;
    height: 200px;
    border: 2px solid black;
    border-radius: 100px;
    /* background-color: deepskyblue; */
    overflow: hidden;
  }

  img {
    width: 100%;
    height: 100%;
  }
  .logoDiv{
    width: 100%;
    height: 200px;
    display: flex;
    justify-items: center;
    align-items: center ;
    margin-bottom: 35px;
  }

  label {
    margin-bottom: 0rem;
  }

  .modal-body {
    margin-top: 45px;
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
    height: 800px;
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
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createChannelModal">
  Launch demo modal
</button>

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
              <img src="<?=$userObject->getProfilePic();?>" alt="" id="imageUpload">
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
          <input type="text" class="form-control" id="handle" name="handle" value="@<?= $userObject->getUsername(); ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Cancel</button>
        <button type="button" class="btn" style="color: blue;">Create Channel</button>
      </div>
    </div>
  </div>
</div>

<script>
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