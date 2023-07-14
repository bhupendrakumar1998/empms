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
        <title> Employee Leave Request</title>
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
     <div class="col-md-2" style="height:70px;">
        
    </div> 
    <div class="col-md-8" style="height:50%; margin-top:25px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Leave Request</div>
             <div class="panel-body" >

                
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                
                                <td> <label> Emp Id</label></td>
                                <td> <input type="text" name="id"  class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly></td>
                                <td> <label> To</label></td>
                                <td> <input type="date" name="to" class="form-control" required/></td>
                                <td> <label> From</label></td>
                                <td> <input type="date" name="from" class="form-control" required/></td>
                                <td> <label> Time</label></td>
                                <td><select class="form-control" name="tm" style="width:10rem;">
                                     <option value="">---select--</option>
                                    <option>Full Time</option>
                                     <option>After Launch</option>
                                       <option>Before Launch</option>
                                        <option>Emergency Launch</option>
                                     </select>
                                </td>
                            </tr>
                            <tr bgcolor="#808080">
                                <td colspan="8" align="center"><input type="submit" class="btn btn-primary" name="action" value="Request"></td>
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
        if(isset($_POST['action'])){
          $id  = $_POST['id'];
          $to = $_POST['to'];
          $from = $_POST['from'];
           $tm = $_POST['tm'];
          

          $ck = "SELECT * from employee where id ='$id'";
          $run_ck = $conn->query($ck);
          $re_run = mysqli_num_rows($run_ck);



          $ckv = "SELECT * from leaves where id ='$id' AND source='$to'AND desti= '$from' AND timing='$tm'";
          $run_ckv = $conn->query($ckv);
          $re_runv = mysqli_num_rows($run_ckv);


          if($id == "" Or $to == "" Or $from ==""){
            echo '<script>alert("Empty not ! valid")</script>';
          }
          elseif(!$re_run){
            echo '<script>alert("Id not matched With Register Employees")</script>';
          }

          elseif($re_runv>0){
             
               echo '<script>alert("This date Leave Already updated")</script>';

          }
          
          else{
            $sq = "INSERT into leaves (id,source,desti,status,timing) values('$id','$to','$from','Pending','$tm')";

            $r = $conn->query($sq);

            if($r){
              echo '<script>alert("Leave Request Submitted")</script>';
            }
          }

        }
        ?><br><br><br><br><br><br><br><br>

<?php include 'footer.php'?>