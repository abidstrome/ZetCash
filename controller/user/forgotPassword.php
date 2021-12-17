<?php 
session_start();
require_once('../../model/validation.php');
$username=$_SESSION['username'];

$current_password=$_SESSION['password'];
$cpassword=$_POST['cpassword'];
$password=$_POST['npassword'];

if(isset($_POST['change'])){
    
   

    
    
   
    
    if($current_password== $cpassword)
    {
        if($cpassword!=$password)
        {
            $status=updateUserPassword($password,$username);
                                                                                
            if($status)
            {
                $_SESSION['password']=$password;
                //header("location:../view/dashboard.php " );
                echo "Password Changed";
                
        
            }else{
                echo "Password Change Failed";
            }

        }else{
            echo "Current and new password cannot be same";
        }
        

    }else{
      
        echo "Current Password does not match";

    }
    
    
}

?>
                                                                                  