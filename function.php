<?php
include '../core/database.php';
class controller extends database {

    //get current url
    function getCurentUrl(){
        return "http://localhost:81/hayhay/";
    }

    //get all film
    function getAllMovies(){
        $sql = "select * from movies";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    //get film by id
    function getFilmById($id){
        $sql = "select m.id,m.movie_name,m.trailer,m.movie_content,m.avatar_movie_url,m.background,m.date_of_manufacture,m.year_of_manufacture,m.duration,m.quality,m.resolution,m.language,m.state,m.view,m.country_id,m.company_id,m.movie_type,c.country_name,p.company_name from movies m inner join country c on m.country_id = c.id inner join productioncompany p on m.company_id = p.id  where m.id=$id";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    //get country 
    function getAllContry(){
        $sql = "Select * from country";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    //get company
    function getAllCompany(){
        $sql = "Select * from productioncompany";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}?>