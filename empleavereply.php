<?php include 'header.php'?>
<?php include 'menu1.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Reply Of Leaves By Admin </title>
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
             <div class="panel-heading" style="text-align:center; font-family:'algerian'; font-size:15pt; color:blue;">Reply Of Leaves By Admin </div>
             <div class="panel-body" >
                     	<table class="table table-bordered" style="margin-bottom:10px" >
                            <tr bgcolor="#9acqe8">
                                <td> <label> Emp Id</label></td>
                                <td> <label>Status</label></td>
                                <td> <label>Admin Action</label></td>
                            </tr>
                             <form action="" method="post">
                                <tr bgcolor="#9acqe8">
                                 <td> <input type="text" name="id" class="form-control" placeholder=" कर्मचारी आईडी दर्ज करें " required/></td>
                                 <td><select class="form-control" name="status">
                                    <option value="">----select--</option>
                                    <option value="Accept">Accept</option>
                                    <option value="Reject">Reject</option>
                                    <option value="Running">Running</option>
                                    <option value="Pending" >Pending</option>
                                     </select>
                                </td>
                                <td><input type="submit" class="btn btn-primary" name="action" value="Action"></td>
                             </tr>
                         </form>
                     </table>
      <?php 
       $conn = mysqli_connect("localhost","root","","empms");
       if(isset($_POST['action'])){
       $id = $_POST['id'];
       $st  = $_POST['status'];
       $sql = "SELECT * from leaves where id ='$id'";
       $re = $conn->query($sql);
              if(!$ftt = mysqli_fetch_array($re)){
                   echo '<script>alert("Invalid Id")</script>';
                   }
              else{
                  $cmd ="UPDATE leaves SET status = '$st' where id = '$id'";
                  $run = $conn->query($cmd);
                      if($run){
        ?>
          <script type="text/javascript">alert("Leaves Update Sucessfully")</script>
        <?php
       
       }
     }

     }

     ?>
                  </div>
             </div>
           </div>
        </div>
      </div>
      </body>
</html><br><br><br><br><br><br><br><br><br>
 <?php include 'footer.php'?>
                           