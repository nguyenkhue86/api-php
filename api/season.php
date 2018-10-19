<?php
    require_once '../core/database.php';
    require_once '../core/api_v2.php';
    

    if(isset($_GET["movie_id"])) {
        $movie_id = $_GET["movie_id"];
        $api = new database();
        $api->setQuery("SELECT ms.* FROM `movie_season` ms WHERE ms.movie_id = $movie_id order by ms.date ASC");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movie_season");
        print_r($metadata->getMetaData());
    }
    elseif(isset($_GET["id"])) {
        $id = $_GET["id"];
        $api = new database();
        $api->setQuery("SELECT * FROM `movie_season` WHERE id = $id");
        $data=$api->loadRow();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(1);
        $metadata->setType("movie_season");
        print_r($metadata->getMetaData());
    }

    
?>
