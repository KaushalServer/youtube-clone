<?php
require "header.php";
?>

<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" /> 

<div class="signInContainer">
    <div class="column">
        <div class="header">
            <img src="./assets/images/VideoTubeLogo.png" title="VideoTube home"
                alt="site-logo">
            <h3>Sign Up</h3>
            <span>to continue to VideoTube</span>
        </div>
        <div class="loginForm">
            <form method="POST" action="javascript:void(0);" id="signUpForm">
                <!-- displaying error message if any -->
                <?php
                //  echo $account->getError(Constants::$firstNameCharacter);
                ?>
                <input type="text" name="firstName" placeholder="first name" autocomplete='off'>


                <!-- displaying error message if any -->
                <?php
                //  echo $account->getError(Constants::$lastNameCharacter);
                ?>
                <input type="text" name="lastName" placeholder="last name" autocomplete='off'>

                <!-- displaying error message if any -->
                <?php
                //  echo $account->getError(Constants::$usernameCharacter);
                //  echo $account->getError(Constants::$usernameTaken); 
                ?>
                <input type="text" name="username" placeholder="User name" autocomplete='off'>

                <!-- displaying error message if any -->
                <?php
                //  echo $account->getError(Constants::$emailDoNotMatch);
                //  echo $account->getError(Constants::$emailTaken); 
                ?>
                <input type="email" name="email" placeholder="email" autocomplete='off'>

                <!-- displaying error message if any -->
                <?php
                //  echo $account->getError(Constants::$passwordDoNotMatch);
                //  echo $account->getError(Constants::$passwordNotAlphaNumeric);
                //  echo $account->getError(Constants::$passwordLength);
                ?>
                <input type="password" name="password" placeholder="password" autocomplete='off'>
                <input type="password" name="password2" placeholder="password" autocomplete='off'>

                <input type="submit" class="btn btn-primary" name="submitButton" value="SUBMIT">

            </form>
        </div>
        <a href="login.php" class="loginMessage">Already have an account? Sign in here!</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- Toastr CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map"></script>    

<script>
    $("#signUpForm").on('submit', function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '../functions/signUp.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(data){
                console.log(data);
                if(data.success){
                    toastr.success(data.message);
                    window.location.href = "login.php";
                }else{
                    // toastr.warning();
                }
            },
            error: function(){}
        });
    });
</script>