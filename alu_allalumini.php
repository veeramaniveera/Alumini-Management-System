<html>
<head>
<style>
img
{
height:100px;
width:100px;
}
h1
{
color:red;
text-transform:uppercase;
}
table
{
text-transform: capitalize;
border-width:3px;
border-color:red;
color: black;
font-size:20px;
text-align:center;
background-image:url("hd3.jpeg");


}
th
{
color: black;
text-transform:uppercase;
}
</style>
</head>
<body>
<?php
//include("project1_admin2.php");
?>
<form action="" method="post"  enctype="multipart/form-data">
</form>

<h1>alumini Details</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","alumini");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from alumini_reg";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>User Id</th><th>register number</th><th>name</th><th>department</th><th>year</th><th>mobile number</th><th>mail id</th><th>photo</th><th>address</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$reno=$r["register_number"];
$name=$r["name"];
$dept=$r["department"];
$yr=$r["year"];
$mobnum=$r["mobile_number"];
$mail=$r["mail_id"];
$pic=$r["photo"];
$add=$r["address"];


echo"<tr><td>$id</td><td>$reno</td><td>$name</td><td>$dept</td><td>$yr</td><td>$mobnum</td><td>$mail</td><td><img src= '$pic'></td><td>$add</td></tr>";
}
echo"</table>";
}
else
{
echo"<script>alert('No data Found');</script>";
}

?>

</body>
</html>
