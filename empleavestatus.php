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
        <title> Employee Leave Status</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Leave Status</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                
                                <td> <label> Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly></td>
                                <td> <label> To</label></td>
                                <td> <input type="date" name="to" class="form-control" required/></td>
                                <td> <label> From</label></td>
                                <td> <input type="date" name="from" class="form-control" required/></td>
                            </tr>
                            <tr bgcolor="#808080">
                                <td colspan="6" align="center"><input type="submit" class="btn btn-primary" name="find" value="Status"></td>
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
  $conn = mysqli_connect("localhost","root","","empms");
if(isset($_POST['find'])){

  $id = $_POST['id'];
  $to = $_POST['to'];
  $from = $_POST['from'];

  $sqll = "SELECT * from leaves where id ='$id'";

       $re = $conn->query($sqll);

       if(!$ftt = mysqli_fetch_array($re)){

          echo '<script>alert("Invalid Id")</script>';
       }
       else{

        $sql = "SELECT * from leaves where id ='$id' AND source = '$to' AND desti ='$from'";
        $runnn = $conn->query($sql);

       while($show = mysqli_fetch_array($runnn)){

           ?>
    <div class="col-md-3" style="height:70px;">
        
    </div> 
    <div class="col-md-6" style="height:50%; margin-top:25px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Your Status Is:</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
            <tr bgcolor="#9acqe8">
                <td colspan="2" align="center"><input type="text" name="" readonly class="btn btn-primary" value="<?php echo $show['status'];?>"></td>
            </tr>
 </table>  
                   </form>
                
                 </div>
             </div>
           </div>
        </div>
      </div>
          <?php 
  }

}
}

?>
           
 <br><br><br><br><br><br><br>
 <?php include 'footer.php'?>
                           