<?php
    //session_start();
    require_once('../../model/validation.php');
    include("./mail.php");
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobileNumber = $_POST['mobileNumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $dob =$_POST['dob'];
        $balance = 0;
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

            $check= checkUsername($username);
            if ($check){
                $create = transactiontable($username);
                if ($create){

                $status = insertUser($user);
            if ($status)
            {  
                sendmail($name,$email);
                echo "Registration Succesfull";
            }
            else{
                echo "Registration failed";
                echo "<br>";
            }
            
            exit();
        }else{

                   
            echo "Transaction not available";
            echo "<br>please contact to admin";
            exit();
            

        }
            }if($check==false){
                echo "Username Not Available";

            }

                  
    }
           
?>