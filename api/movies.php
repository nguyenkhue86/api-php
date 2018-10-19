<?php
    require_once '../core/database.php';
    require_once '../core/api_v2.php';
    
    
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $api = new database();
        $api->setQuery("select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type,c.country_name,p.company_name from movies m inner join country c on m.country_id = c.id inner join productioncompany p on m.company_id = p.id  where m.id=$id;");
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
