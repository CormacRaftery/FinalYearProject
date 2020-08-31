<?php

$con = mysqli_connect('localhost', 'root', 'root', 'unityaccess');
	
	//check connection 
	if(mysqli_connect_errno())
	{
		echo "1: connection failed";
		exit();
	}
	
	$username = $_POST["name"];
	$newscore = $_POST["score"];
	
	//user exists?
	
	$namecheckquery = "SELECT username from players where username='" . $username . "';";
	
	$namecheck = mysqli_query($con, $namecheckquery) or die("2: name check query failed");
	
	if(mysqli_num_rows($namecheck) != 1)
	{
		echo "5: Name does not exist or duplicate exists";
		exit();
	}
	
	$updatequery = "update players set score = " . $newscore . " where username = '" . $username . "';";
	mysqli_query($con, $updatequery) or die("7: Save query failed");
	
	echo "0";
>