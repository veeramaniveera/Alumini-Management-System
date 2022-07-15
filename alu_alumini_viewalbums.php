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

<h1>view albums</h1>
<?php
$conn=mysqli_connect("localhost:3306","root","","alumini");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from add_albums";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<table border='3px'  cellpadding= '5px' cellspacing= '5px'>";
echo"<tr><th>User Id</th><th>image</th><th>title</th><th>description</th></tr>";
while($r=mysqli_fetch_assoc($b))
{

$id=$r["user_id"];
$img=$r["image"];
$tit=$r["title"];
$des=$r["description"];


echo"<tr><td>$id</td><td><img src= '$img'></td><td>$tit</td><td>$des</td></tr>";
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
