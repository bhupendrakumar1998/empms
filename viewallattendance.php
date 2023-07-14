<?php include 'header.php'?>
<?php include 'menu1.php'?>
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
        <title>show Attendance</title>
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
             
<form action="" method="POST">
       <table border="1" style="margin:2% auto;">
   <tr style="background: #3366ff;color: white; padding:.1rem .3rem" text-align="center" >
        <th>Emp Id</th>
        <th>Date</th>
        <th>Attendance</th>
        
    </tr>
          
<?php  
     $con = mysqli_connect("localhost","root","","empms");
      
            $q  = "SELECT * from attendence";
            $result = mysqli_query($con,$q);
                 while ($rw=mysqli_fetch_array($result)){
                ?>  
                <tr bgcolor="#9acqe8">
                    <td><input type="text" name="" class="form-control" value="<?php echo $rw['id']; ?>"readonly=""></td>
                    <td><input type="text" name="" class="form-control" value="<?php echo $rw['date']; ?>"readonly=""></td>
                    <td><input type="text" name="" class="form-control" value="<?php echo $rw['status']; ?>"readonly=""></td>
                </tr>

       <?php
                 }


     ?>
       </table>
</form>
    
       </table>
     </body>
</html><br><br><br><br>
<?php include 'footer.php'?>
