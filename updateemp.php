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
        <title> Update Employee</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;"> Update Employee</div>
             <div class="panel-body" >
                 <form action="" method="POST">
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                <td> <label>Enter Your Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" placeholder=" कर्मचारी आईडी दर्ज करें "/></td>
                                <td><input type="submit" class="btn btn-primary" name="search" value="search">

                            </tr>
                             </table>  
                 </form>
                 </div>
             </div>
           </div>
        </div>
      </div>
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
                  <td> <label>Emp Id</label><br><input type="text" name="id" class="form-control" value=" <?php echo $rw[0]; ?> " readonly></td>
                  <td><label>First Name</label><br> <input type="text" name="fn" class="form-control" value=" <?php echo $rw[1]; ?> "</td>
                  <td><label>Last Name</label><br> <input type="text" name="ln" class="form-control" value=" <?php echo $rw[2]; ?> "</td>
                  <td><label>DOB</label><br> <input type="text" name="dob" class="form-control" value=" <?php echo $rw[3]; ?> "</td>
                  <td><label>Address</label><br> <input type="text" name="add" class="form-control" value=" <?php echo $rw[4]; ?>"</td>
                  </tr>
                  <tr bgcolor="#9acqe8">
                  <td> <label>Pin Code</label><br><input type="text" name="pc" class="form-control" value=" <?php echo $rw[5]; ?> "</td>
                  <td><label>Mobile Number</label><br> <input type="text" name="mb" class="form-control" value=" <?php echo $rw[6]; ?> "</td>
                  <td><label>Email Id</label><br> <input type="text" name="eid" class="form-control" value=" <?php echo $rw[7]; ?> "</td>
                  <td><label>Join Date</label><br> <input type="text" name="jd" class="form-control" value=" <?php echo $rw[8]; ?> "</td>
                  <td><label>Salary</label><br> <input type="text" name="sal" class="form-control" value=" <?php echo $rw[9]; ?> "</td>
                  </tr>

                 <tr bgcolor="#9acqe8">
                     <td> <label> Qualification</label><br>
                                <select class="form-control" name="qf" >
                                    <option value="<?php echo $rw[10]; ?>">----select--</option>
                                    <option>B-TECH</option>
                                    <option>M-TECH</option>
                                    <option>BCA</option>
                                    <option>MCA</option>
                                    <option>PHD</option>
                                    <option>B-FARMA</option>
                                    <option>BSC</option>
                                    <option>MSC</option>
                                     </select>
                                </td>
                                <td><label> Department</label><br>
                                <select class="form-control" name="dp">
                                <option value="<?php echo $rw[11]; ?>">----select--</option>
                                <option>Information Technology</option>
                                <option>Civil Engineering</option>
                                <option>Electrical Engineering</option>
                                <option>Electronics & Communication Engineering</option>
                                <option>Mechanical Engineering</option>
                                <option>Department of Chemistry</option>
                                <option>Department of Physics</option>
                                <option>Department of Communication Skills</option>
                                   </select></td>
                          
                                   <td> <label> Designation</label><br>
                                <select class="form-control" name="dg">
                                    <option value="<?php echo $rw[12]; ?>">----select--</option>
                                    <option>Manager</option>
                                    <option>HR</option>
                                    <option>Tester</option>
                                    <option>Fresher</option>
                                    <option>Principal</option>
                                    <option>Assistance Professor</option>
                                    <option>Guest Faculty</option>
                                    <option>Member</option>
                                     </select>
                                </td>
                          
                                <td><label>Gender:</label><br>
                               <input type="radio" name="gen" value="<?php echo $rw['gender']; ?>">Male 
                                   <input type="radio" name="gen" value="<?php echo $rw['gender']; ?>">Female
                               </td>
                          
  
                          
                           
                               <td><label> Image:</label><br>
                               <input type="file" name="img" class="form-control" /></td>
                 </tr>
                 <tr>
                               <td colspan="5" align="center"><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                         
                 </tr>
                </table>


               </form>
              <?php
            }
          }
       }
       ?>
          <?php 
  $conn = mysqli_connect("localhost","root","","empms");

          if(isset($_POST['update'])){

            $id = $_POST['id'];
              $fnm = $_POST['fn'];
               $lnm = $_POST['ln'];
                $dob = $_POST['dob'];
                 $add = $_POST['add'];
                  $pin = $_POST['pc'];
                   $mo = $_POST['mb'];
                    $em = $_POST['eid'];
                     $jd = $_POST['jd'];
                      $sal = $_POST['sal'];
                       $qf = $_POST['qf'];
                        $dp= $_POST['dp'];
                         $dg= $_POST['dg'];
                          $gd= $_POST['gen'];


$chk_id = "SELECT * from employee where id ='$id'";
      $run_chk = $conn->query($chk_id);

      $query = mysqli_num_rows($run_chk);

      if(!$query = mysqli_num_rows($run_chk)){
          echo '<script>alert("Id not Found in database")</script>';
      }
      else{
        $sql ="UPDATE employee SET name='$fnm',lname='$lnm',dob='$dob', address = '$add', pincode='$pin',phone = '$mo', email='$em',jdate='$jd', salary='$sal',qualification ='$qf', depart ='$dp',designation='$dg',gender='$gd'  where id ='$id'";

        $resu = $conn->query($sql);

        if($resu){
          echo '<script>alert("Record Updated Sucessfully in database")</script>';
        }
      }

}
  ?>

   </body>
</html><br><br><br><br><br><br><br><br><br>
                
            <?php include 'footer.php'?>         
                