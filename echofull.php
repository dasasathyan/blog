<?php
mysql_connect("localhost","root","");
@mysql_select_db("abishek");
?>
<html>
<head></head>
<body>
<?php
	$viw=mysql_query("select * from blog");
	while($sow=mysql_fetch_assoc($viw))
	{
	?>
		<h1><a href="blogechotry.php?numb=<?php echo $sow["blogid"]; ?>&sub=Submit"><?php echo $sow["blogid"]."."; ?> <?php echo $sow["head"]; ?></a> </h1>		
		<?php } 	?>	
		
			<form>
		
		</form>
</body>
</html>