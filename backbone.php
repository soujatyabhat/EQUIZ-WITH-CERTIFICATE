<?php 
	$host_name="localhost";
	$user="root";
	$password="";
	$database_name = "test";
	$sql = "";
	$link = mysqli_connect($host_name,$user,$password,$database_name);
	$data = array("min1","min2","min3","min4","min5","min6","min7","min8","min9","min10");
	$c = $i = 0;
	if(isset($_POST['submit']))
	{
		$sql = "select *from quiz";
		$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
				if($row['ans']  == $_POST[$data[$i]])
				{
					$c++;
				}
				$i++;
	
	}
	$name = $_POST['username'];
	$title ="General Knowledge Quiz";
	$number = $_POST['number'];
	$address = $_POST['address'];
	$sql = "insert into basic(name,phnumber,address,marks) values('$name','$number','$address','$c')";
	mysqli_query($link,$sql);
	include('certificate.php');
	}
?>