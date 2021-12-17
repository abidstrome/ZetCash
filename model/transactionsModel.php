<?php
    require_once('db.php');

    function insertTransaction($trans,$username){

		$conn = getConnection();
		$sql = "insert into transaction values('','{$trans['user_name']}', '{$trans['account_number']}', '{$trans['amount']}','{$trans['transaction_type']}','{$trans['current_balance']}','{$trans['date']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getTransaction($id,$tablename){

		$conn = getConnection();

		$sql = "select* from transaction where account_number='{$accountnumber}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getTransactionList($trans,$username){
		$conn = getConnection();
		$sql = "select * from transaction";
		$result = mysqli_query($conn, $sql);
		
		$trans =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($trans, $row); 
			global $trans;
		}

		return $trans;

	}

?>