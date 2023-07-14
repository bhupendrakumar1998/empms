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
        <title> Admin Add Employee</title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;"> Add Employee</div>
             <div class="panel-body" >
          <form action="" method="POST">
              
              <p><button name="get" class="btn btn-primary">Get Id</button></p>

              <?php 
              error_reporting(0);
                     if(isset($_POST['get'])){

                        $get_id = rand(1000,10000);


                     }
       


              ?>
          </form>
          <form action="" method="post">
              

              	<table class="table table-bordered" style="margin-bottom:10px" >
                                 
                            <tr bgcolor="#9acqe8">
                                <td> <label>Enter Your Emp Id</label></td>
                                <td> <input type="text" name="id" class="form-control" value=" <?php echo $get_id; ?> " readonly></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label> Enter Your First Name</label></td>                                             
                                <td> <input type="text" name="fn" class="form-control" placeholder="प्रथम नाम "/></td>
                            </tr>
                            <tr  bgcolor="9acqe8">
                                <td><label>Enter Your Last Name</label></td>
                                <td> <input type="text" name="ln" class="form-control" placeholder="अंतिम नाम " /></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label>Enter Your DOB</label></td>
                                <td>  <input type="date" name="dob" class="form-control" placeholder="जन्म तिथि"/></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label>Enter Your Address</label></td>
                                <td>  <input type="text" name="add" class="form-control" placeholder="पूरा पता "/></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label>Enter Your Pin Code</label></td>
                                <td>  <input type="number" name="pc" class="form-control" placeholder="पिन नंबर "/></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label>Enter Your Mobile</label></td>
                                <td>  <input type="number" name="mb" class="form-control" placeholder="मोबाइल नंबर"/></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label>Enter Your Email</label></td>
                                <td>  <input type="email" name="em" class="form-control" placeholder="ई-मेल"/></td>
                            </tr>
                            <tr  bgcolor="#9acqe8">
                                <td> <label>Enter Your Join Date</label></td>
                                <td>  <input type="date" name="jd" class="form-control" placeholder="ज्वाइन  डेट "/></td>
                            </tr>
                            <tr bgcolor="#9acqe8">
                                <td> <label>Enter Your Salary</label></td>
                                <td>  <input type="number" name="sl" class="form-control" placeholder="वेतन "/></td>
                            </tr>
                            <tr bgcolor="#9acqe8">
                                <td> <label>Select Your Qualification</label></td>
                                <td><select class="form-control" name="qf">
                                    <option value="">----select--</option>
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
                            </tr>
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
                                <tr bgcolor="#9acqe8">
                                <td> <label>Select Your Designation</label></td>
                                <td><select class="form-control" name="dg">
                                    <option value="">----select--</option>
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
                           </tr>
                           
                            <tr  bgcolor="#9acqe8">
                               <td><label> Select Your Gender:</label></td>
                               <td><input type="radio" name="gender" value="male">Male 
                                   <input type="radio" name="gender" value="female">Female
                               </td>
                           </tr>
  
                          
                           </tr>
                           
                           <tr  bgcolor="#9acqe8">
                               <td><label>Upload Your Image:</label></td>
                               <td><input type="file" name="img" class="form-control" /></td>
                          </tr>
                          
                          <tr  bgcolor="#9acqe8">
                              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="add_data" value="Register">
                              <input type="RESET" class="btn btn-primary" name="reset" value="Reset"></td>
                          </tr>
                 <div id="msg">
                     
                 </div>
                        </table>  
             </form>
               </div>
             </div>
           </div>
        </div>
<div class="col-md-3">
</div>
  </div>
          </body>
</html>
          <?php 

          $con = mysqli_connect("localhost","root","","empms");

          if(isset($_POST['add_data'])){

             $eid = $_POST['id'];
             $fname = $_POST['fn'];
             $lname = $_POST['ln'];
             $dob = $_POST['dob'];
             $address = $_POST['add'];
             $pin= $_POST['pc'];
             $mob = $_POST['mb'];
             $email = $_POST['em'];
             $jdate = $_POST['jd'];
             $sal= $_POST['sl'];
             $qua = $_POST['qf'];
             $dep = $_POST['dpm'];
             $desi = $_POST['dg'];
             $gd= $_POST['gender'];
             $pho = $_POST['img'];
             $ck = "SELECT * from employee where id ='$eid'OR email = '$email'";
            $run_ck = $con->query($ck);
          $re_run = mysqli_num_rows($run_ck);
          
          if($re_run>0){
            echo '<script>alert(" Email-Id Already Exist Try another")</script>';
          }

            elseif($fname == "" OR $lname =="" OR $address == ""){

                echo '<script>alert("Empty feild")</script>';
            }
            else{
                $sql = "INSERT into employee values('$eid','$fname','$lname','$dob','$address','$pin','$mob','$email','$jdate','$sal','$qua','$dep','$desi','$gd','$pho')";

                $run = $con->query($sql);

                if($run){

                    echo '<script>alert("Employee added successfully....")</script>';
                }
            }       
      }
       ?>
    <?php include 'footer.php'?>  