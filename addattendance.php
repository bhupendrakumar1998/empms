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
        <title> Add Attendence Employee</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;"> Add Employee Attendance</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px">
                                 
                            <tr bgcolor="#9acqe8">
                                <td> <label>Enter Your Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" placeholder=" कर्मचारी आईडी दर्ज करें "/></td>
                                <td> <input type="date" name="date" class="form-control" placeholder=""/></td>
                                <td>
                                <select class="form-control" name="st">
                                    <option value="">--select--</option>
                                    <option>Present</option>
                                    <option>Absent</option>
                                 </select>
                                </td>
                            </tr>
                            <tr>
                               <td colspan="4" align="center"><input type="submit" class="btn btn-primary" name="con" value="Confirm"></td>
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
$con=mysqli_connect("localhost","root","","empms"); 
            if(isset($_POST['con'])){
             $id = $_POST['id'];
            $date = $_POST['date'];
            $status = $_POST['st'];
            $q = "SELECT * From  attendence where id ='$id'AND date = '$date'";
            $result =mysqli_query($con,$q);
            $num = mysqli_num_rows($result);



            $qu  = "SELECT * from employee where id ='$id' ";
            $run = $con->query($qu);

            $ck_id = mysqli_num_rows($run);


            
             if($id =="" OR $date =="" OR $status =="")
                 {
                  echo '<script type="text/javascript">alert("Empty Not Require !")</script>';
                 }
               elseif ($num>0){
                           echo '<script type="text/javascript">alert(" There are attendence already update at this id")</script>';
                    }

               elseif(!$ck_id = mysqli_num_rows($run)){
                        

                        echo '<script>alert("Employee Id not Found !")</script>';
                      
                      }



                else{
                    $sql = "INSERT into attendence(id,date,status)values('$id','$date','$status')";
                    $result = mysqli_query($con,$sql);
                    if($result){
                         echo '<script type="text/javascript">alert("Attendence Filled !")</script>';
                               }
                     }
            }

            ?><br><br><br><br><br>

    <?php include 'footer.php'?>  
       