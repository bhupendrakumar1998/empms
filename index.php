<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
 
    <style type="text/css"> 
   
    *{
    	padding: 0px;
    	margin: 0px;

    }
    body{
    	background: white;
    }
    section{
    	width: 100%;
    	height: 100vh;
    }
    #home{
    	background: honeydew;
    }
    #login{
      background: honeydew;
    }
    coverhome{
    	width: 100%;
    	height: 100%;
    	background: rgba(0,0,0,0.6);
    }
    #top_head{
    	width: 100%;
    	height: 12vh;
    	padding: 10px 0px;
    	margin-top: 4px;
    	
    }
    #p{
    	margin-left: 100px;
    	margin-top: 10px;
    	width: 25%;
      }
    #p h1{
    	font-size: 33px;
    	color: #3366ff;
    	font-family: batang;
    	cursor: pointer;
    }
    #p h4{
    	font-size:19px;
    	color:gray;
    	font-family: batang;
    	cursor: pointer;
    }
    #top_nav{
    	width: 100%;
    	height: 8vh;
    	padding: 10px 0px;
    	box-shadow: 3px 2px 3px 2px gray;
    	background: white;
    	margin-top: 10px;
    	position: fixed;
    }
    #admin{
    	float: right;
    	margin-right: 30px;
    	margin-top: -80px;
    	font-size: 20px;


    }
     
     #admin a{
    	text-decoration: none;
    	margin: 5px;
 	     color: orange;
    	font-family: arial;

    }

    #admin img{
    	width:50px;
    	height: 50px;
    	border-radius: 10px;
    }
    #links{
    	margin-left: 100px;
    	margin-top: 16px;
    }
    #links a{
    	text-decoration: none;
    	margin: 5px;
    	padding: 5px 10px;
    	border-left: 2px solid gray;
    	transition: 0.9s;
    	font-size: 20px;
    	color: orange;
    	font-family: arial;

    }
    #links a:hover{
    	transition: 0.9s;
    	text-decoration: underline;
    }
    #slider_box1{
      width: 80%;
      height: 300px;
      background: url('slider_img/i2.jpg');
      background-size: cover;
      border-radius: 10px;
      margin: 12% auto;
      animation: name 20s infinite;
    }
    @keyframes name{
      0%{
        background: url('slider_img/i3.jpg');
      background-size: cover;
      }
      20%{
        background: url('slider_img/i4.jpg');
      background-size: cover;
      }
      40%{
        background: url('slider_img/i5.jpg');
      background-size: cover;
      }
      60%{
        background: url('slider_img/i6.jpg');
      background-size: cover;
      }

      80%{
        background: url('slider_img/i1.jpg');
      background-size: cover;
      }

      100%{
        background: url('slider_img/i7.jpg');
      background-size: cover;
      }


    }
    #slider_box2{
      width: 100%;
      height:100%;
      background:rgba(255, 55,0, 0.4);
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: 0.9s;
      cursor: pointer;
      
    }

    #slider_box2 h1{
      font-size: 30px;
      color: white;
      font-family: arial;
      padding: 10px 10px;
      animation: wrd 0.3s infinite;
    }
    @keyframes wrd{
      0%{
        letter-spacing: 2px;

      }
      100%{
        letter-spacing: 4px;
      }
    }

     #slider_box2 h3{
      color: #3366ff;
      font-family: arial;
      
    }

    #main_cont{
      width: 600px;
      height: 230px;
      background: white;
      margin: 20% auto;

    }
    #footer{
      width: 100%;
      height: 15%;
      padding: 10px 0px;
      background: #554668;
      margin-bottom: 8px;
    }
    #footer h3,h4{
      margin-left: 20px;
      color: white;
    }
    #label{
      margin-left: 400px;
      padding: 5px 5px;
      margin-top: -30px;
      color: white;
    }
    #label_shr{
      float: right;
      margin-right: 100px;
      padding: 5px 5px;
      margin-top: -60px;
      color: white;
    }
    #label_shr img{
      width: 30px;
      height: 30px;
      border-radius: 5px;
      margin: 5px 5px;
    }
    #top_nav img{
      wisth: 50px;
      height: 50px;
      border-radius: 10px;
      margin-top: -30px;
      line-height: 50px;
    }
   </style>
      

</head>
<body>

	<section id ="home">
		<div id ="coverhome">

			<div id ="top_head">


				<div id ="p"><h1>EMPLOYEE</h1><h4>Management or Staff manage</h4> </div>


        <div id="admin">
          <p><img src="images/b1.png"><br>
           <a href="emplogin.php" target="_blanck">Employee Login</a> </p>
          
        </div>
			</div>
			<div id ="top_nav">

				<div id ="links">

          <a href="#home"><img src="images/i9.jpg"></a>
          
          <a href="#home">Home</a>
          <a href="aboutus.php">About Us</a>
           <a href="adminlogin.php">Admin Login</a> 
           <a href="contactus.php">Contact Us</a>
            
				</div>
        <br>

			</div>
              <div class="row">
        <div class="col-md-12">
             <marquee class="marqueeh1"><b>Welcome to Employee Management System</b> </marquee>
        </div>  
    </div>       

      <div id ="slider_box1">
        <div id ="slider_box2">
     
     <h1>EMPLOYEE</h1><h3>management</h3>
      </div>
      </div>


		</div>
	</section>
</body>
</html>
<?php include('footerin.php');?>
