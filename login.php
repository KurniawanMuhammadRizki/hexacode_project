<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hexacode</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hexacode" />
    <meta name="author" content="Hexacode" />    
    
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
       
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">
    
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
    
        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <!-- Flexslider  -->
        <link rel="stylesheet" href="css/flexslider.css">
    
        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">
    
        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- Login -->
        <link rel="stylesheet" href="css/login.css">
        </head>
        <body>
            <div id="login" class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-md-offset-3 text-center fh5co-heading">
                    <div class="card col-md-8  text-center fh5co-heading ">
                        <div class="login-box ">
                            <div class="login-snip"> 
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin</label> 
                                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Instruktur</label>
                                <div class="login-space">
                                    <div class="login">
                                        <form action="controller/loginProses.php" method="post">
                                        <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" name="username" class="input" placeholder="Enter your username"> </div>
                                        <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                                        <!-- <div class="group"> <label for="level" class="label">Role</label>
                                            <select class="select" name="Role" id="level" placeholder="Role" >
                                                <option style="color: #2EA9E1;" value="admin">Admin</option>
                                                <option style="color: #2EA9E1;" value="instruktur">Instruktur</option>                                                
                                            </select> 
                                         </div> -->
                                        <!-- <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div> -->
                                        <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                                        <div class="hr"></div>
                                        <!-- <div class="foot"> <a href="#">Forgot Password?</a> </div> -->
                                        </form>
                                    </div>
                                    <div class="sign-up-form">
                                        <form action="controller/loginProses2.php" method="post">
                                        <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" name="username" class="input" placeholder="Enter your username"> </div>
                                        <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                                        <!-- <div class="group"> <label for="level" class="label">Role</label>
                                            <select class="select" name="Role" id="level" placeholder="Role" >
                                                <option style="color: #2EA9E1;" value="admin">Admin</option>
                                                <option style="color: #2EA9E1;" value="instruktur">Instruktur</option>                                                
                                            </select> 
                                         </div> -->
                                        <!-- <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div> -->
                                        <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                                        <div class="hr"></div>
                                        <!-- <div class="foot"> <a href="#">Forgot Password?</a> </div> -->
                                        </form>
                                        <!-- <div class="foot"> <label for="tab-1">Already Member?</label> </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>