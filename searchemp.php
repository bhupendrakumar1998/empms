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
        <title> Search Employee</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;"> Search Employee</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     <table class="table table-bordered" style="margin-bottom:10px" >
                         <tr  bgcolor="#9acqe8">
                               <td><label>Select Your Department</label></td>
                               <td> <select class="form-control" name="dpm">
                                <option value="des">----select--</option>
                                <option>Information Technology</option>
                                <option>Civil Engineering</option>
                                <option>Electrical Engineering</option>
                                <option>Electronics & Communication Engineering</option>
                                <option>Mechanical Engineering</option>
                                <option>Department of Chemistry</option>
                                <option>Department of Physics</option>
                                <option>Department of Communication Skills</option>
                                   </select></td>
                           </tr>
                           <tr  bgcolor="#9acqe8">
                              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="add_data" value="Search">
                          </tr>
                     </table>
                 </form>
                  </div>
             </div>
           </div>
        </div>

  </div>
          <br>

       <table border="1" style="margin:2% auto;">
    <tr style="background: #3366ff;color: white; padding:.1rem .3rem" align="center" >
        <td>Emp Id</td>
        <td>Name</td>
        <td>Lname</td>
        <td>DOB</td>
        <td>Address</td>
        <td>Pin</td>
        <td>Mobile</td>
        <td>Email</td>
        <td>Join Date</td>
        <td>Salary</td>
        <td>Qualication</td>
        <td>Department</td>
        <td>Designation</td>
        <td>Gender</td>
    </tr>
          
<?php  
     $conn = mysqli_connect("localhost","root","","empms");
      if(isset($_POST['add_data'])){

        $depart = $_POST['dpm'];

        $sql = "SELECT * from employee where depart ='$depart'";

        $run = $conn->query($sql);

         
         if($depart ==""){
          
           echo '<script>alert("record not matched")</script>';

         }
         
         else{

             while($ft = mysqli_fetch_array($run)){

            ?>

            <tr  style="color: #3366ff;background: white; text-align: center; ">
                <td><?php echo $ft[0]; ?></td>
                <td><?php echo $ft[1]; ?></td>
                <td><?php echo $ft[2]; ?></td>
                <td><?php echo $ft[3]; ?></td>
                <td><?php echo $ft[4]; ?></td>
                <td><?php echo $ft[5]; ?></td>
                <td><?php echo $ft[6]; ?></td>
                <td><?php echo $ft[7]; ?></td>
                <td><?php echo $ft[8]; ?></td>
                <td><?php echo $ft[9]; ?></td>
                <td><?php echo $ft[10]; ?></td>
                <td><?php echo $ft[11]; ?></td>
                <td><?php echo $ft[12]; ?></td>
                <td><?php echo $ft[13]; ?></td>
            </tr>
      <?php
            }
         }

        }


     ?>
       </table>
     </body>
 </html><br><br>
    <?php include 'footer.php'?>  