<?php

	$con = mysqli_connect('localhost', 'root', 'root', 'unityaccess');
	
	//check connection 
	if(mysqli_connect_errno())
	{
		echo "1: connection failed";
		exit();
	}
	
	$username = $_POST["name"];
	$password = $_POST["password"];
	
	//user exists?
	
	$namecheckquery = "SELECT username from players where username='" . $username . "';" ;
	
	$namecheck = mysqli_query($con, $namecheckquery) or die("2: name check query failed");
	
	if(mysqli_num_rows($namecheck) > 0)
	{
		echo "3: Name already exists";
		exit();
	}
	
	//add user 
	$salt = "\$5\$rounds=5000\$" . "steamedhams" . $username . "\$";
	$hash = crypt($password, $salt);
	$insertuserquery = "insert into players (username, hash, salt) values ('" . $username . "','" . $hash . "','" . $salt . "');";
	mysqli_query($con, $insertuserquery) or die ("4: Insert player query failed"); 

	echo "0";
?>