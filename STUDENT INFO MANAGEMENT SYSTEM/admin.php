<?php
if(!isset($_SESSION)){
	session_start();
}

// to recognize the user
if($_SESSION['Access'] && $_SESSION['Access'] == "admin"){
	#echo "Welcome ".$_SESSION['UserLogin']; 
}else if($_SESSION['Access'] && $_SESSION['Access'] == "teacher"){
	echo header("location: teacher.php");
}else{
	echo header("location: student.php");
}

include_once("connection.php");// this connection of the file to php db





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet" href="main.css" />
</head>
<body>
<style>
html {
	scrollbar-width: normal;
	scrollbar-color: red;
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
top: 2rem;
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
margin-top: 1px;
}

.content h1 {
color: #3C3F58;
font-size: 2.5rem;
margin-bottom: 1rem;
}

.content p {
color: #707793;
}

@media (max-width: 1024px) {
.sidebar {
max-width: 200px;
}
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
	width: 90px;
	margin-top: 20px;
	margin-left: 10px;
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
.total-st {
	background-color: lightblue;
	width: 280px;
	height: 170px;
}

</style>

<div class = "head">

<img src = "homepage/educ.png" id = "educ">
<h2>Student Management System</h2>

<a href = "homepage.php" class=""><img src = "homepage/logout.png" id = "logout"><h4>Logout</h4></a>

</div>


<div class="app">

<div class="menu-toggle">
<div class="hamburger">
<span></span>
</div>
</div>

<aside class="sidebar">


<nav class="menu">

<a href="admin.php" class="menu-item is-active"><img src = "homepage/dashboard.png" id = "dashboard"><p id = "dash">Dashboard</p></a>
<a href="#" class="menu-item"><img src = "homepage/grade.png" id = "grade" ><p id = "grades">Student Grades</p></a>
<a href="#" class="menu-item"><img src = "homepage/attendance.png" id = "attendance" ><p id = "attendances">Student Attendance</p></a>
<a href="#" class="menu-item"><img src = "homepage/section.png" id = "section" ><p id = "sections">Class Section</p></a>

</nav>

</aside>

<main class="content">
<h1>Welcome <?php echo $_SESSION['Access'];?></h1>
<p></p>

<br>
<div class = "total-st"></div>
<div class = "total-st"></div>
<div class = "total-st"></div>
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