
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="homesty.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="loginstylesheet.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">

</head>


<body>

        
    <!--Starting of navbar 1-->
    <nav class="navbar navbar-toggleable-sm navbar-inverse nav1">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="home.html" class="navbar-brand">Gear Sphere</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="loginsign.php" class="nav-link nav-log">LogIn/SignIn</a>
                </li>
                <li class="nav-item ">
                    <a href="register.php" class="nav-link nav-log">Register</a>
                </li>
                <li class="nav-item ">
                        <a href="./shopping cart/Cart.php" class="nav-link nav-log">My cart</a>
                    </li>
            </ul>
            
        </div>
    </nav>
    <!--Ending of navbar 1-->


    <!--Starting of navbar 2 -->
    <nav class="navbar navbar-toggleable-md nav2">
        <div class="container" style="margin-right:4em;">
            <ul class="main-menu">
                <li> <a href="#">Shop</a>

                    <div class="menu-sub">
                        <div class="menu-col-1">

                            <h5 class="menu-category">Tops</h5>
                            <ul>   <li><a href="./shopping cart/Cart.php">Link 01</a></li>
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

                <li>
                    <a href="home.html">Home</a>
                </li>
                <li>
                    <a href="Aboutus.html">About Us</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>



            </ul>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div>
                    <p style="background-color:rgba(0, 0, 0, 0.76); color: beige; margin-top:-20px; margin-bottom: 10%; border-radius: 1em;  padding: 5%">Sign Up Now</p>
                </div>
                <form method="post" action="test.php" class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Enter Full name" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control"name="email" placeholder="Email-id " required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_1" placeholder="Enter password" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_2" placeholder="Confirm password" required>
                    </div>

                    <div >
                    <input type="radio" name="Country" value="Lahore"><span style="font-size:20px; color:black; margin:3px; padding:4px">Lahore</span><br>    
                    <input type="radio" name="Country" value="Karachi"><span style="font-size:20px; color:black; margin:3px; padding:4px">Karachi</span><br>
                    <input type="radio" name="Country" value="Islamabad"><span style="font-size:20px; color:black; margin:3px; padding:4px">Islamabad</span><br><br>   
                    </div>

                    
                    <button type="submit" class="btn mb-2" name="register">
                        Register</button>
                        <button type="submit" class="btn mb-2" name="update">
                        Update</button>
                        <button type="submit" class="btn mb-2" name="delete">
                        Delete</button>
                        <button type="submit" class="btn mb-2" name="async">
                        Async</button>
                        <button type="submit" class="btn mb-2" name="insert">
                        Insert</button>
                        
                        
                </form>
                <div class="col-12 forgot">
                    <p>
                        Already a member? <a href="loginsignin.html">Sign in</a>
                    </p>

                </div>

            </div>
            <!--End of modal content-->
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>