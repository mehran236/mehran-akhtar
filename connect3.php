<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
	<style>
body{
	font-family: 'Otomanopee One', sans-serif;
	font-weight: bolder;
	content: "\e110";
    background-image: url('php.jpg');
	background-attachment: fixed;
    background-size: cover;
}
h2{
	background-color: rgba(0,0,0,0.6);
    width: 60%;
    padding: 40px;
	color: white;
	font-size: 40px;
	width:500px;
	text-align:center;
    margin: auto;
}
.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
    border-radius: 10px;
	width:30%;
	font-size:20px;
	margin:auto;
}
.filter{
	width:40%;
	margin:auto;
}
.conne{
	border:10px solid rgba(0,0,0,0.5);
    border-radius:20px;
    background-color:rgba(0,0,0,0.7);
    margin:auto;
    width:60%;
	margin-top:100px;
	padding:10px;
}

 
	</style>
</head>
<body>
</div>
<div class="conne">
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number']; 
$password = $_POST['password'];
$dob = $_POST['dob'];

$sql = "insert into registration (firstName,lastName,gender,email,number,password,dob)values('$firstName','$lastName','$gender','$email','$number','$password','$dob')";


if ($conn->query($sql)){
    echo "<h2>HURRAY! Successfully registered to our Database . <br><>You are ready to rock!</h2>";
    }
    ?>
    <br>
<div class="filter">
<a href="reg.html"><button class="btn-login left">BACK</button></a>
<a href="GROUP3.html"><button class="btn-login right">HOME</button></a>
</div>
</div>
</body>
</html>