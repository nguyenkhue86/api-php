<?php require_once '../header.php';?>
<?php require_once '../function.php';?>
<?php $controller = new controller();?> 
<?php $movies=$controller->getAllMovies();?>
<?php $url = $controller->getCurentUrl();?>
<?php $country = $controller->getAllContry();?>
<?php $company = $controller->getAllCompany();?>
<div class="container">
    
    <div class="card">
        <div class="card-header">
            <h2 class="title">Thêm Mới Phim</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Phim</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tên Phim">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Trailer URL</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Trailer">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Avatar URL</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Avatar">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nội Dung</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Content">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Background</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Background">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Xuât Bản</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Năm Xuất Bản</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Thời Lượng</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Duration">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Chất Lượng</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quality">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ngôn Ngữ</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Language">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Trạng Thái</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter State">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Lượt Xem</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter View">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Quốc Gia</label>
                    <div class="input-group mb-3">
                        <select name="" id="" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <?php for( $i = 0; $i< sizeof($country); $i++) {?>
                            <option value="<?php echo $country[$i]->id;?>"><?php echo $country[$i]->country_name;?></option>
                        <?php } ?>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nhà Sản Xuất</label>
                    <div class="input-group mb-3">
                        <select name="" id="" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <?php for( $i = 0; $i< sizeof($company); $i++) {?>
                            <option value="<?php echo $company[$i]->id;?>"><?php echo $company[$i]->company_name;?></option>
                        <?php } ?>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Loại Phim</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter type">
                </div>

                
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>