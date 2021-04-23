<!DOCTYPE html>
<html>
<body>
<?php
$host="your_host";
$username="your_user";
$password="your_pw";
$database="your_db";
$conn=mysqli_connect($host,$username,$password,$database);
mysqli_query($conn,"SET NAMES 'utf8'");
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{ echo "Success to connect to MySQL"; }
?>
</body>
</html>