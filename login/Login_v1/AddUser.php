<html>
<body>

<?php

$Email=$_POST['email'];
$Username=$_POST['username'];
$Password=$_POST['password'];
$Type=$_POST['typeofusers'];
$con = mysql_connect("localhost","root","");
mysql_select_db("bella", $con);

$sql = "INSERT INTO users (Email, Username, Passwordi, TypeOfUsers)
VALUES ('".$Email."', '".$Username."', '".$Password."','".$Type."')";
mysql_query ($sql,$con);
mysql_close ($con);
echo'<script type="text/javascript">alert("Regjistrimi u krye me sukses");window.location=\'index.html\';</script>';  

?>



</body>

</html>