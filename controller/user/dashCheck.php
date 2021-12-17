<?php 

if(isset($_POST['sendmoney']))
{
    echo "send";
    header('location:../../view/user/sendmoney.php');

}
else if(isset($_POST['recharge']))
{
    //echo "recharge";
    header('location:../../view/user/recharge.php');
}
else if(isset($_POST['cashin']))
{
    
    header('location:../../view/user/cashin.php');
}
else if(isset($_POST['cashout']))
{
    header('location:../../view/user/cashout.php');
}


else if(isset($_POST['payment']))
{
    
    header('location:../../view/user/payment.php');
}
else if(isset($_POST['bill']))
{
    
    header('location:../../view/user/bill.php');
}
else if(isset($_POST['donate']))
{
    
    header('location:../../view/user/donate.php');
}
else if(isset($_POST['history']))
{
    echo "history";
    header('location:../../view/user/statement.php');
}

?>