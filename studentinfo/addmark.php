<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'nav.php'; ?>
<form action="addmark.php" method="POST">
<table style="position: absolute;left: 30px">
	<tr>
		<th>Rollno</th><td><input type="text" name="rollno"></td>
	</tr>
	<tr>
		<th>Name</th><td><input type="text" name="name"></td>
	</tr>
	<tr>
		<th>Batch</th><td><input type="text" name="batch"></td>
	</tr>
	<tr>
		<th>Subject 1</th><td><input type="text" name="sub1"></td>
	</tr>
	<tr>
		<th>Subject 2</th><td><input type="text" name="sub2"></td>
	</tr>
	<tr>
		<th>Subject 3</th><td><input type="text" name="sub3"></td>
	</tr>
	<tr>
		<th>Subject 4</th><td><input type="text" name="sub4"></td>
	</tr>
	<tr>
		<th>Subject 5</th><td><input type="text" name="sub5"></td>
	</tr>
	<tr>
		<th>Subject 6</th><td><input type="text" name="sub6"></td>
	</tr>
	<tr>
		<th>Lab 1</th><td><input type="text" name="lab1"></td>
	</tr>
	<tr>
		<th>Lab 2</th><td><input type="text" name="lab2"></td>
	</tr>
	<tr>
		<td></td><td><input type="submit" name="submit" value="Add marks"></td>
	</tr>

</table>
</form>
</body>
</html>

<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	$a=$_POST['rollno'];
	$b=$_POST['name'];
	$c=$_POST['batch'];
	$d=$_POST['sub1'];
	$e=$_POST['sub2'];
	$f=$_POST['sub3'];
	$g=$_POST['sub4'];
	$h=$_POST['sub5'];
	$i=$_POST['sub6'];
	$j=$_POST['lab1'];
	$k=$_POST['lab2'];
	$q="INSERT INTO `marks`(`rollno`, `name`, `batch`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `lab1`, `lab2`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
	$ex=mysqli_query($con,$q);
	if ($ex) {
		echo "<script>alert('Marks Added');window.location.href='mark.php'</script>";
	}
	else {
		echo "<script>alert('Failed');</script>";
	}
	
}
?>