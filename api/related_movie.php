<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    include '../core/access_control.php';
    
    if(isset($_GET["id"],$_GET["kind"],$_GET["actor"],$_GET["director"],$_GET["company"] ))
    {
        $id = $_GET["id"];
        $kind = $_GET["kind"];
        $actor = $_GET["actor"];
        $director = $_GET["director"];
        $company = $_GET["company"];
        $api = new database();
        $api->setQuery("select DISTINCT m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type,p.company_name 
        from movies m 
        left join productioncompany p on m.company_id= p.id 
        left join movie_actor ma on ma.movie_id = m.id 
        LEFT JOIN movie_director md on m.id = md.movie_id
        left join kind_movie km on km.movie_id = m.id  
        where (m.company_id = $company or ma.actor_id in ($actor) 
        or md.director_id = $director or km.kind_id in ($kind)) and m.id !=$id  ;");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movies");
        print_r($metadata->getMetaData());
        // echo $api->_sql;
    }
    elseif(isset($_GET["id"],$_GET["movie"]))
    {
        $id = $_GET["id"];
        $movie = $_GET["movie"];
        $api = new database();
        $api->setQuery("select * from movie_season ms where ms.movie_id = $movie and ms.season != $id");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movies");
        print_r($metadata->getMetaData());
        // echo $api->_sql;
    }
     else {
        echo 'Request param not exist!';
    }