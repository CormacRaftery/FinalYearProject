<?php

	$con = mysqli_connect('localhost', 'root', 'root', 'unityaccess');
	
	//check connection 
	if(mysqli_connect_errno())
	{
		echo "1: connection failed";
		exit();
	}
	//prevent sql injection
	$username = mysqli_real_escape_string($con, $_POST["name"]);
	$usernameclean = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	//$username = $_POST["name"];
	$password = $_POST["password"];
	
	//user exists?
	
	$namecheckquery = "SELECT username, salt, hash, score from players where username='" . $usernameclean . "';";
	
	$namecheck = mysqli_query($con, $namecheckquery) or die("2: name check query failed");
	
	if(mysqli_num_rows($namecheck) != 1)
	{
		echo "5: Name does not exist or duplicate exists";
		exit();
	}

	//get login info from query
	$existinginfo = mysqli_fetch_assoc($namecheck);
	$salt = $existinginfo["salt"];
	$hash = $existinginfo["hash"];
	
	$loginhash = crypt($password, $salt);
	if($hash != $loginhash){
		echo "6: Incorrect password";
		exit();
	}
	
	echo "0\t" . $existinginfo["score"];
?>