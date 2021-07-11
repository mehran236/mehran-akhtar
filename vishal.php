<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="loginattempt";
$atmp=0;
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$atmp=$_POST['hidden'];
if($atmp<4){
$query = "select * from loginattempt where username='".$user."' and password='".$pass."'";
$result = mysqli_query($conn, $query);
if($result){
if(mysqli_num_rows($result)){
while(mysqli_fetch_array($result, MYSQL_BOTH)){

echo'<script type="text/javascript">alert("you are login successfully")</script>';
?>
<script type="text/javascript">
window.location.href="newpage.php";
</script>
<?php
}
}
else{
$atmp++;

echo'<script type="text/javascript">alert("error and try again and the number of attemp is '.$atmp.'")</script>';
}
}
}
if($atmp==4){
echo'<script type="text/javascript">alert("login limit exceed")</script>';
}
}

?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table align="center">
<?php
echo"<input type='hidden' name ='hidden' value='".$atmp."'>";

?>
<tr>
<td>Username</td>
<td><input type="text" name="user" <?php if($atmp==4){?> disabled="disabled" <?php } ?>placeholder="enter username"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" placeholder="enter password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" <?php if($atmp==4){?> disabled="disabled" <?php } ?> name="login" value="Login"></td>
</tr>
</table>
</form>
</body>
</html> 