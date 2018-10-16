<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    include '../core/access_control.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET["kind"]))
        {
            $id = $_GET["kind"];
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.resolution,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join kind_movie km on m.id=km.movie_id inner join kind k on km.kind_id = k.id where k.id = $id order by date_of_manufacture DESC");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("movies");
            print_r($metadata->getMetaData());
        }
        elseif(isset($_GET["movieid"]))
        {
            $id = $_GET["movieid"];
            $api = new database();
            $api->setQuery("Select k.id,k.kind_name from movies m inner join kind_movie km on m.id=km.movie_id inner join kind k on km.kind_id = k.id where m.id = $id ");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("movies");
            print_r($metadata->getMetaData());
        }
        else {
            $api = new database();
            $api->setQuery("Select * from kind");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("kind");
            print_r($metadata->getMetaData());
        }
    }