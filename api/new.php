<?php
    require_once '../core/database.php';
    require_once '../core/api_v2.php';
    
    
    $api = new database();
    $api->setQuery('Select * from movies order by date_of_manufacture DESC');
    $data=$api->loadAllRows();
    $metadata= new API_V2();
    $metadata->setData($data);
    $metadata->setCount(sizeof($data));
    $metadata->setType("movies");
    print_r($metadata->getMetaData());

    
?>
