<?php require_once '../header.php';?>
<?php require_once '../function.php';?>
<?php $controller = new controller();?> 
<?php $movies=$controller->getAllMovies();?>
<?php $url = $controller->getCurentUrl();?>
<div class="container">
    <h2 class="title">Cập Nhật Phim</h2>

</div>