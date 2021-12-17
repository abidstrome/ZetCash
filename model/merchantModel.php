<?php
	
	require_once('db.php');

	function validateMerchant($username, $password){

		$conn = getConnection();

		$sql = "select * from merchant where user_name='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}
	function getUserByusername($username){

		$conn = getConnection();

		$sql = "select * from merchant where user_name='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from merchant";
		$result = mysqli_query($conn, $sql);
		
		$user =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($user, $row); 
			global $user;
		}

		return $user;

	}

	function insertMerchant($user){

		$conn = getConnection();
		$sql = "insert into merchant values('{$user['name']}','{$user['user_name']}','{$user['email']}',
		'{$user['account_number']}','{$user['nid_number']}','{$user['pin']}','{$user['password']}','{$user['gender']}',
		'{$user['date_of_birth']}','{$user['balance']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateMerchant($user){
		

		$conn = getConnection();
		$sql = "update merchant set 
		name='{$user['name']}',
		user_name='{$user['user_name']}',
		email='{$user['email']}',
		account_number='{$user['account_number']}',
		nid_number='{$user['nid_number']}',
		pin='{$user['pin']}',
		password='{$user['password']}', 
		gender='{$user['gender']}',
		date_of_birth='{$user['date_of_birth']}', 
		balance='{$user['balance']}'

		where 
		account_number='{$user['account_number']}' ";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updatePassword($password,$username){

		$conn = getConnection();
		
		$sql = "update merchant set password='$password' where user_name='$username'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updatePin($pin,$username){

		$conn = getConnection();
		
		$sql = "update merchant set pin='$pin' where user_name='$username'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteimage($username){
		$conn = getConnection();
		$sql = "delete from mechant_image where username ='$username'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	function getImageByname($username){
	
		
		$conn = getConnection();
		$sql = "select * from mechant_image where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	
			return $row;
	}
	function getMerchantByNumber($number){

		$conn = getConnection();

		$sql = "select * from merchant where account_number='{$number}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function updateBalanceCashout($balance ,$number ){

		$conn = getConnection();
		$sql = "update merchant set balance='$balance' where account_number='$number'";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>