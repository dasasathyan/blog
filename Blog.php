<?php
mysql_connect("localhost","root","");
@mysql_select_db("abishek");
?>
<html>
	<head>    
		<title>Dasa Sathyan's BLOG</title>
	</head>
<body>
<style>
input.body{
	height: auto;
    overflow-x: auto;
	word-wrap: break-word;
}
</style>
<?php
if (isset($_REQUEST['sub']))
{
	echo "Insertion";
		$firstname=$_REQUEST['first'];
		$lastname=$_REQUEST['last'];
		$title=$_REQUEST['tle'];
		$body=$_REQUEST['comm'];
		mysql_query("INSERT INTO blog (fname,lname,head,bod) VALUES('$firstname','$lastname','$title','$body')");
		echo " Thank you ". $firstname ." " . $lastname . " " . "for adding " . $title;
?>
<script>
alert("Insertion Success");
document.location="echofull.php";
</script>

<?php } ?>
<form>
<div>
First Name<input type="text" name="first" placeholder="First Name"/>
Last Name<input type="text" name="last"/ placeholder="Last Name"><br>	<br></div>
<div>TITLE &nbsp;&nbsp;<input type="text" name="tle" placeholder="Enter a title for your post"/><br><br></div>
<div>Body<input class="body" type="text" name="comm" placeholder="Enter your body here"/></div>
<input type="submit" name="sub" value="INSERT"/>
</form>
</body>
</html>





