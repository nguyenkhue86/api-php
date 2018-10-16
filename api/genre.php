<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    include '../core/access_control.php';
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET["G"]))
        {
            $id = $_GET["G"];
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.resolution,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join kind_movie km on m.id=km.movie_id inner join kind k on km.kind_id = k.id where k.id = $id order by date_of_manufacture DESC");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("movies");
            print_r($metadata->getMetaData());
        }
        elseif(isset($_GET["C"]))
        {
            $id = $_GET["C"];
            $api = new database();
            $api->setQuery("Select * from movies where country_id = $id order by date_of_manufacture DESC");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("movies");
            print_r($metadata->getMetaData());
        }
        elseif(isset($_GET["A"]))
        {
            $id = $_GET["A"];
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.resolution,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join movie_actor ma on m.id=ma.movie_id where ma.actor_id = $id order by date_of_manufacture DESC");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("movies");
            print_r($metadata->getMetaData());
        }
        elseif(isset($_GET["D"]))
        {
            $id = $_GET["D"];
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.resolution,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join movie_director md on m.id=md.movie_id where md.director_id = $id order by date_of_manufacture DESC");
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