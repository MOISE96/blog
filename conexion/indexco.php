<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>connexion</title>

  </head>


<!------ Include the above in your HEAD tag ---------->

<body>
   <?php  include"dbconnect";?>
    <div id="login">

        <h3 class="text-center text-white pt-5">HELL0! ENREGISTREZ-VOUS</h3>
        <div class="container">
          <div class="sou">
      <center>  <i class="far fa-grin" style="font-size:120px;color:#17a2b8;background-color:#EAEAEA;margin-top:2px;border-radius:90px "></i>    </center>
          </div>

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="registration.php" method="post">

                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">name</label><br>
                                <input type="text" name="name" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">email</label><br>
                                <input type="email" name="email" id="password" class="form-control">
                            </div>
                          <div class="form-group">
                                <label for="password" class="text-info">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="remember-me" class="text-info">Remember me </label><br>
                                <input type="submit" name="submit1" class="btn btn-info btn-md" value="submit">
                            </div>

                        </form>
                    </div>
                 </div>
             </div>
          </div>
       </div>


      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
  </html>
  </body>

</html>
