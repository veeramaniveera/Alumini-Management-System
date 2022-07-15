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
<h1>alumini registration</h1>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>register number</td><td><input type= "text" name= "t0" id="txt1"></td></tr>
<tr><td>name</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>year</td><td><input type= "text" name= "t2" id="txt1"></td></tr>
<tr><td>mail_id</td><td><input type= "text" name= "t3" id="txt1"></td></tr>
<tr><td>mobile number</td><td><input type= "text" name= "t4" id="txt1"></td></tr>
<tr><td>photo</td><td><input type= "file" name= "image_file1" id="txt1"></td></tr>
<tr><td>address</td><td><textarea name= "t5" id="txt1"></textarea></td></tr>


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
$reno= $_POST["t0"];
$nam= $_POST["t1"];
$yr= $_POST["t2"];
$mail= $_POST["t3"];
$mob= $_POST["t4"];
$add= $_POST["t5"];
//echo"$nam";

$var="alumini_reg/";
$var1=$var.basename($_FILES['image_file1']['name']);

//$tar1= $tar.basename($_FILES['image_file']['name']);
//$image_file=basename($tar1);

$conn= mysqli_connect("localhost:3306","root","","alumini");

if(!$conn)
{
die("connection error".mysqli_error());
}

$c="insert into alumini_reg(register_number,name,department,year,mobile_number,mail_id,photo,address) values('$reno','$nam','$dept2','$yr','$mob','$mail','$var1','$add')";

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
