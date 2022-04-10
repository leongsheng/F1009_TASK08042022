<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://kit.fontawesome.com/73fb1245eb.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>.error {color: #FF0000;margin-left: 350px;}
	.error >p{margin-left:380px;}
	.check{margin-left: 420px;}
	.check2{margin-left:220px;}
</style>
</head>

<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post" action="register_check.php">
				<img src="img/title.png">
				<h4 class="title">Register</h4>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" class="input" name="name">
							  <span class="error">*required</span>
           		   </div>
           		</div>  
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa fa-address-book-o"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>NRIC</h5>
           		    	<input type="text" class="input" name="nric">
						   <span class="error">*required</span>
            	   </div>
            	</div>
				<div class="input-div pass">
                    <div class="i"> 
                         <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="div">
                         <h5>Email Address</h5>
                         <input type="text" class="input" name="email">
						 <span class="error">*required(input_valid_email)</span>
                 	</div>
				</div>
				<div class="input-div pass">
                    <div class="i"> 
                         <i class="fa-solid fa-envelope"></i>
                    </div>
                         <select name="state">
							 <opiton selected="selected">State</option>
							 <?php
							 	$states=array('Kedah','Johor','Kelantan','Melaka','Negeri Sembilan','Pahang','Penang','Perak','Perlis','Selangor','Terengganu','Sabah','Sarawak','Kuala Lumpur','Labuan','Putrajaya');
							 	foreach($states as $state){
									 ?>
									 <option value="<?php echo $state?>"><?php echo $state?></option>
									 <?php
								 }?>
						 </select>
				</div>
				<div class="input-div pass">
                    <div class="i"> 
                         <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="div">
                         <h5>Password</h5>
                         <input type="password" class="input" id="myInput" name="password">
						 <input type="checkbox" class="check2" onclick="myFunction()"><span class="check">Show_Password</span>
                 	</div>
				</div>
				<div class="input-div pass">
                    <div class="i"> 
                         <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="div">
                         <h5>Verify Password</h5>
                         <input type="password" class="input" id="myInput2" name="password2">
						 <input type="checkbox" class="check2" onclick="myFunction2()"><span class="check">Show_Password</span>
                 	</div>
				</div>
            	<a href="#">Need Help?</a>
            	<input type="submit" class="btn" value="Register" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<script>
	function myFunction(){
	var x =document.getElementById("myInput");
	if(x.type === "password"){
		x.type ="text";
	}else{
		x.type="password";
	}
	}
	function myFunction2(){
		var y=document.getElementById("myInput2");
		if(y.type==="password"){
			y.type="text";
		}
		else{
			y.type="password";
		}
	}
	</script>
</body>
</html>