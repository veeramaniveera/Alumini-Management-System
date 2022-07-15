<html>
<head>
<title>even</title>
<style>
fieldset
{
margin-left:450px;
margin-right:350px;
//background:linear-gradient(blue,black);
background-image:url("hd3.jpeg");
}
table
{
font-size:20px;
color: black;
font-weight: bold;


}
#td1
{
width:100px;
margin-left:160px;
margin-top:30px;
background-color: black;
color: white;
font-size:15px;
}
#txt1
{
width:200px;
height:25px;

}
</style>
</head>
<body>
<?php
//include("project1_admin2.php");
?>

<form action="" method= "post" enctype="multipart/form-data">
<h1>hod registration</h1>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>name</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>mail_id</td><td><input type= "text" name= "t2" id="txt1"></td></tr>
<tr><td>mobile number</td><td><input type= "text" name= "t3" id="txt1"></td></tr>
<tr><td>address</td><td><textarea name= "t4" id="txt1"></textarea></td></tr>
<tr><td>photo</td><td><input type= "file" name= "image_file1" id="txt1"></td></tr>
<tr><td>date of joining</td><td><input type= "date" name= "t6" id="txt1"></td></tr>

<?php

$conn=mysqli_connect("localhost:3306","root","","alumini");
if(!$conn)
{
die("Connection Error".mysqli_error());
}
$a="select * from add_dept";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b))
{
echo"<tr><td>department</td><td><select name='t7'>";
while($r=mysqli_fetch_assoc($b))
{

$dept1=$r["department"];
echo"<option value='$dept1'>$dept1</option>";
}
echo"</select></td></tr>";
echo"</table>";
}
else
{
echo"<script>alert('No data Found');</script>";
}
$dept2= $_POST["t7"];
//echo"$dept2";

?>
<tr><td><input type= "submit"  name= "veera" id="td1"></td></tr>
</form>

<?php
if(isset($_POST["veera"]))
{
$n= $_POST["t1"];
$mail= $_POST["t2"];
$mob= $_POST["t3"];
$add= $_POST["t4"];
$dof= $_POST["t6"];

$var="alumini_hod/";
$var1=$var.basename($_FILES['image_file1']['name']);

//$tar1= $tar.basename($_FILES['image_file']['name']);
//$image_file=basename($tar1);

$conn= mysqli_connect("localhost:3306","root","","alumini");

if(!$conn)
{
die("connection error".mysqli_error());
}

$c="insert into hodreg(name,mail_id,mobile_number,address,photo,department,date_of_joining) values('$n','$mail','$mob','$add','$var1','$dept2','$dof')";

if((move_uploaded_file($_FILES['image_file1']['tmp_name'],$var1)))
{
if(mysqli_query($conn,$c))
{
echo"<script>alert('registerd successfully');</script>";
}
}
}
?>
</body>
</html>
