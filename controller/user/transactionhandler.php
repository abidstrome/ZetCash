<?php
	session_start();
  require_once('../../model/validation.php');
  require_once('../../model/merchantModel.php');
  require_once('../../model/transaction_model.php');

	 $balance =$_SESSION['balance'];
   $name = $_SESSION['name'];
   $email = $_SESSION['email'];
   $mobileNumber = $_SESSION['mobilenumber'];
   $username = $_SESSION['username'];
   $password = $_SESSION['password'];
   $gender = $_SESSION['gender'];
   $dob =$_SESSION['dob'];

   $t=time();
   $date=date("Y-m-d",$t);
        
	
  
	if(isset($_POST['cashin']))
	{

    $cardnumber=$_POST['cardnumber'];
   $mm=$_POST['expirymm'];
   $yy=$_POST['expiryyy'];
   $cvc=$_POST['cvc'];
   $name=$_POST['name'];
    $amount=$_POST['amount'];

    if($amount == "" ||$cardnumber == "" || $mm == "" ||$yy == "" || $cvc == "" || $name == ""){
            echo "Please fill all information<br>";

        }else{
          if (ctype_digit($cardnumber)==true &&strlen($cardnumber)==12){
                if ($mm<= 12 && $mm>0 && $yy>=21)
                {
                   if (ctype_digit($cvc)==true && $cvc>99 && $cvc<1000)
                   {

                    if(ctype_alpha($name)==true) 
                    {

                        if (ctype_digit($amount)==true)
                        {
                            $balance=$_SESSION['balance']+$amount;
                            $_SESSION['balance']=$balance;
                           

                            //generating random transaction id
                            $charecter = '0123456789abcdefghijklmnopqrstuvwxyz';
                            $transid=substr(str_shuffle($charecter), 0, 8);

                            $user= [
                              'name'          =>$name,
                              'username'      =>$username,
                              'password'      =>$password,
                              'mobilenumber'  =>$mobileNumber,
                              'email'         =>$email,
                              'gender'        =>$gender,
                              'dob'           =>$dob,
                              'balance'       => $balance
                              ];
                              $cashin= [
                                'type'        =>'Cash IN',
                                'number'      =>$cardnumber,
                                'amount'      =>$amount,
                                'date'        =>$date,
                                'id'          =>$transid
                                ];
                                $status=insertTransaction($cashin,$username);
                                if ($status)
                                {
                                  updateUser($user);
                                  header('location:../../view/user/transactionSuccess.php');
                                }else{
                                  header('location:../../view/user/transactionFailed.php');
                                }

                            



                            

                              
                              
                        }else{
                          echo "Enter Valid amount";
                          echo "<br>";
                        }

                    }else{
                      echo "Invalid Card Holder Name";
                      echo "<br>";
                    }    

                }else{
                  echo "Invalid CVC";
                  echo "<br>";
                }


            }else{
              echo "Invalid Expiry Date";
              echo "<br>";
            }

            
        }else{
          echo "Card Number Should contain only 12 Numbers";
          echo "<br>";

        }
      }
    }

if(isset($_POST['submit']))
	{
    
    $amount=$_POST['amount'];
    $merchantNumber=$_POST['merchantNumber'];

    $type=$_GET['type'];

    if (ctype_digit($merchantNumber)==true )

     {
         if ($balance>=$amount)
        {
          if($type = 'Cash out')
          {
            $check=getMerchantByNumber($merchantNumber);
            if ($check){

                            $balance=$_SESSION['balance']-$amount;
                            $_SESSION['balance']=$balance;

                            $mbalance=$check['balance']+$amount;

                            $update=updateBalanceCashout($mbalance,$merchantNumber);
                            if($update){
                               //generating random transaction id
                            $charecter = '0123456789abcdefghijklmnopqrstuvwxyz';
                            $transid=substr(str_shuffle($charecter), 0, 8);

                            $user= [
                              'name'          =>$name,
                              'username'      =>$username,
                              'password'      =>$password,
                              'mobilenumber'  =>$mobileNumber,
                              'email'         =>$email,
                              'gender'        =>$gender,
                              'dob'           =>$dob,
                              'balance'       => $balance
                              ];
                              $cashin= [
                                'type'        =>$type,
                                'number'      =>$merchantNumber,
                                'amount'      =>$amount,
                                'date'        =>$date,
                                'id'          =>$transid
                                ];
                                $status=insertTransaction($cashin,$username);
                                if ($status)
                                {
                                  updateUser($user);
                                  header('location:../../view/user/transactionSuccess.php');
                                }else{
                                  header('location:../../view/user/transactionFailed.php');
                                }

                            }else{
                              echo "server Error"; 
                            }
                           

                           

            }else{
              echo "Invalid Merchant Number";
            }

          }

                            
        }
  
  else if ($balance<$amount)
  {
    header('location:../../view/user/transactionFailed.php');
  }

  else
  {
    print_r('Server Error');
  }

     }else{
      echo "Enter Valid Number";
      echo "<br>";
     }

          
}

  if(isset($_POST['donate,pay']))
  {
    $amount=$_POST['amount'];
    $catergory=$_POST['catergory'];
    $type=$_GET['type'];

     if ($catergory!="")
     {
      if ($balance>=$amount)
      {
                          $balance=$_SESSION['balance']-$amount;
                          $_SESSION['balance']=$balance;
                         

                          //generating random transaction id
                          $charecter = '0123456789abcdefghijklmnopqrstuvwxyz';
                          $transid=substr(str_shuffle($charecter), 0, 8);

                          $user= [
                            'name'          =>$name,
                            'username'      =>$username,
                            'password'      =>$password,
                            'mobilenumber'  =>$mobileNumber,
                            'email'         =>$email,
                            'gender'        =>$gender,
                            'dob'            =>$dob,
                            'balance'       => $balance
                            ];
                            $cashin= [
                              'type'        =>$type,
                              'number'      =>$catergory,
                              'amount'      =>$amount,
                              'date'        =>$date,
                              'id'          =>$transid
                              ];
                              $status=insertTransaction($cashin,$username);
                              if ($status)
                              {
                                updateUser($user);
                                header('location:../../view/user/transactionSuccess.php');
                              }else{
                                header('location:../../view/user/transactionFailed.php');
                              }
      }
  
  else if ($balance<$amount)
  {
    header('location:../../view/user/transactionFailed.php');
  }

  else
  {
    print_r('Server Error');
  }

     }else{
      echo "Enter Valid CashOut Number";
      echo "<br>";
     }

          
}
if(isset($_POST['payment,sendmoney']))
{
  $amount=$_POST['amount'];
  $catergory=$_POST['number'];
  $type=$_GET['type'];

  
    if ($balance>=$amount)
    {
                        $balance=$_SESSION['balance']-$amount;
                        $_SESSION['balance']=$balance;
                       

                        //generating random transaction id
                        $charecter = '0123456789abcdefghijklmnopqrstuvwxyz';
                        $transid=substr(str_shuffle($charecter), 0, 8);

                        $user= [
                          'name'          =>$name,
                          'username'      =>$username,
                          'password'      =>$password,
                          'mobilenumber'  =>$mobileNumber,
                          'email'         =>$email,
                          'gender'        =>$gender,
                          'dob'            =>$dob,
                          'balance'       => $balance
                          ];
                          $cashin= [
                            'type'        =>$type,
                            'number'      =>$catergory,
                            'amount'      =>$amount,
                            'date'        =>$date,
                            'id'          =>$transid
                            ];
                            $status=insertTransaction($cashin,$username);
                            if ($status)
                            {
                              updateUser($user);
                              header('location:../../view/user/transactionSuccess.php');
                            }else{
                              header('location:../../view/user/transactionFailed.php');
                            }
    }

else if ($balance<$amount)
{
  header('location:../../view/user/transactionFailed.php');
}

else
{
  print_r('Server Error');
}

  

        
}

  
?>