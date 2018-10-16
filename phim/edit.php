<?php include '../header.php';?>
<?php include '../function.php';?>
<?php $controller = new controller();?> 
<?php $movies=$controller->getAllMovies();?>
<?php $url = $controller->getCurentUrl();?>
<div class="container">
    <h2 class="title">Cập Nhật Phim</h2>

</div>