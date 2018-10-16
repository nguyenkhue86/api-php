<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    include '../core/access_control.php';
    
    $api = new database();
    $api->setQuery('Select * from movies order by date_of_manufacture DESC');
    $data=$api->loadAllRows();
    $metadata= new API_V2();
    $metadata->setData($data);
    $metadata->setCount(sizeof($data));
    $metadata->setType("movies");
    print_r($metadata->getMetaData());
