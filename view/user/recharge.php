<?php
      $title= "Recharge";
      include('header.php');
      $type= 'Recharge';
?>

    
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                  <form action="../../controller/user/transactionhandler.php?type=<?php echo $type;?>" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%;  margin:  0px auto;" >
                        
                        <legend><b>Mobile Recharge</b></legend>
                        
                          Mobile Number&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="number" placeholder=" 017xxxxxxx"><br><br>
                        
                        
                        Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                        <input type="float" name="amount" placeholder=" 0.00" required>
                        <hr>
                        
                        <input type="submit" name="submit" value="Recharge">
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>

                </td>
                
                
            </tr>

        <?php
 include('footer.php');
 ?>