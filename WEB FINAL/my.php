<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="contact"; // Database name
$tbl_name="contact"; // Table name
// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if (!$con)
{
die("cannot connect");
}
//mysqli_select_db("$db_name")or die("cannot select DB");
// Get values from form
$name = $_POST['name'];
$ph_no = $_POST['email'];
$email = $_POST['subject'];
$concern = $_POST['message'];
// Insert data into mysql
$sql="INSERT INTO $tbl_name VALUES( '$name','$email','$subject', '$message')";
$result=mysqli_query($con,$sql);
// if successfully insert data into database, displays //message "Successful".if($result){
if($result){
echo"<p style=\"text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 200%;\">thank you for your repsonse</p>";
echo "<BR>";
echo "<a href='index.html'>click here to main page</a>";
}
else {
echo "ERROR";
}
