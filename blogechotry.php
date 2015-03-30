<?php
error_reporting(0);
mysql_connect("localhost","root","");
@mysql_select_db("abishek");
?>
<html>
<head><link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>	
		<title>Dasa Sathyan's BLOG</title></head>
<body>
<style>
body{
	background-color:#92D050;
}
div.main{
	text-align:center;
}
form .side,h4{
	text-align:center;
	font-family:AR HERMANN;
	color:purple;
}
h1{
	text-align:center;
	font-family:AR DARLING;
	color:blue;
}
h3{
	text-align:center;
	font-family:AR BERKLEY;
	color:red;	
}
</style>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<img src="logo2.jpg"/>
	</div>
</div>

	
<?php
if (isset($_GET['sub']))
{
	$num=$_GET['numb'];
	$viw=mysql_query("select * from blog where blogid='$num'");
	$sow=mysql_fetch_assoc($viw);
?>
<div class="row">
	<div class="col-md-12 main">
	<h1><?php echo $sow["head"];?></h1>		
	<h3><?php echo $sow["bod"]; ?></h3>
	<h6=4><?php echo $sow["fname"];?>
		<?php echo $sow["lname"];?></h4>
	</div>
</div>
		
<?php } 
	if (isset($_REQUEST['cmd']))
	{
		$naam=$_REQUEST['username'];
		$tex=$_REQUEST['txt'];
		$hide=$_REQUEST['hid'];
		mysql_query("INSERT INTO COMMENTS(name,comment,blogid)VALUES('$naam','$tex','$hide')");
		echo "your comment added succesfully";
		?>
<script>
alert("Insertion Success");
document.location="echofull.php";
</script>
<?php	}	?>
	
<form class="side">
<div class="row">
	<div class="col-md-12">
<div class="form-group"><label for="exampleInputName2">NAME</label><input class="form-control" type="text" name="username" placeholder="enter your name"/><br></div>
	</div>
	</div>
<div class="row">
	<div class="col-md-12">
<div class="form-group"><label for="exampleInputName2">COMMENTS</label><textarea class="form-control" rows="3" name="txt" placeholder="enter the comments"></textarea><br>
		<input type="hidden" name="hid" value="<?php echo $_GET['numb']; ?>"/>
		<input type="submit" name="cmd"/></div>
		<h1>COMMENTS</h1>
</div>
</div>
		</form>
<div class="row">
<div class="col-md-12">
<?php
	$viw=mysql_query("select * from comments where blogid='$num'");
	while($sow=mysql_fetch_assoc($viw))
	{
	?>
		<h3><hr><?php echo $sow["id"]."."; ?><?php echo $sow["name"]; ?></h3><h4> <?php echo $sow["comment"]; ?> </h4>
		<?php } 	?>

