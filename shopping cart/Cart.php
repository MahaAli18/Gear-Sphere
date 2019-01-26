<?php
 session_start();
    $servername1 = "192.168.0.178";
    $username1 = "root";
    $password1 = "pass";
    
    // Create connection
    $con = new mysqli($servername1, $username1, $password1, "product1_details"); //My database name was calm

    $servername3 = "192.168.0.165";
    $username3 = "root";
    $password3 = "pass";
    
    // Create connection
    $con3 = new mysqli($servername3, $username3, $password3, "product1_details"); //My database name was calm
    
    $servername2 = "127.0.0.1";
    $username2 = "root";
    $password2 = "";
    
    // Create connection
    $conn2 = new mysqli($servername2, $username2, $password2, "product1_details");
    
    
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
    echo "Connected to".$servername1." successfully <br/>";
    
    if ($con3->connect_error) {
        die("Connection failed: " . $con3->connect_error);
    } 
    echo "Connected to".$servername3." successfully <br/>";
    
    // Check connection
    if ($conn2->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected to".$servername2." successfully <br/>";
   
    //$database_name = "Product1_details";
   // $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/my website/homesty.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        body{
             background-color:black;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: white;
            padding: 2%;
        }
        h2{
            text-align: center;
            color:black;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>
     <!--Starting of navbar 1-->
     <nav class="navbar navbar-toggleable-sm navbar-inverse nav1 mb-0 ">
        <button class="navbar-toggler " data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="/my website/home.html" class="navbar-brand ml-4 " style="font-size:25px">Gear Sphere</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/my website/loginsign.php" class="nav-link nav-log" style="font-size:20px">LogIn/SignIn</a>
                </li>
                <li class="nav-item ">
                    <a href="/my website/register.php" class="nav-link nav-log" style="font-size:20px">Register</a>
                </li>
                
                
            </ul>
            
        </div>
    </nav>
    <!--Ending of navbar 1-->


    
              
                        
                
    <nav class="navbar navbar-toggleable-md mt-0 nav2">
        <div class="container" style="margin-right:5em;">
            <ul class="main-menu">
                <li style="font-size:15px"> <a href="#">Shop</a>

                    <div class="menu-sub">
                        <div class="menu-col-1">

                            <h5 class="menu-category">Tops</h5>
                            <ul>   <li><a href="Cart.php">Link 01</a></li>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 01</a></li>
                            </ul>

                            <h5 class="menu-category">Bottoms</h5>
                            <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 01</a></li>
                            </ul>

                        </div>
                        <div class="menu-col-2">

                                <h5 class="menu-category">Accessories</h5>
                                <ul>   <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                </ul>
    
                                <h5 class="menu-category">Shoes</h5>
                                <ul>
                                        <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                </ul>
    
                            </div>

                    </div>
                </li>

                <li style="font-size:15px">
                    <a href="/my website/home.html">Home</a>
                </li>
                <li style="font-size:15px">
                    <a href="/my website/Aboutus.html">About Us</a>
                </li>
                <li style="font-size:15px">
                    <a href="#">Contact</a>
                </li>



            </ul>
        </div>
    </nav>

    <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-6">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td class="text-danger"><?php echo $value["item_name"]; ?></td>
                            <td class="text-danger"><?php echo $value["item_quantity"]; ?></td>
                            <td class="text-danger">$ <?php echo $value["product_price"]; ?></td>
                            <td class="text-danger">
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right" class="text-danger">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>


</body>
</html>
