<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    include '../core/access_control.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET["country"])) {
            $country_id = $_GET["country"];
            $api = new database();
            $api->setQuery("Select * from movies where country_id = $country_id order by date_of_manufacture DESC");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("movies");
            print_r($metadata->getMetaData());
        } else {
            $api = new database();
            $api->setQuery("Select * from country");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("country");
            print_r($metadata->getMetaData());
        }
    }
