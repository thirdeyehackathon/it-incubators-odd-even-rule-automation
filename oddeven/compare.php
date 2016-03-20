<!DOCTYPE html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="oddeven";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
else
echo "connected successful<br>";
echo "Today is " . date("Y/m/d") . "<br>";
$day= date("l");
echo $day;
$sql="select * from checkday where day='$day'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
$row = mysqli_fetch_assoc($res);
//$day=$row["day"];
$v=$row["values"];
echo "value".$v."<br>";
}
$num=1234;
if($v==1)
{
if((1234%2)==1)
echo "<br>o allowed";
else
echo "<br>o not allowed";
}
else if($v==0)
{
if((1234%2)==0)
echo "<br>e not allowed";
else
echo "<br>e allowed";
}
else
echo "toady everybody allowed"

?>
</body>
</html>