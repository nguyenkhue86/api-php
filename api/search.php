<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    include '../core/access_control.php';
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){

        if(isset($_GET["M"]))
        {
            $id = $_GET["M"];
            $id = $id;
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m where m.movie_name like $id '%' order by date_of_manufacture DESC");
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
            $id = $id;
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join movie_actor ma on m.id = ma.movie_id inner join actor a on ma.actor_id = a.id where a.actor_name like $id '%' order by date_of_manufacture DESC");
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
            $id = $id;
            $api = new database();
            $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join movie_director md on m.id = md.movie_id inner join director d on md.director_id = d.id where d.director_name like $id '%' order by date_of_manufacture DESC");
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