<?php
    require "../db/ads_model.php";

    function get_ads(){
        $ads = get_all_ads();
        return $ads;

    }


?>
