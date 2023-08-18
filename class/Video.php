<?php
class Video
{
    private $video_data, $con;

    public function __construct($con, $user_id)
    {
        $this->con = $con;
        $sql = "SELECT * FROM videos WHERE `user_id` = $user_id";
        $stmt = $con->prepare($sql);
        $stmt->execute(); // it will give userwise all the
        $this->video_data = $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function totalVideosUploaded(){
        return $this->video_data;
    }

    public function getVideoTitle()
    {
        return $this->video_data['title'];
    }

    public function getVideoDescription()
    {
        return $this->video_data['description'];
    }

    public function getVideoUploadedOn()
    {
        return $this->video_data['uploadDate'];
    }

    public function getVideoUploadedBy()
    {

        $uploadUserId = $this->video_data['user_id'];

        $userName = new User($this->con, $uploadUserId);
        return $userName->getFullName();
    }
    public function getVideoBySearch()
    {
        //
    }

}

// $object = new Video
?>