<?php 

session_start();
require_once('../../model/validation.php');


    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $mobileNumber=$_SESSION['mobilenumber'];
    $balance=$_SESSION['balance'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    
    
if(isset($_POST['submit']))
  {
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['dob']=$dob;
    $_SESSION['gender']=$gender;
             
                $user= [
                    'name'         =>$name,
                    'username'      =>$username,
                    'password'      =>$password,
                    'mobilenumber'  =>$mobileNumber,
                    'email'         =>$email,
                    'gender'        =>$gender,
                    'dob'            =>$dob,
                    'balance'       => $balance
                    ]; 
                    $status=updateUser($user);
                    if ($status==true)
                        {
                         echo "Profile Updated";
                         
                        }else
                            {
                                echo "error to update";
                            }
        
    

             

        
     }
?>