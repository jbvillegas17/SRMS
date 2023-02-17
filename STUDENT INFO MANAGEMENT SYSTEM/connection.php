<?php
//set up connection from the database

function connection(){ // make a function and called it in the login file
	
	#this is how you connect from the db
	$host = "localhost"; // to connect from the localhost
	$username = "root"; // username
	$password = ""; // password
	$database = "student_info_management_system"; // your db name
	
	$con = new mysqli($host, $username, $password, $database); // you put to the var called $con
	
	#testing of con var
	if($con->connect_error){
		echo $con->connect_error; // systax for connection in db
	}else{
		return $con;
	}
	
}
/*SELECT user_list.username, user_info.section, user_info.pic, user_info.firstname, user_info.mi, user_info.lastname, user_info.age, user_info.birthday, user_info.gender, user_info.address, user_info.parent, user_info.contactnum, user_info.email, user_info.stid
FROM user_list
INNER JOIN user_info ON user_list.stid = user_info.stid*/

?>