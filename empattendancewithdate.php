<?php include 'header.php'?>
<?php include 'menu2.php'?>
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
 <div class="row" style="background:linear-gradient();">
     <div class="col-md-3" style="height:70px;">
        
    </div> 
    <div class="col-md-6" style="height:50%; margin-top:25px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Find Perticular Date</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                
                                <td> <label> Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly></td>
                                <td> <label> Date</label></td>
                                <td> <input type="date" name="date" class="form-control" required/></td>
                            </tr>
                            <tr bgcolor="#808080">
                                <td colspan="4" align="center"><input type="submit" class="btn btn-primary" name="sea" value="Search"></td>
                            </tr>
                             </table>  
                   </form>
                
                 </div>
             </div>
           </div>
        </div>
      </div>
     <form action="" method="POST">
       <table border="1" style="margin:2% auto;">
   <tr style="background: #3366ff;color: white; padding:.1rem .3rem" text-align="center" >
        <th>Emp Id</th>
        <th>Date</th>
        <th>Attendance</th>
        
    </tr>
          
<?php  
     $con = mysqli_connect("localhost","root","","empms");
       if(isset($_POST['sea'])){

            $id = $_POST['id'];
            $date= $_POST['date'];
            $q  = "SELECT * from attendence where id ='$id'and date='$date'";
            $result = mysqli_query($con,$q);

            $num = mysqli_num_rows($result);
            
          if(!$num = mysqli_num_rows($result)){
              echo '<script>alert("Id or Date not Found !")</script>';
            }
            else{
              $sq ="SELECT * From attendence where id ='$id' AND date = '$date'";
              $resu = mysqli_query($con,$sq);

            while ($rw=mysqli_fetch_array($resu)){
                ?>
   
                <tr bgcolor="#9acqe8">
                    <td><input type="text" name="" class="form-control" value="<?php echo $rw['id']; ?>"readonly=""></td>
                    <td><input type="text" name="" class="form-control" value="<?php echo $rw['date']; ?>"readonly=""></td>
                    <td><input type="text" name="" class="form-control" value="<?php echo $rw['status']; ?>"readonly=""></td>
                </tr>

       <?php
            }
         }

        }


     ?>
       </table>
     </form>
       </body>
</html><br><br>
       <?php include 'footer.php'?>   

   