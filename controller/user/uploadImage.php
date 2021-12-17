<?php
    session_start();
    require_once('../../model/image_model.php');

    $conn = mysqli_connect('localhost', 'root', '', 'zetcash');
    $username=$_SESSION['username'];


    if(isset($_POST['upload']) ){

        $searchsql = "select * from image where username='{$username}'";

        $result = mysqli_query($conn, $searchsql);
		$row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){

            $status=deleteimage($username);
            if ($status){

                $file_info =  $_FILES['image'];


            $path = '../../assets/upload/'.$file_info['name'];
            if(move_uploaded_file($file_info['tmp_name'], $path)){

                $sql = "insert into image (username,image ) values ('$username','$path')";
    
                if(mysqli_query($conn, $sql))
                {
                    echo " new Picture Uploaded";
                }else{
                    echo "Error to Upload";
                }
                
            }else{
                echo "Error to Store photo";
            }
    
           

            }else{
                echo "Error to Upload image";
            }

            
			
		}
		else{
            $file_info =  $_FILES['image'];

            $path = '../assets/upload/'.$file_info['name'];
    
            $sql = "insert into image (username,image ) values ('$username','$path')";
    
            if(mysqli_query($conn, $sql))
            {
                echo "Picture Uploaded";
            }else{
                echo "Error to Upload";
            }
			
		}

       

}



    //print_r($_POST['tmp_name']);
    
    // if(isset($_POST['upload']) ){

    // $file_info =  $_FILES['image'];
	// //echo $file_info['tmp_name'];

	// $path = '../assets/upload/'.$file_info['name'];

    // //$photo= addslashes(file_get_contents($file_info['tmp_name']));

    // print_r($file_info);
    // $sql = "insert into image (username,image ) values ('$username','$path')";
    // //$sql = "insert into user (image) values ('$photo') where username = '{$username}'";
    

    // if(mysqli_query($conn, $sql))
    // {
	// 	echo "Picture Uploaded";
	// }else{
	// 	echo "Error to Upload";
	// }
	
    // }

	///////******************* */
    

?>