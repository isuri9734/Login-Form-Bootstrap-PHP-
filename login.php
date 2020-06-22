<html>
    <head>
        <title>Login Form </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/template.css" rel="stylesheet" media="screen">
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300" rel="stylesheet" type="text/css">
        
      
      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/login.css">

        <style type="text/css">
                body
                {
                    /* The image used */
                    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw38vtLzQD69Y28sHgrEYoj45jLycMd24GV_Oy_CdnMoC1aiAt&usqp=CAU);
                    /* Full height */
                    height: 100%; 
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
    
        </style>

    <script type="text/javascript">
 
       function validate()
       {
           var uname = document.loginform.username.value;
           if(uname === "")
           {
               alert("Please re-enter username");
               document.loginform.uname.focus();
               return false;
   
           }
           var password = document.loginform.password.value;
           if(password === "")
           {
               alert("You cant keep password column empty");
               document.loginform.psw.focus();
               return false;
               
           }   
       }
     
    </script>

</head>

<body>
        
        <!-- Navbar start -->
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d6f5d6; opacity: 0.95;  ">
             <a class="navbar-brand" href="#">Website</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Default</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
              </ul>
            </div>
          </nav>
  <!-- Nav tabs -->
 
 <br><br>

<div class="container" style="opacity:0.90; color: green;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <div class="card" style="padding: 2%;">
                        <form id="loginform" class="form" action="login-backend.php" method="POST">
                            <h3 class="text-center text-success">Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-success">Username:</label><br>
                                <input type="text" name="uname"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-success">Password:</label><br>
                                <input type="password" name="psw"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span><input id="remember-me" name="remember-me" type="checkbox"></span><span style="color:green;">Remember me</span> </label><br>
                               <input type="submit" name="login" class="btn btn-success btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                Don't have an account
                                <a href="#" style="color:#0f3d0f; font-weight: bold;">Register here</a>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
</body>    
</html>