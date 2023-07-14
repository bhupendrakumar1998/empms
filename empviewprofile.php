<?php include 'header.php'?>
 <?php include 'menu2.php'?><br>
 <?php
session_start();
if(!isset($_SESSION['email_emp']))
{
header('location:emplogin.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> View Profile</title>
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
    <div class="col-md-3" style="height:70px;">
        
    </div>  
    <div class="col-md-5" style="height:50%; margin-top:25px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;"> View Profile</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                <td> <label>Enter Your Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly/></td>
                                <td><input type="submit" class="btn btn-primary" name="search" value="search">

                            </tr>
                             </table>  
                 </form>
                 
           <?php 
          $conn = mysqli_connect("localhost","root","","empms");

          if(isset($_POST['search'])){

            $id = $_POST['id'];

            $ck = "SELECT * from employee where id ='$id'";
            $run_ck = $conn->query($ck);
          $re_run = mysqli_num_rows($run_ck);
          
          if(!$re_run = mysqli_num_rows($run_ck)){
            echo '<script>alert("Id not matched")</script>';
          }
          else{
            $sql = "SELECT * from employee where id ='$id'";

            $run  = $conn->query($sql);
         while($rw=mysqli_fetch_array($run)){
              ?>
               <form action="" method="post">
              
              <table class="table table-bordered" style="margin-bottom:10px" >
                <tr bgcolor="#9acqe8">
                    <td><label> Emp Id</label></td><td><input type="text" name="" class="form-control" readonly="" value="<?php echo $rw[0]; ?>"</td>
                </tr>
                <tr bgcolor="#9acqe8">
                 <td><label>First Name</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[1]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                   <td><label>Last Name</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[2]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                  <td><label>DOB</label></td> <td><input type="date" name="" class="form-control" value="<?php echo $rw[3]; ?>" readonly></td>
                </tr> 
                <tr bgcolor="#9acqe8">
                  <td><label>Address</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[4]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                  <td><label>Pin Code</label></td> <td><input type="number" name="" class="form-control" value="<?php echo $rw[5]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                  <td><label>Mobile</label></td> <td><input type="number" name="" class="form-control" value="<?php echo $rw[6]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                <td><label>Email</label></td> <td><input type="email" name="" class="form-control" value="<?php echo $rw[7]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                <td><label>Join Date</label></td> <td><input type="date" name="" class="form-control" value="<?php echo $rw[8]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                <td><label>Salary</label></td> <td><input type="number" name="" class="form-control" value="<?php echo $rw[9 ]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                <td><label>Qualification</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[10]; ?>" readonly></td>
                </tr>  
                <tr bgcolor="#9acqe8">
                <td><label>Department</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[11]; ?>" readonly></td>
                </tr>
                <tr bgcolor="#9acqe8">
                <td><label>Designation</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[12]; ?>" readonly></td>
                </tr>  
                <tr bgcolor="#9acqe8">
                <td><label>Gender</label></td> <td><input type="text" name="" class="form-control" value="<?php echo $rw[13]; ?>" readonly></td>
                </tr>
                </table>
              <?php
            }
          }
       }
       ?>
                </form>
               </div>
             </div>
           </div>
        </div>
<div class="col-md-3">
</div>
  </div>
          </body>
</html><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'?>
