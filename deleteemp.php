<?php include 'header.php'?>
 <?php include 'menu1.php'?><br>
 <?php
session_start();
if(!isset($_SESSION['admin']))
{
header('location:adminlogin.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Delete Employee</title>
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
    <div class="col-md-6" style="height:50%; margin-top:25px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;"> Delete Employee</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                <td> <label>Enter Your Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" placeholder=" कर्मचारी आईडी दर्ज करें "/></td>
                                <td><input type="submit" class="btn btn-primary" name="delete" value="Delete">

                            </tr>
                             </table>  
                   </form>
                 </div>
             </div>
           </div>
        </div>
      </div>
   </body>
</html>
   <?php 
          $con = mysqli_connect("localhost","root","","empms");

          if(isset($_POST['delete'])){

            $id = $_POST['id'];

            $q = "SELECT * from employee where id ='$id'";
            $result=mysqli_query($con,$q);
          $num = mysqli_num_rows($result);

          if(!$num = mysqli_num_rows($result)){
               echo '<script>alert("Invalid Your Emp Id")</script>';
          }
          else
              {
            $sql = "DELETE  from employee where id ='$id'";
            $run = mysqli_query($con,$sql);
            if($run){
                     echo '<script>alert("Employee Deleted Successfully")</script>';
                    }
              }
            }
          
            ?>  <br><br><br><br><br><br><br><br>        
                
    <?php include 'footer.php'?>  