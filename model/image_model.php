<?php
require_once('db.php');


function deleteimage($username){
    $conn = getConnection();
    $sql = "delete from image where username ='$username'";
    
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function getImageByname($username){

    
    $conn = getConnection();
    $sql = "select * from image where username='{$username}'";
    $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

		return $row;
}



?>