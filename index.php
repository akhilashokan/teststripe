<?php
    require_once "connect.php";

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Stripe Payment</title>
  </head>
  <body>
    <div class="container">
      <header><h1>Test Ecom</h1></header>
      <main>
        <h1 class="text-center mt-5 mb-5">Products</h1>
        <div class="row">
          <?php
            $sql = "SELECT * FROM `products`";
            $product=$sqlCon->query($sql);
            if($product){
              foreach ($product as $value) {
                $id=$value['id'];
                echo '<div class="col pDiv" onClick= test("'.$id.'")  >';
                echo "<img src=".$value["img"]." alt=".$id.">";
                echo "<h3>".$value['name']."</h3>";
                echo "<p>".$value['cost']."</p>"; 
                echo "</div >";
              };
              
            }else{
              echo'error';
            }
            
          ?>

        </div>
      </main>
    </div>
    <script>
      function test(v){
        document.location.href="product.php?id="+v;
      }
    </script>
  </body>
</html>
