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
<h1>add albums</h1>
<table cellpadding= "5px" cellspacing= "5px">
<tr><td>image</td><td><input type= "file" name= "image_file1" id="txt1"></td></tr>
<tr><td>title</td><td><input type= "text" name= "t1" id="txt1"></td></tr>
<tr><td>description</td><td><input type= "text" name= "t2" id="txt1"></td></tr>

<tr><td><input type= "submit"  name= "veera" id="td1"></td></tr>
</form>

<?php
if(isset($_POST["veera"]))
{

$tit= $_POST["t1"];
$des= $_POST["t2"];

$var="admin_addalbums/";
$var1=$var.basename($_FILES['image_file1']['name']);


$conn= mysqli_connect("localhost:3306","root","","alumini");

if(!$conn)
{
die("connection error".mysqli_error());
}

$a="insert into add_albums(image,title,description) values('$var1','$tit','$des')";

if((move_uploaded_file($_FILES['image_file1']['tmp_name'],$var1)))
{
if(mysqli_query($conn,$a))
{
echo"<script>alert('registerd successfully');</script>";
}
}
}
?>
</body>
</html>
