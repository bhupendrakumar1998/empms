 <?php include 'header.php'?>
<?php error_reporting(0);?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee Find Id</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Find Id For Login</div>
             <div class="panel-body" >
          <form action="" method="POST">
              <div class="imgcontainer" style="text-align: center " >
         <img src="images/stlg.png" alt="Avatar"  width="150px" height="150px" class="avatar">
              </div><br>
                           		<table class="table table-bordered" style="margin-bottom:20px">
                                            <tr bgcolor="#9acqe8">
                                                <td> <label>Email-ID</label></td>
                                                <td> <input type="text" name="email" class="form-control" placeholder="ईमेल" required/></td>
                                            </tr> 
                                            
                                            <tr bgcolor="#9acqe8">
                                            <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="login" value="Find Id"></td>
                                            </tr>
                              <div id="msg">

                              </form>
                     
                              </div>

                              <?php 
session_start();
$conn = mysqli_connect("localhost","root","","empms");

if(isset($_POST['login'])){

    $em = $_POST['email'];
    $sql = "SELECT * from employee where email = '$em'";

    $runnn  = $conn->query($sql);

    if(!$row = mysqli_fetch_array($runnn)){

        echo '<script>alert("Email Invalid enter correct data ")</script>';
    }
    else{
        ?>

        <form method ="post">

            <tr bgcolor="#9acqe8">
                <td> <label>Email-ID</label></td>
                <td> <input type="text" name="email2" class="form-control" value="<?php echo $em ;?>" readonly></td>
            </tr>

            <tr bgcolor="#9acqe8">
                <td> <label>Your Id</label></td>
                <td> <input type="number" name="pass" class="form-control" placeholder ="Enter password" value="<?php echo $row[0];?>" readonly></td>
            </tr>


        </form>

       <?php
    }
}

?>
  </table>
          <span class="psw"><?php echo "<a href='emplogin.php? idzz=  $em'>Back To login</a>"; ?></span>
           
                
               
              </div>
           </div>
          </div>
        </div>
<div class="col-md-4">
    
  </div>
</div>
      </body>
</html>
<?php include 'footer.php'?>

