<?php
session_start();
if(!isset($_SESSION['user']))
{
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 10:39:14 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>Saroj Enterprise</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">

            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="User Name" autofocus name="username">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
        <!--                <span class="pull-right">
                            <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                            </span>-->
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your e-mail address below to reset your password.</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-success" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

            </form>

        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

    <!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 10:39:14 GMT -->
</html>

<?php
                    include './dao.php';
                    $d=new dao();
                    if($_POST)
                    {
                        $user=$_POST['username'];
                        $passw=$_POST['password'];
                        $pass = md5($passw);
                        $q=$d->select("login", 'username="'.$user.'" and password="'.$pass.'"');
                        $fet= mysql_fetch_array($q);
                        if($fet>0)
                        {
                            $_SESSION['user']=$user;
                            $_SESSION['photo']=$fet['photo'];
                            $_SESSION['id']=$fet['login_id'];
                            $_SESSION['name']=$fet['name'];
                            header("location:index.php");
                        }
                        else
                        {
                            echo "<script>alert('LogIn Failed..');</script>";
                        }
                    } 
}
else
{
    header("location:index.php");
}
?>