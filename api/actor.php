<?php
    include '../core/database.php';
    include '../core/api_v2.php';

    if(isset($_GET["actor"])) {
        $id = $_GET["actor"];
        $api = new database();
        $api->setQuery("Select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type from movies m inner join movie_actor md on m.id=md.movie_id inner join actor d on md.actor_id = d.id where d.id = $id order by date_of_manufacture DESC");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movies");
        print_r($metadata->getMetaData());
    } elseif (isset($_GET["id"])) {
        $id = $_GET["id"];
        $api = new database();
        $api->setQuery("Select * from actor where id = $id");
        $data=$api->loadRow();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(1);
        $metadata->setType("actor");
        print_r($metadata->getMetaData());
    } elseif(isset($_GET["movie"])) {
        $id = $_GET["movie"];
        $api = new database();
        $api->setQuery("Select d.id,d.actor_name,d.avatar_url,d.description from movies m inner join movie_actor md on m.id=md.movie_id inner join actor d on md.actor_id = d.id where m.id = $id");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("movies");
        print_r($metadata->getMetaData());
    } else {
        $api = new database();
        $api->setQuery("Select * from actor");
        $data=$api->loadAllRows();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(sizeof($data));
        $metadata->setType("actors");
        print_r($metadata->getMetaData());
    }

?>
