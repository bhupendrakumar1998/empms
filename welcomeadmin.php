<?php include 'header.php'?>
 <?php include 'menu1.php'?>
<?php
session_start();
if(!isset($_SESSION['admin']))
{
header('location:adminlogin.php');
}
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <html>
    <head>
        <title>Admin Login</title>
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
        <h1>Welcome:<br></h1><h3><?php echo"". $_SESSION['admin'];?></h3>
         <div class="col-md-12">
             <marquee class="marqueeh1"><h3>Welcome to <?php echo"". $_SESSION['admin'];?></h3></marquee>
         </div>
        <table style="width:100%">
    <tr>
	<td style="text-align:center">
           <img src="images/admin.png" height="350px" width="700px"><br> 
                  <h1>Welcome:<br></h1><h3><?php echo"". $_SESSION['admin'];?></h3>
 
           
        </td>
    </tr>
</table>
             
    </body>
</html>
        
            <?php include 'footer.php'?>         
