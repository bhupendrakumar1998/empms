
<?php include 'header.php'?>
<?php include 'menu1.php'?>
<?php
session_start();
if(!isset($_SESSION['admin']))
{
header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Employees</title>
<style>
       body
       {
           background-image: url(images/background.jpg);
           background-repeat: repeat;
           background-size:100%;
       }
       h3{
       	color: purple;
       	font-family: arial;
       	font-size: 1.3rem;
       	border-bottom: .2rem solid #3366ff;
       }
       
	  
   </style>


 <center><h3>All Employees In Organization</h3></center>
 <br>

 <table border="1">
 	<tr style="background: #3366ff;color: white;" align="center">
 		<td> Emp Id</td>
 		<td>Name</td>
 		<td>Lname</td>
 		<td>DOB</td>
 		<td>Address</td>
 		<td>Pin Code</td>
 		<td>Mobile No</td>
 		<td>Email Id</td>
 		<td>Join Date</td>
 		<td>Salary</td>
 		<td>Qualification</td>
 		<td>Department</td>
 		<td>Designation</td>
 		<td>Gender</td>
 	</tr>

 	<?php 
   
$conn = mysqli_connect("localhost","root","","empms");

$sql = "SELECT * from employee";

$run = $conn->query($sql);

while ($ft = mysqli_fetch_array($run)) {
	?>

	<tr  style="color: #3366ff;background: white; text-align: center;">
		 <td><?php echo $ft[0];?></td>
		 <td><?php echo $ft[1];?></td>
		 <td><?php echo $ft[2];?></td>
		 <td><?php echo $ft[3];?></td>
		 <td><?php echo $ft[4];?></td>
		 <td><?php echo $ft[5];?></td>
		 <td><?php echo $ft[6];?></td>
		 <td><?php echo $ft[7];?></td>
		 <td><?php echo $ft[8];?></td>
		 <td><?php echo $ft[9];?></td>
		 <td><?php echo $ft[10];?></td>
		 <td><?php echo $ft[11];?></td>
		 <td><?php echo $ft[12];?></td>
		 <td><?php echo $ft[13];?></td>
		 
	</tr>


 <?php 
}


 	


 	?>

 </table>
</head>
<body>
</body>
</html><br><br><br><br><br><br><br><br><br><br>
            <?php include 'footer.php'?>         
