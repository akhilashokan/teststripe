<?php
    require_once "connect.php";
    $idr=$_GET['id'];
    //echo $idr;
    $sql = "SELECT * FROM `products` WHERE id ='$idr'";
    $result=$sqlCon->query($sql);
    $followingdata = $result->fetch_assoc();
   // echo $followingdata['name'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="res/style.css">
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
    <div class="container product_PgCont">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo $followingdata['img']  ?> " alt="">
            </div>
            <div class="col-8">
                <h2> <?php  echo$followingdata['name'] ?>  </h2>
                <h3> rs: <?php  echo$followingdata['cost'] ?> </h3>
                <input type="button" value="submit" class="btn btn-dark btn-large" onClick= buy() >
            </div>
        </div>
    </div>
</body>
</html>
<script>
      function buy(){
        document.location.href="checkout.html";
      }
    </script>