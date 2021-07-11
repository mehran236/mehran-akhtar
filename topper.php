<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet"  href="table.css" >
<style>
    .btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
    border-radius: 10px;
}
</style>
</head>
<body>
<div class="filter">
</div>
<table>
<tr>
<th>sno</th>
<th>uid</th>
<th>name</th>
<th>gender</th>
<th>percent</th>
<th>status</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from(select max(percent) from result)  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["uid"] 
. "</td><td>".$row["name"]. "</td><td>".$row["gender"]. "</td><td>".$row["percent"]. "</td><td>".$row["status"]. "</td></tr>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>