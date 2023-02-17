<?php
if(!isset($_SESSION)){ //yung session variable ay sya yung nagiistore ng data 
	session_start(); // to start the session
}// si isset naman ay function sa php kung saan dto ichecheck niya kung yung variable ay set o null 

// include file
include_once("connection.php");// para maconnect tong file nato sa connection file

//connection(); -this how you call a fuction

$con = connection(); // to call the connection.php //yung function ay ginawang variable

if(isset($_POST['login'])){// so yung login ay yung variable sa submit button then kapag iclick ni user mag rurun yung logic dto 
	$surname = $_POST['surname'];  //so dito ang superglobal array ng php na post ay dito naoobtain ni post yung value sa db para yung ilalagay ni user na data is dapat same sa data sa db
	$password = $_POST['password'];
									#note that user,row and total are just a variable
	$sql = "SELECT * FROM user_list WHERE surname = '$surname' AND password = '$password'";
	$user = $con->query($sql) or die ($con->error); #note that user,row and total are just a variable
	$row = $user->fetch_assoc(); # so and -> ay isang operator sa php naginagamit sa oop ng php kung san ang operator nato ay ginagamit para makaccess sa properties ng isang object or variable
	$total = $user->num_rows; #ang query naman ay ito yung nagrerequest ng data or info from the database ito ay pwedend gamitin sa paraan ng pagdelete, insert, select update ng isang data sa database
	# ang die naman ay ginagamit para mastop yung excution at ito ay magdidisplay ng error ex else o alert
	if($total > 0){ # ang FETCH_ASSOC() naman ay ginagamit para ma retrieve yung next row data sa resullt set
		$_SESSION['UserLogin'] = $row['username'];# ang NUM_ROW() naman ay ginagamit para maindicate yung number ng row sa result set para makuha yung data sa ininsert na data ni user
		$_SESSION['Access'] = $row['access'];
		$_SESSION['assignsection'] = $row['assignsection'];
		echo header("Location: admin.php");
	}else{
		echo "<script>alert('Invalid login, Please try again')</script>"; //kapag no user found
		return;
	}
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
		<!--Sign up-->
		
		<form action = "" method = "post">
		<div class = "wrapper"> <!--ALL-->
			<h2>LOGIN PAGE</h2>
			
			<div class = "input-data"> <!--TO CONTROL THE INPUT-->
			<input type = "text" required id = "username" name = "surname">
			<label>Surname</label> <!--LABEL-->
			<div class = "underline"></div><!--BOTTOM COLOR-->
			</div><br>
			
			<div class = "input-data"> <!--TO CONTROL THE INPUT-->
			<input type = "password" required id = "passwords" name = "password"> 
			<label>Password</label> <!--LABEL-->
			<div class = "underline"></div><!--BOTTOM COLOR-->
			</div>
			
			
			<!--checkbox/showpassword-->
				<input type = "checkbox" id = "check-box" onclick = "myFunction()"></input><label id = "showpass"> show password</label><br>
				
				<!--submit-->
				<button type = "submit "id = "login" name = "login">Login</button>
				</form>
		</div>
		</br></br></br></br></br></br></br></br>
 	</body>
</html>