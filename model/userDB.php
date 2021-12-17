<?php
	
	require_once('db.php');



	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		
		$user =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($user, $row); 
			global $user;
		}

		return $user;

	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into user values('{$user['name']}', '{$user['email']}','{$user['gender']}', '{$user['dob']}')";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteUser($user){
		print_r($user);
		
		$conn = getConnection();
		$sql = "delete from user where name='$user'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

?>