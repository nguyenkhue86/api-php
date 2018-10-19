<?php
    require_once '../core/database.php';
    require_once '../core/api_v2.php';
    

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $request = json_decode(file_get_contents("php://input"));
        
        $api = new database();
        $api->setQuery("INSERT INTO `rating`(`id`, `movie_id`, `rate`, `comment`, `email`, `comment_date`) VALUES (0,?,?,?,?,?)");
        $ar = array(
            $request->movie_id,
            $request->rate,
            $request->comment,
            $request->email,
            date("Y-m-d")
        );
        $api->execute($ar);
        print_r(json_encode($request));
    }
    else {
        if(isset($_GET["id"])){ 
            $api = new database();
            $id = $_GET["id"];
            $api->setQuery("Select * from rating where movie_id=$id");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("rating");
            print_r($metadata->getMetaData());
        }else
        {
            $api = new database();
            $api->setQuery("Select * from rating");
            $data=$api->loadAllRows();
            $metadata= new API_V2();
            $metadata->setData($data);
            $metadata->setCount(sizeof($data));
            $metadata->setType("rating");
            print_r($metadata->getMetaData());
        }
    }
    

    ?>

