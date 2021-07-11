<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <style>
        .btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
    font-size:27px; 
	color: #fff;
    border-radius: 15px;
}
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
            margin: 10% auto;
            font-family: 'Oswald', sans-serif;
            color: beige;
            font-size:40px;
            height:200px;
}
.bg{
    width:100px;    
    margin: auto;
}
.ant{
    border:10px solid rgba(0,0,0,0.5);
    border-radius:20px;
    background-color:rgba(0,0,0,0.6);
    margin:auto;
    width:60%;
    margin-top:60px;
}
    </style>
</head>
<body>
<div class="ant">
<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "update loginform set password='$password' where username='$username'";
if ($conn->query($sql)){
echo "<h2>You have succesfully changed your password.<br>! Relogin with your new password !</h2>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
<div class="bg">
<a href="login.html"><button class="btn-login">BACK</button></a>
</div> </div>  
</body>
</html>
