 <?php include 'header.php'?>
 <?php error_reporting(0);?>
<?php  $iddd = $_GET['idzz'];?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee Login</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Login</div>
             <div class="panel-body" >
          <form action="" method="POST">
              <div class="imgcontainer" style="text-align: center " >
         <img src="images/stlg.png" alt="Avatar"  width="150px" height="150px" class="avatar">
              </div><br>
                                <table class="table table-bordered" style="margin-bottom:20px">
                                            <tr bgcolor="#9acqe8">
                                                <td> <label>Email-ID</label></td>
                                                <td> <input type="text" name="email" class="form-control"
                                                    value ="<?php echo$iddd;?>" placeholder="ईमेल" required/></td>
                                            </tr> 
                                            <tr bgcolor="#9CC0B0">
                                                <td> <label> Passward</label></td>
                                                <td> <input type="Password" name="pass" class="form-control" placeholder="पासवर्ड" required/></td>
                                            </tr>
                                            <tr bgcolor="#9acqe8">
                                                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="login" value="Login"></td>
                                            </tr>
                              <div id="msg">
                     
                              </div>
                                        </table>
                                    <span class="psw"><a href="chgpass.php">Forgot Password</a></span>
             </form>
                <p>Not registered yet? <a href='empsignup.php'>Register Here</a></p>
                <p>Forget Id  <a href='findid.php'>Find Id Here</a></p>
               
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

    $em = $_POST['email'];

    $pass = $_POST['pass'];


    $sql = "SELECT * from empsignup where email = '$em' and password = '$pass'";
    $runnn  = $conn->query($sql);


    $sql2 = "SELECT * from employee where email = '$em'";
    $runnn2  = $conn->query($sql2);

    if(!$row = mysqli_fetch_array($runnn)){

        echo '<script>alert("Email Or Password Invalid enter correct data ")</script>';
    }

    else{
        if($row2 = mysqli_fetch_array($runnn2)){

        echo '<script>alert("Logged In Success ")</script>';
           $emm = $row2['id'];
           $_SESSION['email_emp'] = $em;
           $_SESSION['id'] = $emm;
           header('location:welcomeemp.php');

       }
       else{
        echo '<script>alert("Something Went Wrong ")</script>';
       }
       
    }
}

?>

 <?php include 'footer.php'?>

