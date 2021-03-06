<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ManGo</title>
    <link rel="shortcut icon" href="mangog.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/mango.css">
    <script src="js/mango.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<style>@import "global-order.css";</style>

<style>
      @import "loginwindowcss.css";
</style>

  <style>
      .jumbotron {
    margin-bottom: 0px;
    background-image: url(imgBackground/14155_1_other_wallpapers_dual_monitor_dual_screen.jpg);
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
    text-shadow: black 0.3em 0.3em 0.3em;
}
    </style>

  <body>
  <!--- php --->

 <!-- End php -->
 <?php
 	 if(!isset($_SESSION['user'])) {
 ?>




    <!--bar top-->
    <?php
     include "dblink.php";
     include "topbar.php";
    ?>
    <!-- end bar top-->


        <div class="jumbotron" style="text-align: center">
          <h1 style="text-align: center"><font size="6">SIGN IN | ManGO store</font></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p></p>

                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pswd" placeholder="Password">
                        </div>

                        <input type="checkbox" name="save_account">
                        <span>เก็บข้อมูลไว้ในเครื่องนี้</span><br><br>
                            <p style="text-align: center"><input type="submit" Class="btn" /></p>
                          <br><br><a href="forget-password.php" id="forget">ลืมรหัสผ่าน</a>

                    </form>

                   <a href="index2.php">กลับสู่หน้าหลัก</a>


                </div>
                <div class="col-md-6">
                    <h3>NOT HAVE ACCOUNT ?</h3>
                    <h5>Creating an account is easy and only takes a few seconds! Having an account makes shopping at ManGO so much better:</h5>
                    <ul>
                        <li>Use our Express Checkout</li>
                        <li>Track the status of all your orders</li>
                        <li>Receive exclusive special offers</li>
                        <li>Access to any cool new features</li>
                    </ul>
                    <a href="new-member.php"><button type="submit" class="btn btn-default">Create Account</button></a>
                </div>
            </div>
        </div>

        <?php
          }
          else {
       ?>
        <p>ท่านเข้าสู่ระบบแล้ว</p>
            <?php echo $_SESSION['user']; ?><br><br>
            <a href="logout.php">ออกจากระบบ</a>
        <?php
         header("Location: index2.php");
        }
       ?>
       <br>

       <!--footer-->
       <?php
           include "foot.php";
        ?>
       <!--end footer-->
       <?php include "cartscript.php"; ?>


         <?php
             include "loginwindow.php"
          ?>
    </body>
</html>
<?php ob_end_flush(); ?>
