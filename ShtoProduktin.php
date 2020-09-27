<html>
<body>
<?php
if(!isset($_SESSION))
{
session_start();
}

$Produkti=$_POST['produkti'];
$Photo=$_POST['photo'];
$ID=$_SESSION['ID'];
$con = mysql_connect ("localhost","root","");
mysql_select_db("bella", $con);
$sql = "insert into products(AdminID,Produkti,Photo) values('".$ID."','".$Produkti."','".$Photo."')";
mysql_query ($sql,$con);
mysql_close ($con);
echo'<script type="text/javascript">alert("Produkti u shtua me sukses");window.location=\'indexAdmin.php\';</script>';  
?>
</body>
</html>