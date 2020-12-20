<?php
    require_once "connect.php";
    $idr=$_GET['id'];
    //echo $idr;
    $sql = "SELECT * FROM `products` WHERE 1";
    $product=$sqlCon->query($sql);
    echo($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?php  ?> " alt="">
            </div>
        </div>
    </div>
</body>
</html>