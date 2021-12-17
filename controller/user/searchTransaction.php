  
<?php
	session_start();
	$tableName = $_SESSION['username'];
	$transid = $_REQUEST['transid'];
	$con = mysqli_connect('localhost', 'root', '', 'zetcash');
	$sql = "select * from $tableName where id like '%{$transid}%'";
	$result = mysqli_query($con, $sql);
	//$transaction=getTransaction($id,$tableName);

	 $response ="
	 				<table border=1 >
				 <tr>
                          
					<th >TYPE</th>
					<th>Number</th>
					<th>Date</th>
					<th>Transaction ID</th>
					<th>Amount</th>
						
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	
			 				"<tr>
                            
                             <td>  {$row['type']}  </td>
                             <td>  {$row['number']}  </td>
                             <td>  {$row['date']}  </td>
                             <td>  {$row['id']}  </td>
                             <td>  {$row['amount']}  </td>
                             </tr>";
	}

	$response .= "</table>";

	echo $response;
	

?>