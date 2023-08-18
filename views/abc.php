<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .header {
            border: 2px solid black;
        }
        .content + .sidebar, .main-content{
            border: 2px solid black;
        }
        a{
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: black;
        }
        body{
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header" style="background-color: #fff;
    margin-bottom: 15px; position: fixed; padding: 12px; z-index:999;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis maxime rem, at, doloribus et animi magni
        necessitatibus vel earum ea, nostrum quis sint quam quas accusamus nesciunt unde dolorem omnis quae? Voluptatem
        ratione itaque id cupiditate deserunt temporibus, corporis libero ullam vitae maxime suscipit, voluptate
        inventore laudantium nihil non ut?
    </div>
    <div class="content" style="display: flex; gap:20px;">
        <div class="sidebar" style="width:12%; border:2px solid black; height:auto;">
        <ul style="list-style: none; line-height:3; padding: 0px 21px; color: black; margin-top: 60px;">
            <a href="dashboard.php">
                <li><i class="fa fa-car"></i>  Home</li>
            </a>
            <a href="#">
                <li><i class="fa fa-paper-plane"></i> Shorts</li>
            </a>
            <a href="#">
                <li><i class="fa fa-home"></i> Subs</li>
            </a>
            <hr>
            <a href="#">
                <li><i class="fa fa-music"></i> Library</li>
            </a>
            <a href="#">
                <li><i class="fa fa-camera"></i> History</li>
            </a>
            <a href="#">
                <li><i class="fa fa-heart"></i> Your videos</li>
            </a>
            <a href="#">
                <li><i class="fa fa-user"></i> Watch later</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> Liked videos</li>
            </a>
            <hr>
            <a href="#">
                <li><i class="fa fa-music"></i> Trending</li>
            </a>
            <a href="#">
                <li><i class="fa fa-camera"></i> Shopping</li>
            </a>
            <a href="#">
                <li><i class="fa fa-heart"></i> Music</li>
            </a>
            <a href="#">
                <li><i class="fa fa-user"></i> Movies</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> Live</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> Gaming</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> News</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> Sports</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> Learning</li>
            </a>
            <a href="#">
                <li><i class="fa fa-trash"></i> Fashion & Beauty</li>
            </a>
        </ul>
        </div>

        <div class="main-content" style="height=auto;">

        </div>
    </div>

    <!-- ./views/header.php -->
</body>

</html>