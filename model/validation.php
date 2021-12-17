<?php
	
	require_once('db.php');

	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from user where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		//$row = mysqli_fetch_assoc($result);
		//print_r(mysqli_num_rows($result));
		if(mysqli_num_rows($result) > 0){
			return true;
		}else{
			return false;
		}
	}
	function checkUsername($username){

		$conn = getConnection();

		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		//print_r($result[1]);
		//print_r(mysqli_num_rows($result));
		if(mysqli_num_rows($result) > 0){

			return false;
		}
		else{
			return true;
		}
	}

	function getUserByname($username){

		$conn = getConnection();

		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into user values('{$user['name']}', '{$user['username']}', '{$user['password']}','{$user['mobilenumber']}','{$user['email']}','{$user['gender']}','{$user['dob']}','{$user['balance']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update user set name='{$user['name']}',username='{$user['username']}', password='{$user['password']}', mobilenumber='{$user['mobilenumber']}', 
		email='{$user['email']}',gender='{$user['gender']}',dob='{$user['dob']}',balance='{$user['balance']}' where username='{$user['username']}' ";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updateUserPassword($password ,$username ){

		$conn = getConnection();
		$sql = "update user set password= '$password' where username= '$username' ";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function transactiontable($username){

		$conn = getConnection();
		$sql = "create table $username (
				type varchar(100),
				number varchar(100),
				amount varchar(100),
				date varchar(100),
				id varchar(100)
				
		)";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>