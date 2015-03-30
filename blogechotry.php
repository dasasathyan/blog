<?php
error_reporting(0);
mysql_connect("localhost","root","");
@mysql_select_db("abishek");
?>
<html>
<head></head>
<body>
<?php
if (isset($_GET['sub']))
{
	$num=$_GET['numb'];
	$viw=mysql_query("select * from blog where blogid='$num'");
	$sow=mysql_fetch_assoc($viw);
?>
	<h1><?php echo $sow["head"];?></h1>		
	<h3><?php echo $sow["bod"]; ?></h3>
	<h6><?php echo $sow["fname"];?>
		<?php echo $sow["lname"];?></h6>
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
<form>
<div>Name <input type="text" name="username" placeholder="enter your name"/><br>
		Comments<input type="text" name="txt" placeholder="enter the comments"/><br>
		<input type="hidden" name="hid" value="<?php echo $_GET['numb']; ?>"/>
		<input type="submit" name="cmd"/></div>

</form>
