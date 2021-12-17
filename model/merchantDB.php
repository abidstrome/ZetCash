<?php
	
	require_once('db.php');


	function getAllMerchant(){
		$conn = getConnection();
		$sql = "select * from merchant";
		$result = mysqli_query($conn, $sql);
		
		$merchant =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($merchant, $row); 
			global $merchant;
		}

		return $merchant;

	}

	function insertMerchant($merchant){

		$conn = getConnection();
		$sql = "insert into merchant values('{$merchant['name']}', '{$merchant['email']}','{$merchant['gender']}', '{$merchant['dob']}')";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteMerchant($merchant){
		print_r($merchant);
		
		$conn = getConnection();
		$sql = "delete from merchant where name='$merchant'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>