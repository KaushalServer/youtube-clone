<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .sidebar {
            /* width: 10%; */
            height: 100vh;
            overflow: hidden;
        }
        .sidebar:hover{
            overflow: scroll;
        }
        /* .sidebar::-webkit-scrollbar{
            display: none;
            border-radius: 10px;
        } */

        body {
            margin: 0px;
            overflow: hidden;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: black;
        }

        li:hover {
            background: lightgrey;
            border-radius: 10px;
        }

        li {
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul style="list-style: none; line-height:3; padding: 0px 20px; color: black">
            <a href="dashboard.php">
                <li><i class="ri-home-line"></i> Home</li>
            </a>
            <a href="../shorts/">
                <li><i class="ri-vidicon-line"></i> Shorts</li>
            </a>
            <a href="#">
                <li><i class="ri-tv-2-line"></i> Subscription</li>
            </a>
            <hr>
            <a href="#">
                <li><i class="ri-folder-history-line"></i> Library</li>
            </a>
            <a href="#">
                <li><i class="ri-history-line"></i> History</li>
            </a>
            <a href="#">
                <li><i class="ri-vidicon-line"></i> Your videos</li>
            </a>
            <a href="#">
                <li><i class="ri-timer-2-line"></i> Watch later</li>
            </a>
            <a href="#">
                <li><i class="ri-thumb-up-line"></i> Liked videos</li>
            </a>
            <hr>
            <a href="#">
                <li><i class="ri-fire-line"></i> Trending</li>
            </a>
            <a href="#">
                <li><i class="ri-shopping-bag-line"></i> Shopping</li>
            </a>
            <a href="#">
                <li><i class="ri-music-2-line"></i> Music</li>
            </a>
            <a href="#">
                <li><i class="ri-clapperboard-line"></i> Movies</li>
            </a>
            <a href="#">
                <li><i class="ri-rfid-line"></i> Live</li>
            </a>
            <a href="#">
                <li><i class="ri-gamepad-line"></i> Gaming</li>
            </a>
            <a href="#">
                <li><i class="ri-newspaper-line"></i> News</li>
            </a>
            <a href="#">
                <li><i class="ri-trophy-line"></i> Sports</li>
            </a>
            <a href="#">
                <li><i class="ri-lightbulb-line"></i> Learning</li>
            </a>
            <a href="#">
                <li><i class="ri-shirt-line"></i> Fashion & Beauty</li>
            </a>
        </ul>
    </div>
</body>

</html>