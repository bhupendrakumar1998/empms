<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #B33C0C;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #0CB340;
  color: #0D0CB3;
}

.topnav .icon {
  display: none;
}
#a1
{
float:right;
margin-right:30px;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="welcomeadmin.php" class="active">Home</a>
  <a href="addemp.php">Add Employee</a>
  <a href="viewallemp.php">View Empolyee</a>
  <a href="updateemp.php">Update</a>
  <a href="deleteemp.php">Delete</a>
    <a href="searchemp.php">Search Employee</a>

  <a href="addattendance.php">Attendance</a>
  <a href="viewallattendance.php">View Attendance</a>
  <a href="searchattendance.php">Search Attendance</a>
  <a href="viewleave.php">View Leave</a>
  <a href="adminlogout.php" id="a1">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
