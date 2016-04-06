<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$con=mysqli_connect("db.soic.indiana.edu", "i308s15_team28", "my+sql=i308s15_team28", "i308s15_team28");
//Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL:" .mysqli_connect_error();
}

//escape variables for security sql injection
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$dob = mysqli_real_escape_string($con,$_POST['dob']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);

//insert query to insert form data into the artist table
$sql="INSERT INTO artist(first_name, last_name, dob, gender)
VALUES ('$firstname', '$lastname', '$dob', '$gender')";

//check for error
if (!mysqli_query($con,$sql))
{
	die('Error:'.mysqli_error());
}
echo "1 record added";

mysqli_close($con);

?>
</body>
</html>