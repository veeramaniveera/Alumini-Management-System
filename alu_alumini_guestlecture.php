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
<h1>guest lecture request</h1>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>your alumini id</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>topic</td><td><input type= "text" name= "t2" id="txt1"></td></tr>
<tr><td>date</td><td><input type= "date" name= "t3" id="txt1"></td></tr>
<tr><td>days</td><td><input type= "text" name= "t4" id="txt1"></td></tr>
<tr><td>hours</td><td><input type= "text" name= "t5" id="txt1"></td></tr>

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
$aid= $_POST["t1"];
$to= $_POST["t2"];
$date= $_POST["t3"];
$day= $_POST["t4"];
$hour= $_POST["t5"];
$sts= "Request";
$conn= mysqli_connect("localhost:3306","root","","alumini");

if(!$conn)
{
die("connection error".mysqli_error());
}

$c="insert into lecture_req(alumini_id,topic,date,days,hours,department,status) values('$aid','$to','$date','$day','$hour','$dept2','$sts')";

if(mysqli_query($conn,$c))
{
echo"<script>alert('registerd successfully');</script>";
}
}
?>
</body>
</html>
