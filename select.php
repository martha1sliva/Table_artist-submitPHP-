<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


$con=mysqli_connect("db.soic.indiana.edu", "i308s15_team28", "my+sql=i308s15_team28", "i308s15_team28");

//checking conection
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL:" .mysqli_connect_error();
}

$sql = "SELECT * FROM artist";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
 //output data from each row
 while($row = mysqli_fetch_assoc($result)) {
	
echo "Name: " .$row["first_name"]. " " .$row["last_name"]. "<br>" ."DOB: " .$row["dob"]. "<br>" ."Gender: " .$row["gender"];

}

} else 
{
echo "0 results";
}



mysqli_close($con);
?>
</body>
</html>

