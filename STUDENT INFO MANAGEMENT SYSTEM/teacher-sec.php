<?php
if(!isset($_SESSION)){
	session_start();
}



include_once("connection.php");// this connection of the file to php db

$con = connection();

$sql = "SELECT * FROM user_info"; //to called your db //if you want to decending the student you can add ORDER BY id DESC
$students = $con->query($sql) or die ($con->error);
$row = $students->fetch_assoc();



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
margin-top: 10px;
}

.content h1 {
color: #3C3F58;
font-size: 2.5rem;
margin-bottom: 1rem;
}



@media (max-width: 1424px) {
.sidebar {
max-width: 300px;
font-size: 23px;
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
	width: 70px;
	margin-top: 20px;
	margin-left:20px;
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
	margin-top: -45px;
}



#dashboardt {
	font-size: 29px;
	font-family: arial;
	font-weight: bold;
	color: black;
	
}
.alldash {
	margin-top: 10px;
	display: flex;
	gap: 10px;
}
#total-st {
	background-color: #0A9DC9;
	width: 320px;
	height: 150px;
	border-radius: 10px;
}
#total-male {
	background-color: #0AC985;
	width: 320px;
	height: 150px;
	border-radius: 10px;
}
#total-female {
	border-radius: 10px;
	background-color: #FF40BF;
	width: 320px;
	height: 150px;
}
#tts {
	font-family: arial;
	font-size: 18px;
	margin-top: 13px;
	margin-left: 20px;
	color: white;
}
#tns {
	font-size: 30px;
	margin-top: 20px;
	margin-left: 20px;
	font-family: arial;
	color: white;
}
#ttsinfo {
	font-size: 17px;
	margin-top: -28px;
	text-align: center;
	font-family: arial;
	color: white;
	opacity: 90%;
}
#ttsinfo:hover {
	opacity: 100%;
}
#btts {
	background-color: #077799;
	width: 100%;
	height: 40px;
	margin-top: 21px;
	border-radius: 10px;
}

#ttm {
	font-family: arial;
	font-size: 18px;
	margin-top: 10px;
	margin-left: 20px;
	color: white;
}
#tnm {
	font-size: 30px;
	margin-top: 21px;
	margin-left: 20px;
	font-family: arial;
	color: white;
}
#ttminfo {
	font-size: 17px;
	margin-top: -28px;
	text-align: center;
	font-family: arial;
	color: white;
	opacity: 90%;
	
}
#ttminfo:hover {
	opacity: 100%;
}
#bttm {
	background-color: #09AD73;
	width: 100%;
	height: 40px;
	margin-top: 24px;
	border-radius: 10px;
}

#ttf {
	font-family: arial;
	font-size: 18px;
	margin-top: 10px;
	margin-left: 20px;
	color: white;
}
#tnf {
	font-size: 30px;
	margin-top: 21px;
	margin-left: 20px;
	font-family: arial;
	color: white;
}
#ttfinfo {
	font-size: 17px;
	margin-top: -28px;
	text-align: center;
	font-family: arial;
	color: white;
	opacity: 90%;
	
}
#ttfinfo:hover {
	opacity: 100%;
}
#bttf {
	background-color: #C73295;
	width: 100%;
	height: 40px;
	margin-top: 24px;
	border-radius: 10px;
}
.bakgf {
	height: 800px;
	width: 970px;
	background-color: white;
	border: 1px solid #ddd;
	box-shadow: rgba(0,0,0,0.12) 1px 1px 10px;
	margin-left: 10px;
	
	margin-top: 10px;
	
}
#mst {
	font-family: arial;
	font-size: 25px;
	margin-top: 30px;
	margin-left: 30px;
}
#numlist {
	width: 100px;
	height: 30px;
	padding: 10px;
	box-shadow: rgba(0,0,0,0.12) 2px 2px 2px;
	margin-top: -2px;
	border-radius: 1px;
	font-size: 19px;
	padding: 10px 10px;
}
input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
	padding: 0px 4px;
	width: 25px;
	height: 26px;
	
	
}
#numlist {
	
	
}
.numlist {
	display: flex;
	gap: 8px;
	margin-left: 30px;
}
#show {
	font-size: 20px;
	
}
#entries {
	font-size: 20px;
}
#search {
	font-size: 20px;
	margin-left: 50px;
	margin-top: 0px;
}
#searchb {
	height: 38px;
	width: 445px;
	margin-top: -5px;
	margin-left: 0px;
	border-radius: 5px;	
	font-family: arial;
	font-size: 18px;
	padding: 5px 20px;
}
form {
	
}
#enter {
	width: 70px;
	height: 40px;
	background-color: black;
	color: white;
	font-family: arial;
	font-size: 17px;
	margin-left: 0px;
	border-radius: 10px;
	cursor: pointer;
	margin-top: -5px;
}
.enter {

}
table {
	border: 1px solid black;
	border-collapse: collapse;
	margin-left: 30px;
	
}
tr, th, td{
	border: 1px solid black;
	width: 275px;
	height: 50px;
	text-align: left;
	padding-left: 20px;
	
	
	
	
}
th {
	background-color: #BAE6FF;
	color: black;
	padding: 15px 20px;
	font-size: 23px;
	font-family: arial;
}
td {
	font-size: 20px;
	
	
	
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
#num {
	width: 60px;
	padding: 0px 0px;
	text-align: center;
	
}
#options {
	padding: 0px 50px;
	padding-left: 20px;
	width: 10px;
	
	
	
	
}
#edit {
	padding: 7px 20px;
	color: white;
	background-color: blue;
	border: none;
	font-family: arial;
	font-size: 18px;
	cursor: pointer;
	letter-spacing: 2px;
	width: 140px;
	height: 35px;
	opacity: 85%;
	cursor: pointer;
	margin-left:40px;
	border-radius: 10px;
	box-shadow: rgba(0,0,0,0.5) 4px 5px 10px;
}
#edit:hover {
	opacity: 100%;
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
<span></span>
</div>
</div>

<aside class="sidebar">


<nav class="menu">

<a href="admin.php" class="menu-item is-active"><img src = "homepage/dashboard.png" id = "dashboard"><p id = "dash">Dashboard</p></a>
<a href="teacher-grade.php" class="menu-item"><img src = "homepage/grade.png" id = "grade" ><p id = "grades">Student Grades</p></a>

<a href="teacher-sec.php" class="menu-item"><img src = "homepage/section.png" id = "section" ><p id = "sections">Class Section</p></a>

</nav>

</aside>

<main class="content">


<br>
<h1 id = "dashboardt">LIST OF <?php echo $_SESSION['assignsection'];?> STUDENTS</h1>
<br>
<div class = "bakgf">

	<h5 id = "mst">Manage Students</h5>
	<br><hr>
	<br><br>
	
	<form action = "teacher-sec-result.php" method = "get">
		<div class = "numlist">
		<p id = "show">Show</p>
		<input type = "number" id = "numlist" value = "10"step = "5" min = "10" max = "30">	
		<p id = "entries">entries</p>
		<p id = "search">Search: </p>
		<input type = "text" id = "searchb" name = "enter" placeholder = "Student Name/LRN">
		<button id = "enter" >Enter</button>
	</div>
	</form>

	<br><br>
	<table>
		<tr>
			<th id = "num">No.</th>
			<th id>Fullname</th>
			<th>LRN</th>
			<th>Option</th>
		</tr>
		<?php do{ ?>
		<tr>	
			<td id = "num"><b><?php echo $row['id']; ?></b></td>
			<td><?php echo $row['firstname']." ".$row['mi']." ".$row['lastname']; ?></td>
			<td><?php echo $row['lrn']; ?></td>
			
			
			<td id = "options">
				
				<form action = "teacher-sec-view.php">
				<input type = "submit" id = "edit" value = "View">
				</form>
			</td>	
			
		</tr>
		<?php }while($row = $students->fetch_assoc()) ?>
	
	</table>
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
<!--
<tr>
			<td id = "num"><b>1</b></td>
			<td id = "name">JOHN</td>
			<td>099</td>
			<td  >
				<div id = "option">
				<button id = "edit">Edit</button>
				<button id = "view">View</button>
				<button id = "delete">Delete</button>
				</div>
			</td>	
			
		</tr>
		<tr>
			<td id = "num"><b>2</b></td>
			<td id = "name">JOHN</td>
			<td>099</td>
			<td >
				<div id = "option">
				<button id = "edit">Edit</button>
				<button id = "view">View</button>
				<button id = "delete">Delete</button>
				</div>
			</td>
			
		</tr>
		<tr>
			<td id = "num"><b>3</b></td>
			<td id = "name">JOHN</td>
			<td>099</td>
			<td >
				<div id = "option">
				<button id = "edit">Edit</button>
				<button id = "view">View</button>
				<button id = "delete">Delete</button>
				</div>
			</td>
			
		</tr>
		<tr>
			<td id = "num"><b>4</b></td>
			<td id = "name">JOHN</td>
			<td>099</td>
			<td >
				<div id = "option">
				<button id = "edit">Edit</button>
				<button id = "view">View</button>
				<button id = "delete">Delete</button>
				</div>
			</td>-->
		