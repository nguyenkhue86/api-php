<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    

    if(isset($_GET["season_id"])) {
        $season_id = $_GET["season_id"];
        $api = new database();
        $api->setQuery("SELECT * FROM `movie_episode` WHERE season_id = $season_id");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movie_episode");
        print_r($metadata->getMetaData());
    }

    
?>
