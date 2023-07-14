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
        <title>Feedback</title>
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
    <div class="col-md-6" style="height:70px; margin-top:30px">
                            <img src="images/feedback.jpg" style="width: 688px; height: 360px;">

    </div>  
    <div class="col-md-5" style="height:50%; margin-top:30px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Feedback</div>
             <div class="panel-body" >
          <form action="" method="POST">
              
                           		<table class="table table-bordered" style="margin-bottom:20px">
                                             <tr bgcolor="#9acqe8">
                                                <td> <label>Emp-ID</label></td>
                                                <td> <input type="text" name="id" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly></td>
                                            </tr> 
                                            
                                            <tr bgcolor="#9CC0B0">
                                                <td> <label> Email-Id</label></td>
                                                <td> <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email_emp'];?>" readonly></td>
                                            </tr>
                                            
                                             <tr bgcolor="#9CC0B0">
                                                <td> <label>Description</label></td>
                                                <td> <select name="feed" class="form-control"> 
                                                      <option>Ecellent</option>
                                                      <option>Good</option>
                                                       <option>Average</option>
                                                       <option>Poor</option>
                                                </select></td>
                                            </tr>
                                            <tr bgcolor="#9acqe8">
                                                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="sub" value="Submit"></td>
                             
                                        </table>
             </form>
               
              </div>
           </div>
          </div>
        </div>

</div>
      </body>
</html><br><br>
    <?php include 'footer.php'?>  

<?php 
$con = mysqli_connect("localhost","root","","empms");

if(isset($_POST['sub'])){

    $id = $_POST['id'];
    $em = $_POST['email'];
    $feed = $_POST['feed'];


    $qq = "SELECT * from employee where id ='$id' And email = '$em'";
    $rr_q = $con->query($qq);

    $ex_ck = "SELECT * from feedback where id = '$id' and email='$em'";
    $r_q = $con->query($ex_ck);
    $re_run = mysqli_num_rows($r_q);

    if($id == "" OR $em =="" OR $feed == ""){

                echo '<script>alert("Empty feild")</script>';
            }
    elseif(!$valid = mysqli_fetch_array($rr_q)){

        echo '<script>alert("Invalid data for feedback")</script>';
    }
    elseif($re_run>0){
        echo '<script>alert("You have Alread send feedback")</script>';
    }
    else{

        $sql = "INSERT into feedback values('$id','$em','$feed')";
                $run = $con->query($sql);
                if($run){
                    echo '<script>alert("Employee Feedback Send")</script>';
                }
    }
}

?>