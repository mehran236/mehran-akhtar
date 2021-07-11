<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
	font-family: 'Otomanopee One', sans-serif;
	font-weight: bolder;
	content: "\e110";
    background-image: url('php.jpg');
	background-attachment: fixed;
    background-size: cover;
}
.filter{
	width:100%;
	
}
        h2{
        background-color:red ;
        color: yellow;
        margin: auto;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
        font-size: 40px;
    }
    h3{
	color: yellow;
    border-radius:30px;
	backdrop-filter: blur(20px);
	font-size: 60px;
	width:500px;
    height:100px;
	padding:30px;
	text-align:center;
   margin:auto;
}
    .btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
    border-radius: 10px;
    width:150px;
    padding:30px;
    margin: auto;;
}
.cont{
    border:10px solid rgba(0,0,0,0.5);
    border-radius:20px;
    background-color:rgba(0,0,0,0.7);
    margin:auto;
    width:60%;
}
    </style>
</head>
<body>
    <br><br><br>
<div class="cont">
<?php
$username=$_POST['username'];
$password=$_POST['password'];

$con = new mysqli("localhost","root","","test");
if($con->connect_error){
    die("Failed to connect: " .$con->connect_error);   
} else{
    $stmt=$con->prepare("select * from loginform where username =?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result =$stmt->get_result();
    if($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password){
            echo "<h3>Login Successful !!</h3>";
        }
    }else{
        echo "<h2 >Incorrect credentials! Username or password</h2>";

    }
}
?>
<div class="filter"></div>
<a href="GROUP3.html"><button class="btn-login">CONTINUE</button></a>
</div></div>
</body>
</html>