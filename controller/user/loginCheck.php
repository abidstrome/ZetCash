
<?php
    session_start();
    require_once('../../model/validation.php');
    

    if(isset($_POST['submit'])){
        

        $username =$_POST['username'];
        $password = $_POST['password'];

         if($username == "" || $password == ""){
            echo "Please enter username and password";
            
        }else{
            //$user = $_SESSION['c_user'];
                
                $status = validateUser($username, $password);

                if($status==true){

                    setcookie('flag', true, time()+3600, '/');
                    $user=getUserByname($username);

                    //print_r($user);

                    $_SESSION['username']=$user['username'];
                    $_SESSION['name']=$user['name'];
                    $_SESSION['password']=$user['password'];
                    $_SESSION['mobilenumber']=$user ['mobilenumber'];
                    $_SESSION['gender']=$user['gender'];
                    $_SESSION['email']=$user['email'];
                    $_SESSION['dob']=$user['dob'];
                    //$_SESSION['mm']=$user_mm;
                    //$_SESSION['yyyy']=$user_yyyy;
                    $_SESSION['balance']=$user['balance'];
                    
                
                    //header('location: ../view/dashboard.php');
                    //echo "success";
                    return true;
                }
                else{
                    echo "f";
                } 
            
            
        }

    }
?>