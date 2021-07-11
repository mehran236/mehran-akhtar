<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet"  href="table.css" >
</head>
<body>
    <div class="bo">
<div class="filter">
</div>
<table>
<tr>
<th>id</th>
<th>firstName</th>
<th>lastName</th>
<th>gender</th>
<th>email</th>
<th>password</th>
<th>number</th>
<th>dob</th>
<th>Date/Time</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstName,lastName,gender,email,password,number,dob,date_time  FROM registration ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"] 
. "</td><td>".$row["lastName"]. "</td><td>".$row["gender"]. "</td><td>".$row["email"]. "</td><td>".$row["password"]. "</td><td>". $row["number"]."</td><td>".$row["dob"] ."</td><td>".$row["date_time"] . "</td></tr>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
</body>
</html>