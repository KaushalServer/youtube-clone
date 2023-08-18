<!DOCTYPE html>
<html>

<head>

    <style>

        .container {
            /* display: flex; */
        }

        .video-container {
            width: 70%;
            margin-right: 20px;
        }

        .video-container iframe {
            width: 100%;
            height: 400px;
        }

        .sidebar {
            width: 20%;
            background-color: #f1f1f1;
            padding: 10px;
        }

        .related-videos {
            list-style: none;
            padding: 0;
        }

        .related-videos li {
            margin-bottom: 10px;
        }

        .main-content {
            width: 30%;
        }

        .comments {
            margin-top: 20px;
        }

        .comment {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .comment img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="video-container">
            <iframe src="../uploads/butterfly.mp4" frameborder="0"></iframe>
        </div>
        <div class="main-content">
            <h1>Video Title</h1>
            <p>Description of the video.</p>
            <div class="comments">
                <h2>Comments</h2>
                <div class="comment">
                    <img src="./assets/images/default.png" alt="User Avatar">
                    <p>User's comment.</p>
                </div>
                <!-- More comments can be added here -->
            </div>
        </div>
        <div class="sidebar">
            <h2>Related Videos</h2>
            <ul class="related-videos">
                <li><a href="#">Video 1</a></li>
                <li><a href="#">Video 2</a></li>
                <li><a href="#">Video 3</a></li>
            </ul>
        </div>
       
    </div>
</body>

</html>