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
        <title>Employee Login</title>
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
        <h1>Welcome:<br></h1><h3><?php echo"". $_SESSION['email_emp'];?></h3>
         <div class="col-md-12">
             <marquee class="marqueeh1"><h3>Welcome To <?php echo"". $_SESSION['email_emp'];?></h3></marquee>
        </div> 
         <table style="width:100%">
    <tr>
	<td style="text-align:center">
           <img src="images/emp.jpg" height="350px" width="700px"><br> 
                  <h3>User-Id: <b><u><?php echo $_SESSION['id'];?></u></b><br></h3><h3><?php echo "Employee Email :". $_SESSION['email_emp'];?></h3>
 
           
        </td>
    </tr>
</table>
    </body>
</html>
  <?php include 'footer.php'?>            