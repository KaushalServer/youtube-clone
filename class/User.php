<?php
class User
{
    private $user_data;

    public function __construct($con,$user_id)
    {
        $sql = "SELECT * FROM users where `id` = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$user_id]);

        $this->user_data = $stmt->fetch(PDO::FETCH_ASSOC); // now user_data has the required data.
    }

    public function getFirstName()
    {
        return $this->user_data['firstName'];
    }

    public function getLastName()
    {
        return $this->user_data['lastName'];
    }

    public function getUsername()
    {
        return $this->user_data['username'];
    }
    public function getEmail()
    {
        return $this->user_data['email'];
    }

    public function getFullName()
    {
        // print_r($this->user_data['firstName'] . " " . $this->user_data['lastName']);
        return ($this->user_data['firstName'] . " " . $this->user_data['lastName']);
    }

    public function getProfilePic()
    {
        return $this->user_data['profilePic'];
    }

    public function getSubsCount()
    { // separate table required hai???
        // for getting the subscriber count
    }
    public function getChannelCreated(){ // Users table mein column is_channel_created { 0 => not created, 1 => created }
        return $this->user_data['is_channel'];
    }
}

?>