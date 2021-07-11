<!DOCTYPE html>
<html>
<head>
<style>
    .ant{
    border:10px solid rgba(0,0,0,0.5);
    border-radius:20px;
    background-color:rgba(0,0,0,0.6);
    margin:auto;
    width:60%;
    margin-top:60px;
}
.bg{
    width:100px;    
    margin: auto;
}
.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
    font-size:20px; 
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
    text-align:center;
    font-size:40px;
    background-color:#d7c977;
    padding:10px;
    border-radius:10px;
}
</style>
</head>
<body>
</div>
<div class="ant" >
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$sql = "delete from registration where firstName='$firstName' AND lastName='$lastName' ";
$result = $conn->query($sql);

if ($conn->query($sql)){
    echo "<h2>Dear User! Your data is no more in our database.If this is done by mistake then kindly ask your admin to register you again<br><br>Good Bye !</h2>";
    }
    ?>
    <div class="bg">
<a href="GROUP3.html"><button class="btn-login">BACK</button></a>
</div></div>
</body>
</html>