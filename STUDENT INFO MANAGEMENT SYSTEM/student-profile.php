<?php
if(!isset($_SESSION)){
	session_start();
}



include_once("connection.php");// this connection of the file to php db


$con = connection(); // to call the connection

if(isset($_POST['submit'])){
	
	$firstname = $_POST['firstname'];
	$mi = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$birthday = $_POST['birthday'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$section = $_POST['section'];
	$address = $_POST['address'];
	$lrn = $_POST['lrn'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$stid = $_POST['stid'];
	$parent = $_POST['parent'];
	$parentnum = $_POST['parentnum'];
	
	
	
	
	$sql = "INSERT INTO `user_info`(`firstname`,`mi`,`lastname`,`birthday`,`age`,`gender`,`section`,`address`,`lrn`,`email`,`contactnum`,`stid`,`parent`,`parentnum`) VALUES ('$firstname','$mi','$lastname','$birthday','$age','$gender','$section','$address','$lrn','$email','$contact','$stid','parent','parentnum')";
	$student = $con->query($sql) or die ($con->error);
	echo header("student Page.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<link rel="stylesheet" href="main.css" />
</head>
<body>
<style>
html {
	scrollbar-width: normal;
	scrollbar-color: red;
	margin: 0;
}
body {
	background-color: #FAFAFA;
	margin: 0;
}


::-webkit-scrollbar {
	width: 12px;
	
}
::-webkit-scrollbar-thumb {
	background: linear-gradient(transparent, #00c6ff);
	border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {/*00c6ff*/
	background: linear-gradient(transparent, red);/*30ff00*/
	
}


* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: sans-serif;
}

.app {
display: flex;
min-height: 100vh;
}

.menu-toggle {
display: none;
position: fixed;
top: 6rem;
right: 2rem;
width: 60px;
height: 60px;
border-radius: 99px;
background-color: #2e3047;
cursor: pointer;
margin-top
}


.hamburger {
position: relative;
top: calc(50% - 2px);
left: 50%;
transform: translate(-50%, -50%);
width: 32px;
}

.hamburger > span,
.hamburger > span::before,
.hamburger > span::after {
  display: block;
  position: absolute;
  width: 100%;
  height: 4px;
  border-radius: 99px;
  background-color: #FFF;
  transition-duration: .25s;
  
}

.hamburger > span::before {
  content: '';
  top: -8px;
}
.hamburger > span::after {
  content: '';
  top: 8px;
}
.menu-toggle.is-active .hamburger > span {
  transform: rotate(45deg);
}
.menu-toggle.is-active .hamburger > span::before {
  top: 0;
  transform: rotate(0deg);
}
.menu-toggle.is-active .hamburger > span::after {
  top: 0;
  transform: rotate(90deg);
}

.sidebar {
flex: 1 1 0;

max-width: 300px;
padding: 2.9rem 1.8rem;
background-color: #2e3047;
padding-top: 17px;
line-height: 25px;
}

.sidebar h3 {
color: #707793;
font-size: 0.75rem;
text-transform: uppercase;
margin-bottom: 0.5em;
}

.sidebar .menu {
margin: 0 -1rem;
margin-top: 50px;
margin-left: 10px;
}

.sidebar .menu .menu-item {
display: block;
padding: 1em;
color: #FFF;
text-decoration: none;
transition: 0.2s linear;
}

.sidebar .menu .menu-item:hover,
.sidebar .menu .menu-item.is-active {


}

.sidebar .menu .menu-item:hover {
border-right: 5px solid #3bba9c;
color: #3bba9c;
}

.content {
flex: 1 1 0;
padding: 2rem;
margin-top: 10px;
}

.content h1 {
color: #3C3F58;
font-size: 2.5rem;
margin-bottom: 1rem;
}

.content p {
color: #707793;
}
@media (max-width: 1424px) {
.sidebar {
max-width: 300px;
font-size: 23px;
}
}
@media (max-width: 740px) {
body {
	
}
}
@media (max-width: 1624px) {

}

@media (max-width: 768px) {
.menu-toggle {
display: block;
}
.content {
padding-top: 8rem;
}
.sidebar {
position: fixed;
top: 0;
left: -300px;
height: 100vh;
width: 100%;
max-width: 300px;
transition: 0.2s linear;
}

.sidebar.is-active {
left: 0;
}
}
.head {
	background-color: #00507D;/*#000505*/
	width: 100%;
	height: 90px;

	
	
}/*student...*/
h2 {
	color: white;
	padding: 1px 96px;
	font-family: arial;
	font-size: 26px;
	margin-top: -47px;

}/*logout...*/
h4 {
	float: right;
	margin-top: -62px;
	margin-right: 40px;
	color: white;
	font-size: 19px;
	font-family: arial;
	cursor: pointer;
	opacity: 100%;
	margin-top: -27px;
}

#educ {
	height: 58px;
	width: 70px;
	margin-top: 20px;
	margin-left: 20px;
}
#logout {
	height: 25px;
	width: 33px;
	margin-top: -30px;
	margin-right: 110px;
	float: right;
	cursor: pointer;
}
#dashboard {
	height: 25px;
	width: 30px;
	gap: 20px;
	margin-top: -90px;
	margin-left: -36px;
	cursor: pointer;
	pointer: cursor;
}
#dash {
	margin-top: -30px;
}
#grade {
	height: 37px;
	width: 47px;
	gap: 20px;
	margin-top: -86px;
	margin-left: -43px;
	cursor: pointer;
	pointer: cursor;
}
#grades {
	margin-top: -34px;
}
#attendance {
	height: 26px;
	width: 33px;
	gap: 20px;
	margin-top: -78px;
	margin-left: -38px;
	cursor: pointer;
	pointer: cursor;
}
#attendances	 {
	margin-top: -35px;
}
#section {
	height: 40px;
	width: 47px;
	gap: 20px;
	margin-top: -78px;
	margin-left: -44px;
	cursor: pointer;
	pointer: cursor;
}
#sections {
	margin-top: -39px;
}
#profile {
	height: 27px;
	width: 33px;
	gap: 20px;
	margin-top: -81px;
	margin-left: -38px;
	cursor: pointer;
	pointer: cursor;
}
#profiles {
	margin-top: -32px;
}
#header {
	font-family: arial;
	font-size: 33px;
}

.bakgf {
	height: 600px;
	width: 770px;
	background-color: white;
	border: 1px solid #ddd;
	box-shadow: rgba(0,0,0,0.12) 1px 1px 10px;
	border-radius: 20px;
	margin-top: 20px;
	margin-left: 110px;
	
}
#headerp {
	color: #BD001F;
	
	margin-left: 20px;
	font-family: arial;
	font-size: 25px;
	margin-top: 20px;
}

#tinfo {
	font-size: 17px;
	margin-left: 20px;
	margin-top: 5px;
}
form {

}

input:focus {
	outline: none;
}
input:focus, input:valid {
	border: 19px solid lightgray;
	background-color: #F2F2FA;
}
select:after{
	o
	background-color: white;
}
select:focus, select:valid {
	outline: none;
	border: 19px solid lightgray;
	background-color: #F2F2FA;
}
#none {
	outline: none;
	border: 19px solid lightgray;
	background-color: #F2F2FA;
}
input[type="text"] {

	
}
.fl {
	display: flex;
}


.fn {
	margin-top: ;
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#firstname {
	height: 35px;
	width: 280px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */

	
}

.mn {
	margin-top: ;
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#middlename {
	height: 35px;
	padding: 10px 20px;
	width: 70px;
	padding: 6px 10px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */

	
}

.ln {
	margin-top: ;
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#lastname {
	height: 35px;
	width: 260px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */

	
}
.sl {
	display: flex;
}

.dob {
	margin-top: 20px;
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#birth {
	height: 35px;
	width: 280px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */

	
}

.age {
	margin-top: 20px;
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#age {
	height: 35px;
	padding: 6px 20px;
	width: 60px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */

	
}
.genders {
	margin-top: 20px;
	margin-left: 50px;
}	
.gender {
	font-size: 19px;
	font-family: arial;
	
		
}
#gender {
	width: 90px;
	height: 35px;
	font-size: 17px;
	font-family: arial;
	margin-top: 11px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	text-align: center;
}

.stpositions {
	margin-top: 20px;
	margin-left: 30px;
}	
.stposition {
	font-size: 19px;
	font-family: arial;
	
		
}

#stposition {
	width: 138px;
	height: 35px;
	font-size: 17px;
	font-family: arial;
	margin-top: 11px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	text-align: center;
}
.tl {
	display: flex;
	margin-top: 20px;
}

.address {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#address {
	height: 35px;
	width: 410px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.address {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#address {
	height: 35px;
	width: 420px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.lrn {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#lrn {
	height: 35px;
	width: 230px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.frthl {
	display: flex;
	margin-top: 20px;
}
.email {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#email {
	height: 35px;
	width: 230px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.contact {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#contact {
	height: 35px;
	width: 140px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.stid {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#stid {
	height: 35px;
	width: 240px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.fthl {
	display: flex;
	margin-top: 20px;
}
.parent {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#parent {
	height: 35px;
	width: 370px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}

.parentnum {
	
	margin-left: 40px;
	font-family: arial;
	font-size: 19px;
}
#parentnum {
	height: 35px;
	width: 280px;
	padding: 10px 20px;
	margin-top: 10px;
	font-family: arial;
	font-size: 16px;
	border: 1.8px solid lightgray;
	border-radius: 3px;
	box-shadow: rgba(0,0,0,0.25) 1px 1px 1	px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
	
	
}
#submit {
		opacity: 90%;
		width: 600px;
		height: 40px;
		background-color: black;
		color: white;
		border-radius: 20px;
		font-size: 20px;f
		font-family: serif;
		cursor: pointer;
		margin-top: 30px;
		margin-left: 60px;
		box-shadow: rgba(0,0,0,0.25) 10px 10px 10px;/*box-shadow: rgba(0,0,0,0.4) 5px 10px 10px; */
	
		
	}
#submit:hover {
	opacity: 100%
}	

</style>

<div class = "head">

<img src = "homepage/logo.png" id = "educ">
<h2>Student Management System</h2>

<a href = "homepage.php" class=""><img src = "homepage/logout.png" id = "logout"><h4>Logout</h4></a>

</div>


<div class="app">

<div class="menu-toggle">
<div class="hamburger">
</nav>
<span></span>
</div>
</div>

<aside class="sidebar">


<nav class="menu">

<a href="admin.php" class="menu-item is-active"><img src = "homepage/dashboard.png" id = "dashboard"><p id = "dash">Dashboard</p></a>
<a href="grades.php" class="menu-item"><img src = "homepage/grade.png" id = "grade" ><p id = "grades">Grades</p></a>
<a href="#" class="menu-item"><img src = "homepage/section.png" id = "section" ><p id = "sections">Section</p></a>
<a href="student-profile.php" class="menu-item"><img src = "homepage/profile.png" id = "profile" ><p id = "profiles">Profile</p></a>

</nav>

</aside>

<main class="content">
<h3 id = "header">PROFILE</h3>
<p></p>

<div class = "bakgf">

	<h3 id = "headerp">Student Info</h3>
	<p id = "tinfo">Please Complete your information</p>
	<br>
<form method = "post">
<div class = "fl">
	<div class = "fn"> <!--TO CONTROL THE INPUT-->
		<label id>First Name:</label><br> <!--LABEL-->
		<input type = "text" required id = "firstname" name = "firstname">
	</div>
	<div class = "mn"> <!--TO CONTROL THE INPUT-->
		<label id>MI:</label><br> <!--LABEL-->
		<input type = "text" required id = "middlename" name = "middlename">
	</div>
	<div class = "ln"> <!--TO CONTROL THE INPUT-->
		<label id>Last Name:</label><br> <!--LABEL-->
		<input type = "text" required id = "lastname" name = "lastname">
	</div>
</div>	
<div class = "sl">
	<div class = "dob"> <!--TO CONTROL THE INPUT-->
		<label id>Date of Birth:</label><br> <!--LABEL-->
		<input type = "text" required id = "birth" name = "birthday">
	</div>
	<div class = "age"> <!--TO CONTROL THE INPUT-->
		<label id>Age:</label><br> <!--LABEL-->
		<input type = "text" required id = "age" name = "age">
	</div>
	<div class = "genders">
	<label class = "gender">Gender: </label><br><!--LABEL-->
		<select type = "text" required id = "gender" name = "gender" >
			<option value = "male" id = "none" selected disabled>Select</option>
			<option value = "male" id = "select" name = "">Male</option>
			<option value = "male" id = "select" name = "">Female</option>
		</select>
	</div>
	<div class = "stpositions">
	<label class = "stposition">Section: </label><br><!--LABEL-->
		<select type = "text" id = "stposition" name = "section">
			<option value = "none" id = "none" disabled selected>Select</option>
			<option value = "male" id = "select">ICT-1A</option>
			<option value = "male" id = "select">ICT-2A</option>
			<option value = "male" id = "select">ICT-3A</option>
			<option value = "male" id = "select">ICT-4A</option>
			<option value = "male" id = "select">ICT-5A</option>
			<option value = "male" id = "select">ICT-6A</option>
			<option value = "male" id = "select">ICT-1B</option>
			<option value = "male" id = "select">ICT-2B</option>
		</select>
	</div>
</div>
<div class = "tl">
	<div class = "address"> <!--TO CONTROL THE INPUT-->
		<label id>Address:</label><br> <!--LABEL-->
		<input type = "text" required id = "address" name = "address">
	</div>
	<div class = "lrn"> <!--TO CONTROL THE INPUT-->
		<label id>Lrn:</label><br> <!--LABEL-->
		<input type = "text" required id = "lrn" name = "lrn">
	</div>
</div>
<div class = "frthl">
	<div class = "email"> <!--TO CONTROL THE INPUT-->
		<label id>Email:</label><br> <!--LABEL-->
		<input type = "email" required id = "email" name = "email">
	</div>
	<div class = "contact"> <!--TO CONTROL THE INPUT-->
		<label id>Contact No. :</label><br> <!--LABEL-->
		<input type = "tel" pattern = "[0-9]{11}"required id = "contact" name = "contact">
	</div>
	<div class = "stid"> <!--TO CONTROL THE INPUT-->
		<label id>Student Id:</label><br> <!--LABEL-->
		<input type = "text" required id = "stid" name = "stid">
	</div>
</div>
<div class = "fthl">
	<div class = "parent"> <!--TO CONTROL THE INPUT-->
		<label id>Parent/Guardian Name:</label><br> <!--LABEL-->
		<input type = "text" required id = "parent" name = "parent">
	</div>
	<div class = "parentnum"> <!--TO CONTROL THE INPUT-->
		<label id>Parent/Guardian Contact No. :</label><br> <!--LABEL-->
		<input type = "tel" pattern = "[0-9]{11}"required id = "parentnum" name = "parentnum">
	</div>
	
</div>
	<button type = "submit" id = "submit" name = "submit">SUBMIT</button>

</form>
</div>
</main>
</div>
<script>
const menu_toggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');

menu_toggle.addEventListener('click', () => {
menu_toggle.classList.toggle('is-active');
sidebar.classList.toggle('is-active');
});
</script>
</body>
</html>
