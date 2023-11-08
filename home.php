<?php

require_once 'connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products_store.css">
    <title>Website</title>
</head>

<body>
    <main>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <div class="image">
                <div class="image-zoom"><img src="img/<?php echo $row['anh_sp']; ?>" alt="Product Image" vertical-align: middle; ></div>
                </div>
                <div class="caption">
                    <p class="ten_sp"><b>
                        <?php echo $row["ten_sp"]; ?>
                        </b></p>
                    <p class="gia_sp"><b>Giá bán: 
                            <?php echo $row["gia_sp"]; ?>VND
                        </b></p>
                    <p class="soluong_sp"><b>Còn hàng:  
                                <?php echo $row["soluong_sp"]; ?>
                            </b></p>
                </div>
            </div>
            <?php

        }
        ?>
</body>

</html>