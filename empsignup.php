 <?php include 'header.php'?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee Signup</title>
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
    <div class="col-md-4" style="height:70px;">
        
    </div>  
    <div class="col-md-4" style="height:50%; margin-top:40px">
        <div class="container-fluide">
             <div class="panel panel-info">
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Employee Signup</div>
             <div class="panel-body" >
          <form action="" method="POST">
             		<table class="table table-bordered" style="margin-bottom:10px">
                            <tr bgcolor="#9acqe8">
                               <td> <label> Enter Your Email-Id</label></td>
                                <td> <input type="text" name="email" class="form-control" placeholder="ईमेल" required/></td>
                            </tr>
                            
                            <tr bgcolor="#9acqe8">
                                <td><label> Enter Your Passward</label></td>
                                <td> <input type="Password" name="pass" class="form-control" placeholder="पासवर्ड" required/></td>
                            </tr>
                           <tr bgcolor="#9ACD32">
                                <td><label> Enter Your Re-Passward</label></td>
                                <td> <input type="Password" name="cpass" class="form-control" placeholder="पुन:पासवर्ड" required/></td>
                            </tr>
                          <tr bgcolor="#9CC0B0">
                              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="b1" value="Submit">
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
<div class="col-md-4">
</div>
  </div>
      </body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","empms");

if(isset($_POST['b1'])){

	$em = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];


	$npass = strlen($pass);

	$ck_em = "SELECT * From employee where email = '$em'";
	$run_em = $conn->query($ck_em);

	$run_ck = mysqli_num_rows($run_em);

	if(!$run_ck = mysqli_num_rows($run_em)){
		echo '<script>alert("Email Not Matched with register Email")</script>';
	}
	else{   
		        $ck = "SELECT * from empsignup where email = '$em'";
          $ckq = $conn->query($ck);

          $emk = mysqli_num_rows($ckq);

         if($emk>0){
              	echo '<script>alert("Email already exist ")</script>';
           }


		      elseif($pass ==" " OR $cpass==" "){

		      	echo '<script>alert("Empty Feild !")</script>';
		      }
		      elseif($npass<6){

		      	echo '<script>alert("password maxmimum 6 character")</script>';
		      }
          
          elseif($pass != $cpass){
             
             echo '<script>alert("password Not Matched with Re-password")</script>';

          }
          else{

           $sqli = "INSERT into empsignup(email,password,cpassword)values('$em','$pass','$cpass')";

           $run_sqli = $conn->query($sqli);

           if($run_sqli){

           	   echo '<script>alert("Employees Signup Successfully")</script>';
           	   ?>
           	   <script type="text/javascript">
           	   	window.location.href="emplogin.php";
           	   </script>

           	   <?php
           }

           
          }

	}



}

?>
    <?php include 'footer.php'?>  