<?php include '../header.php';?>
<?php include '../function.php';?>
<?php $controller = new controller();?> 
<?php $movies=$controller->getAllMovies();?>
<?php $url = $controller->getCurentUrl();?>
<div class="container">
    <h2 class="title">Danh Sách Phim</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Phim</th>
                <th scope="col">Ngày Phát Hành</th>
                <th scope="col">Thời Lượng</th>
                <th scope="col">Chất Lượng</th>
                <th scope="col">Ngôn Ngữ</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Lược xem</th>
                <th scope="col"><a href="<?php echo $url.'phim/create.php';?>">Thêm mới</a></th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<sizeof($movies);$i++) {?>
            <tr>
                <th scope="row"><?php echo $i+1?></th>
                <td><?php echo $movies[$i]->movie_name?></td>
                <td><?php echo $movies[$i]->date_of_manufacture?></td>
                <td><?php echo $movies[$i]->duration?></td>
                <td><?php echo $movies[$i]->quality?></td>
                <td><?php echo $movies[$i]->language?></td>
                <td><?php echo $movies[$i]->state?></td>
                <td><?php echo $movies[$i]->view?></td>
                <td>
                    <a href="<?php echo $url.'phim/detail.php?id='.$movies[$i]->id;?>">Details</a>
                    <a href="<?php echo $url.'phim/edit.php?id='.$movies[$i]->id;?>">Edit</a>
                    <a href="<?php echo $url.'phim/delete.php?id='.$movies[$i]->id;?>">Remove</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<?php include '../footer.php';?>