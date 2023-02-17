<?php
if(!isset($_SESSION)){ //to make the system start
	session_start();
}

// include file
include_once("connection.php");// this is the first one that the browser read

$con = connection(); // to call the connection.php

if(isset($_POST['submit'])){

	$firstname = $_POST['firstname'];
	$mi = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$parent = $_POST['parent'];
	$contactnum = $_POST['parentnum'];
	$email = $_POST['email'];
	$sections = $_POST['section'];
	$stid = $_POST['stid'];
	$pic = $_POST['pic'];
	
	$sql = "INSERT INTO `user_info`(`stid`,`pic`,`firstname`,`mi`,`lastname`,`age`,`birthday`,`gender`,`address`,`parent/guardian`,`contactnum`,`email`,`section`) VALUES ('$stid','$pic','$firstname','$mi','$lastname','$age','$birthday','$gender','$address','$parent','$contactnum','$email','$sections')";
	$student = $con->query($sql) or die ($con->error);
	echo header("student Page.php");

}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>HOMEPAGE</title>
		<link rel = "stylesheet" href = "homepage.css">
		<link rel = "icon" type = "image/png" href = "Photo_1674378114468.png">
		<script src = "homepages.js"></script>
	</head>
	<body>
	<style>
	h2 {
		height: 70px;
	}
	.wrapper {
		height: 800px;
		width: 600px;
		margin-left: 170px;
	}
	.label1 {
		display: flex;
		
	}
	


	.fn {
		margin-left: -1px;
		height: 10px;
		font-size: 20px;
		font-family: arial;
		margin-top: -18px;
	}
	#firstname {
		width: 250px;
		font-size: 17px;
		font-family: arial;
		padding: 7px 14px;
	}
	
	
	.mi {
		margin-top: 0;
		font-size: 20px;
		font-family: arial;
		
	}
	#middlename {
		width: 60px;
		padding: 7px 1px;
		font-size: 17px;
		font-family: arial;
		text-align: center;
		
	}
	
	.ln {
		
		font-size: 20px;
		font-family: arial;
		margin-left: 20px;
	}
	#lastname {
		width: 140px;
		font-size: 17px;
		font-family: arial;
		padding: 7px 10px;
		
	}
	.label2 {
		display: flex;
		gap: 27px;
		margin-top: -10px;
	}
	.age {
		
		font-size: 20px;
		font-family: arial;
	}
	#age {
		width: 50px;
		height: 22px;
		font-size: 17px;
		font-family: arial;
		text-align: center;
		padding: 7px 10px;
	}
	#gender {
		margin-left: 0px;
		font-size: 16px;
		font-family: arial;
	}
	.gender {
		margin-top: 6px;
		font-size: 20px;
		font-family: arial;
	}
	#gender {
		width: 80px;
		height: 41px;
		font-size: 17px;
		font-family: arial;
		margin-top: -1px;
	}
	.birthday {
		font-size: 20px;
		font-family: arial;
	}
	#birthday {
		width: 132px;
		height: 25px;
		font-size: 17px;
		font-family: arial;
		padding: 7px 10px;
	}
	.address {
		font-size: 20px;
		font-family: arial;
	}
	#address {
		width: 285px;
		height: 25px;		
		font-size: 17px;
		font-family: arial;
		padding: 7px 10px;
	}
	
	
	.label3 {
		display: flex;
		gap: 20px;
	}
	.parent {
		font-size: 20px;
		font-family: arial;
		margin-top: -10px;
	}
	#parent {
		width: 260px;
		height: 25px;
		font-size: 17px;
		font-family: arial;
		padding: 7px 10px;
	}
	
	.label4 {
		display: flex;
		gap: 18px;
	}
	.email {
		font-size: 20px;
		font-family: arial;
	}
	#email {
		width: 200px;
		height: 25px;
		font-size: 17px;
		font-family: arial;
		padding: 7px 10px;
	}
	#section {
		width: 120px;
		height: 41px;
		font-size: 15px;
		font-family: arial;
		margin-top: -1px;
		
	}
	.section {
		margin-top: 5px;
		font-size: 22px;
		font-family: arial;
	}
	.stid {
		margin-top: 15px;	
		font-size: 20px;
		font-family: arial;
	}
	#stid {
		width: 300px;
		height: 25px;
		font-size: 17px;
		font-family: arial;
		padding: 7px 10px;
	}
	#submit {
		width: 600px;
		height: 40px;
		background-color: black;
		color: white;
		border-radius: 20px;
		font-size: 20px;
		font-family: serif;
		cursor: pointer;
		
	}
	
	#addimg {
		margin-right: -252px;
		margin-top: 127px;
		float: right;	
	}
	#border {
		float: right;
		width: 160px;
		height: 130px;
		border: 1px solid black;
		margin-top: -20px;
		background-position: center;
		background-size: cover
	}
	
	</style>
	<script>
		const addimg = document.querySelector("#addimg");
		var uploaded_image = "";
		
		addimg.addEventListener("change", function(){
			const reader = new FileReader();
			reader.addEventListener("load", () => {
				uploaded_image = reader.result;
				document.querySelector("#border").style.backgroundImage = 'url(${uploaded_image})';
			});
			reader.readAsDataURL(this.files[0]);
		})
	
	</script>
		<!--header-->
		<div class = "headi"></div>
		<h1>STUDENT MANAGEMENT  SYSTEM</h1>
		
		<!--sidebar-->
		<div id = "allsidebar">
		<button id = "ex" onclick = "closeNav()"><b>X</b></button> <!--x button-->
		<h3>GROUP #1</h3>
			<div class = "sidebar">
			<a href = "">HOME</a>
			<a href = "">INFO</a>
			<a href = "">ABOUT</a>
			</div>
		</div>
		<!--Menu icon-->
		<div class = "allmenuicon">
		<button id = "buttmenuicon" onclick = "openNav()">
			<div class = "menuicon"></div>
			<div class = "menuicon"></div>
			<div class = "menuicon"></div>
		</button>
		</div>
		
		<form action = "student.php" method = "post">
		<div class = "wrapper"> <!--ALL-->
			<h2>Student Info Registration Form</h2><br><br>
			<div id = "border"></div>
			
		<div class = "image">
			<input type = "file" id = "addimg" required accept = "image/png, image/jpg" name = "pic">
			
			
		</div>	
			
				<div class = "fn"> <!--TO CONTROL THE INPUT-->
					<label>First name: </label> <!--LABEL-->
					<input type = "text" required id = "firstname" name = "firstname">
				</div><br><br><br>
				<div class = "label1">
				<div class = "mi"> <!--TO CONTROL THE INPUT-->
					<label>MI: </label> <!--LABEL-->
					<input type = "text" required id = "middlename" name = "middlename">
				</div>
				<div class = "ln"> <!--TO CONTROL THE INPUT-->
					<label>Last name: </label> <!--LABEL-->
					<input type = "text" required id = "lastname" name = "lastname">
				</div>
		
			</div><br><br>
		
			<!--TO CONTROL THE INPUT-->
			<div class = "label2">
				<div class = "age"> <!--TO CONTROL THE INPUT-->
					<label>Age: </label> <!--LABEL-->
					<input type = "text" required id = "age" name = "age">
				</div>
			
				<div class = "age"> <!--TO CONTROL THE INPUT-->
					<label>Birthday: </label> <!--LABEL-->
					<input type = "text" required id = "birthday" name = "birthday" >
				</div>
			</div><br><br>
			
			<div class = "label2">
			<label class = "gender">Gender: </label> <!--LABEL-->
					<select type = "text" id = "gender" name = "gender">
						<option value = "male">Male</option>
						<option value = "male">Female</option>
					</select>
			<!--address-->
				<div class = "address"> <!--TO CONTROL THE INPUT-->
					<label>Address: </label> <!--LABEL-->
					<input type = "text" required id = "address" name = "address" >
				</div>
				</div><br><br>
			
			
			
			<!--parent or guardian-->
			<div class = "label3">
				<div class = "parent"> <!--TO CONTROL THE INPUT-->
					<label>Parent/Guardian: </label> <!--LABEL-->
					<input type = "text" required id = "parent" name = "parent" >
				</div>
				<div class = "parent"> <!--TO CONTROL THE INPUT-->
					<label>Contact no.: </label> <!--LABEL-->
					<input type = "text" required id = "parent" name = "parentnum" >
				</div>
			</div><br><br>
				<!--Email / section-->
			<div class = "label4">
				<div class = "email"> <!--TO CONTROL THE INPUT-->
					<label>Student Email:</label> <!--LABEL-->
					<input type = "email" required id = "email" name = "email" >
				</div>
				<label class = "section">Section: </label> <!--LABEL-->
					<select type = "text" required id = "section" name = "section">
						<option selected disabled>ICT SECTION</option>
						<option value = "ict1a">ICT - 1A</option>
						<option value = "ict2a">ICT - 2A</option>
						<option value = "ict3a">ICT - 3A</option>
						<option value = "ict4a">ICT - 4A</option>
						<option value = "ict5a">ICT - 5A</option>
						<option value = "ict6a">ICT - 6A</option>
						<option value = "ict1b">ICT - 1B</option>
						<option value = "ict2b">ICT - 2B</option>
						
					</select>
					
				</div>	<br>
			
				<div class = "stid"> <!--TO CONTROL THE INPUT-->
					<label>Student ID:</label> <!--LABEL-->
					<input type = "text" required id = "stid" name = "stid" >
				</div>
				<br><br><br>
				<button type = "submit" id = "submit" name = "submit">SUBMIT</button>
			</div>
		</form>
	
		
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
 	</body>
</html>