<?php
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
		<title>Dasa Sathyan's BLOG</title>
</head>
<body class="bg">
<style>	
.bg{
	background-color:black;
	color:black;
	text-decoration:none;
}
body:hover{
	color:black;
}
h1{
	text-decoration:none;
	text-align:center;
	font-family:AR darling;
}
</style>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<img src="logo1.jpg"/>
	</div>
</div>
<?php
	$viw=mysql_query("select * from blog");
	while($sow=mysql_fetch_assoc($viw))
	{
	?>
		<h1><a href="blogechotry.php?numb=<?php echo $sow["blogid"]; ?>&sub=Submit"><?php echo $sow["blogid"]."."; ?> <?php echo $sow["head"]; ?></a> </h1>		
		<?php } 	?>	
		
			<form>
		
		</form>
		</div>
</body>
</html>