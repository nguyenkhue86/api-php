<?php
    require_once '../core/database.php';
    require_once '../core/api_v2.php';
    
    
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $api = new database();
        $api->setQuery("select DISTINCT m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type, GROUP_CONCAT(DISTINCT km.kind_id) as kind,GROUP_CONCAT(DISTINCT ma.actor_id) as actor, p.company_name,md.director_id
        from movies m 
        INNER join kind_movie km on km.movie_id = m.id  
        INNER JOIN movie_actor ma on ma.movie_id =m.id
        INNER JOIN productioncompany p on p.id = m.company_id
        LEFT JOIN movie_director md on md.movie_id = m.id
        where m.id = $id");
        $data=$api->loadRow();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(1);
        $metadata->setType("movies");
        print_r($metadata->getMetaData());
    } else {
        echo 'Request param not exist!';
    }

    
?>
