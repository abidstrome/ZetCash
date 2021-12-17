<?php
    require_once('db.php');

    function insertTransaction($cashin,$username){

		$conn = getConnection();
		$sql = "insert into $username values('{$cashin['type']}', '{$cashin['number']}', '{$cashin['amount']}','{$cashin['date']}','{$cashin['id']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getTransaction($id,$tablename){

		$conn = getConnection();

		$sql = "select * from $tablename where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function getAlltransaction($tablename){
		$conn = getConnection();
		$sql = "select * from $tablename";
		$result = mysqli_query($conn, $sql);
		
		$trans =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($trans, $row); 
			global $trans;
		}

		return $trans;

	}
?>