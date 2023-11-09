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
    
<select name="product" id="" width: 200px;>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php $row['ten_sp'] ?>"><?php echo $row['ten_sp']; ?></option>
                                            <?php

                                        }
                                    ?>
                    </select>
        
    
</body>

</html>