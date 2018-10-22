<?php
    include '../core/database.php';
    include '../core/api_v2.php';
    
    
    if(isset($_GET["username"],$_GET["password"]))
    {
        $username = $_GET["username"];
        $password = $_GET["password"];
        $api = new database();
        $api->setQuery("select * from user where username = $username and password = $password");
        $data=$api->loadRow();
        $metadata= new API_V2();
        $metadata->setData($data);
        $metadata->setCount(1);
        $metadata->setType("user");
        print_r($metadata->getMetaData());
    } else {
        echo 'Request param not exist!';
    }

    
?>
