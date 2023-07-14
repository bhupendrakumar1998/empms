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
        <title> view All Leave </title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">View All Leaves </div>
             <div class="panel-body" >
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                
                                <td> <label> Emp Id</label></td>
                                 <td> <label> To</label></td>
                                  <td> <label>From</label></td>
                                  <td> <label>Time</label></td>
                                  <td> <label>Status</label></td>
                                   <td> <label>Permit</label></td>
                            </tr>
      <?php 

          $conn = mysqli_connect("localhost","root","","empms");

          $sqli = "SELECT * From leaves";

          $run = mysqli_query($conn,$sqli);

          while($ft = mysqli_fetch_array($run)){
            ?>

             <form action="" method="post">
            <tr>

              <td> <input type="text" name="id" class="form-control" readonly value="<?php echo $ft['id'];?>"></td>
               <td> <input type="text" name="to" class="form-control" readonly value="<?php echo $ft['source'];?>"></td>
                <td><input type="text" name = "from" class="form-control" readonly value="<?php echo $ft['desti'];?>"></td>
                 <td><input type="text" name = "tm" class="form-control" readonly value="<?php echo $ft['timing'];?>"></td>
                 <td> <select class="form-control" name="st">
                                    <option value="">--Select--</option>
                                    <option value="Accept">Accept</option>
                                    <option value="Reject">Reject</option>
                                    <option value="Running">Running</option>
                                    <option value="Pending" >Pending</option>
                                     </select>
                 </td>
                 <td><input type="submit" class="btn btn-primary" name="accept" value="Submit"></td>
           </tr>
   </form>

            <?php
          }



          ?>
        </table>

  </div>
             </div>
           </div>
        </div>
      </div>
      </body>
</html>
<?php 
if(isset($_POST['accept'])){

	$id  = $_POST['id'];
	
	$st = $_POST['st'];

	if($st ==""){
		echo '<script>alert("Status is not updated")</script>';
	}
	else{

		$sl = "UPDATE  leaves SET  status = '$st' where id = '$id'";
		$r = $conn->query($sl);

		if($r){
			echo '<script>alert("Leaves Update Sucessfully")</script>';
		}
	}
}



?>
</body>
</html>
  <?php include 'footer.php'?>