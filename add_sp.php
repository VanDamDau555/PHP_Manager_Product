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
            $gia_sp = $_POST["gia_sp"];
            $soluong_sp = $_POST["soluong_sp"];
            $anh_sp = $_POST["anh_sp"];

            if ($conn -> query("INSERT INTO danhmucsp (ten_sp, gia_sp, soluong_sp, anh_sp) VALUES (N'$ten_sp', N'$gia_sp', N'$soluong_sp', N'$anh_sp')")){
                echo "<script>alert('Add successed');</script>";
            } else{
                echo "<script>alert('Add not successed');</script>";
            }
        }
        $conn -> close();
    ?>
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_id">id_sp</label>  
                <div class="col-md-4">
                    <input id="id_sp" name="id_sp" placeholder="id_sp" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ten_sp">ten_sp</label>  
                <div class="col-md-4">
                    <input id="ten_sp" name="ten_sp" placeholder="ten_sp" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="gia_sp">gia_sp</label>  
                <div class="col-md-4">
                    <input id="gia_sp" name="gia_sp" placeholder="gia_sp" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="soluong_sp">soluong_sp</label>  
                <div class="col-md-4">
                    <input id="soluong_sp" name="soluong_sp" placeholder="soluong_sp" class="form-control input-md" required="" type="text">
                    
                </div>
            </div>

            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="anh_sp">anh_sp</label>
                <div class="col-md-4">
                    <input id="anh_sp" name="anh_sp" class="input-file" type="file">
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