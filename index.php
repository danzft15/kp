<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/logo_zihud.jpg">

    <title>Mts.Ziyadatul Huda</title>

    <!-- Bootstrap CSS -->    
    <link href="login_css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="login_css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="login_css/elegant-icons-style.css" rel="stylesheet" />
    <link href="login_css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="login_css/style.css" rel="stylesheet">
    <link href="login_css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="proses_login.php" method="post">        
        <div class="login-wrap">
            <p class="login-img"><img src="img/logo_zihud.jpg" width="100" height="100"></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
      </form>

    </div>


  </body>
</html>
