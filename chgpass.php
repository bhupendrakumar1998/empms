 <?php include 'header.php'?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee Forget Password</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Forget Password</div>
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
                                            <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="login" value="Search"></td>
                                            </tr>
                              <div id="msg">

                              </form>
                     
                              </div>

                              <?php 
session_start();
$conn = mysqli_connect("localhost","root","","empms");

if(isset($_POST['login'])){

    $em = $_POST['email'];
    $sql = "SELECT * from empsignup where email = '$em'";

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
                <td> <label>Password</label></td>
                <td> <input type="Password" name="pass" class="form-control" placeholder ="Enter password" required></td>
            </tr>

            <tr bgcolor="#9acqe8">
                <td> <label>Confirm Password</label></td>
                <td> <input type="Password" name="cpass" class="form-control" placeholder ="Enter Re- password" required></td>
            </tr>

             <tr bgcolor="#9acqe8">
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="chng" value="Change"> 
                </td>
            </tr>


        </form>

       <?php
    }
}

?>
  </table>
          <span class="psw"><a href="emplogin.php">Back To login</a></span>
           
                
               
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

<?php 
if(isset($_POST['chng'])){

    $emm = $_POST['email2'];

    $p = $_POST['pass'];
    $cp = $_POST['cpass'];

    $pss = strlen($p);

    if($pss<6){
        echo '<script>alert("Password must be 6 Character")</script>';
    }
    elseif($p!=$cp){
         echo '<script>alert("Password not match ")</script>';
    }
    else{
        $s = "UPDATE empsignup SET password = '$p', cpassword = '$cp' where email = '$emm'";
        $run = $conn->query($s);
        if($run){
            echo '<script>alert("Password Change SuccessFully")</script>';
        }
    }
}


?>

