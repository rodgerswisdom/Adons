<?php
    require "config.php";

    function get_all_ads(){
        $query = "SELECT * FROM ads_table";
        $result = mysqli_query($connection, $query);

        $connection.close();
        return $result;
    }

    function post_ad($title, $description, $image_url, $video_url){
        $query = "INSERT INTO ads_table(title, description, image_url, video_url) VALUES($title, $description,$image_url, $video_url)";
        $result = mysqli_query($connection, $query);

        $connection.close();
        return $result;
    }

    function get_one_id($ad_id){
        $query = "SELECT * FROM ads_table WHERE ads_id = $ad_id";
        $result = mysqli_query($conncetion, $query);

        $connection.close();
        return $result;

    }

?>
