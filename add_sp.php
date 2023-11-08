<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Thêm sản phẩm</title>
</head>
<body>
    
    <?php require_once 'connect.php' ?>
    <?php 
        if (isset($_POST['add'])){
            $ten_sp = $_POST["ten_sp"];
            $id_sp = $_POST["id_sp"];
            $gia_sp = $_POST["gia_sp"];
            $soluong_sp = $_POST["soluong_sp"];
            $anh_sp = $_POST["anh_sp"];

            if ($conn -> query("INSERT INTO products (ten_sp, id_sp, soluong_sp, gia_sp, anh_sp) VALUES (N'$ten_sp', N'$id_sp', N'$soluong_sp', N'$gia_sp', N'$anh_sp')")){
                echo "<script>alert('Add successed');</script>";
            } else{
                echo "<script>alert('Add not successed');</script>";
            }
        }
        $conn -> close();
    ?>
    <div class="container">
        <form method="POST" action="">
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ten_sp">Tên Sản phẩm: </label>  
                <div class="col-md-4">
                    <input id="ten_sp" name="ten_sp" placeholder="Nhập tên sản phẩm" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_id">Id sản phẩm:</label>  
                <div class="col-md-4">
                    <input id="id_sp" name="id_sp" placeholder="Nhập Id" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="soluong_sp">Số lượng:</label>  
                <div class="col-md-4">
                    <input id="soluong_sp" name="soluong_sp" placeholder="Nhập số lượng" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="gia_sp">Giá bán: </label>  
                <div class="col-md-4">
                    <input id="gia_sp" name="gia_sp" placeholder="Nhập giá sản phẩm" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>
   

            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="anh_sp">Nguồn ảnh:</label>
                <div class="col-md-4">
                    <input id="anh_sp" name="Nhập nguồn ảnh" class="input-file" type="file">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="add"></label>
                <div class="col-md-4">
                    <button id="add" name="add" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>