<?php include '../header.php';?>
<?php include '../function.php';?>
<?php $controller = new controller();?>
<?php $url = $controller->getCurentUrl();?>
<?php 
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }else {
        $id = 1;
    }
?> 
<?php $movie=$controller->getFilmById($id);?>
<div class="container">
    <h2 class="title"><?php echo $movie->movie_name ?></h2>
    <p class="content"><img src="<?php echo $movie->avatar_movie_url ?>" alt=""></p>
    <div class="card-box">
        
        <div class="row">
            <div class="col col-4">
                <p class="title">Nội Dung Phim</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->movie_content ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Ngày Phát Hành</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->date_of_manufacture ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Năm Phát Hành</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->year_of_manufacture ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Thời Lượng</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->duration ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Chất Lượng</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->quality ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Ngôn Ngữ</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->language ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Trạng Thái</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->state ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Lượt Xem</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->view ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Quốc Gia</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->country_name ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Nhà Sản Xuất</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->company_name ?></p>
            </div>        
        </div>

        <div class="row">
            <div class="col col-4">
                <p class="title">Loại Phim</p>
            </div> 
            <div class="col col-8">
                <p class="content"><?php echo $movie->movie_type ?></p>
            </div>        
        </div>
        <div class="row">
            <iframe width="460" height="414" src="<?php echo $movie->trailer ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>    
        </div>
    </div>
</div>