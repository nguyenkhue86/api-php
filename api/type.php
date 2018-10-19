<?php
    require_once '../core/database.php';
    require_once '../core/api_v2.php';
    

    if(isset($_GET["type"]))
    {
        $type = $_GET["type"];
        $api = new database();
        $api->setQuery("Select * from movies where movie_type=$type order by date_of_manufacture DESC");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movies");
        print_r($metadata->getMetaData());
    } else {
        echo 'Request param not exist!';
    }

    
?>
