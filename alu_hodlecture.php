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

<h1>guest lecture request</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","alumini");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from lecture_req";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>User Id</th><th>alumini id</th><th>topic</th><th>date</th><th>days</th><th>hours</th><th>department</th><th>status</th><th>hod approve</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$aid=$r["alumini_id"];
$to=$r["topic"];
$dat=$r["date"];
$day=$r["days"];
$hour=$r["hours"];
$de=$r["department"];
$sts=$r["status"];

echo"<tr><td>$id</td><td>$aid</td><td>$to</td><td>$dat</td><td>$day</td><td>$hour</td><td>$de</td><td>$sts</td><td id= 'a1'><a href= 'alu_hodappro.php?alumini_id=$aid'  id= 'txt2'>Accept</a></td></tr>";
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
