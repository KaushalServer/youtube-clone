<?php
require "header.php";
?>

<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="./assets/images/VideoTubeLogo.png" title="VideoTube home" alt="site-logo">
                <h3>Sign In</h3>
                <span>to continue to VideoTube</span>
            </div>
            <div class="loginForm">
                <form action="" method="POST" id="loginForm">
                    <!-- displaying error message if any -->
                    <?php
                    //  echo $account->getError(Constants::$UserLoginFailed);
                    ?>
                    <input type="text" name="username" placeholder="User name" autocomplete='off'>


                    <input type="password" name="password" placeholder="password" autocomplete='off'>
                    <input type="submit" class="btn btn-primary" name="submitButton" value="SUBMIT">
                </form>
            </div>
            <a href="signup.php" class="loginMessage">Need an account? SignUp here!</a>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
<script>
    $("#loginForm").on('submit', function(e){
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            url: '../functions/login.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(data){
                if(data.success){
                    window.location.href = "dashboard.php";
                }else{
                    toastr.error('User does not exist');
                }
            },
            error: function(){}
        });
    });
</script>    