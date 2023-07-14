 <?php include 'header.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript" ></script>
     <!-- External CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
      <style>
       body
       {
           background-image: url(images/background.jpg);
           background-repeat: repeat;
           background-size:100%;
       }
    
      </style>
   </head>
      <body>
             <div class="row" style="background:linear-gradient();">
    <div class="col-md-4" style="height:70px;">
        
    </div>  
    <div class="col-md-4" style="height:50%; margin-top:40px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Admin Login</div>
             <div class="panel-body" >
          <form action="" method="POST">
              <div class="imgcontainer" style="text-align: center " >
         <img src="images/admin.jfif" alt="Avatar"  width="150px" height="150px" class="avatar">
              </div><br>
                           		<table class="table table-bordered" style="margin-bottom:20px">
                                            
                                            <tr bgcolor="#9acqe8">
                                                <td> <label>User Name</label></td>
                                                <td> <input type="text" name="adnm" class="form-control" placeholder="उपयोगकर्ता नाम" required/></td>
                                            </tr> 
                                            <tr bgcolor="#9CC0B0">
                                                <td> <label> Passward</label></td>
                                                <td> <input type="Password" name="adpwd" class="form-control" placeholder="पासवर्ड" required/></td>
                                            </tr>
                                            <tr bgcolor="#808080">
                                                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="login" value="Login"></td>
                                            </tr>                            
                            </table>
             </form>              
              </div>
           </div>
          </div>
        </div>
<div class="col-md-4">
    
  </div>
</div>
      </body>
</html>
<?php 
session_start();

$conn = mysqli_connect("localhost","root","","empms");

if(isset($_POST['login'])){

    $an = $_POST['adnm'];

    $pass = $_POST['adpwd'];


    $sql = "SELECT * from admin where uname = '$an' and password = '$pass'";

    $runnn  = $conn->query($sql);

    if(!$row = mysqli_fetch_array($runnn)){

        echo '<script>alert("Username Or Password Invalid enter correct data ")</script>';
    }

    else{

        echo '<script>alert("Logged In Success ")</script>';

           $_SESSION['admin'] = $an;

            header('location:welcomeadmin.php');

    }



}

?>
<?php include 'footer.php'?>