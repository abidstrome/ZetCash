<?php
    $title= "Cashout";
    include('header.php');
    $type= "Cash out" ;
    global $type;

?>


    
   
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                  <form action="../../controller/user/transactionhandler.php?type=<?php echo $type;?>" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%;  margin:  0px auto;" >
                        
                        <legend ><b>Agent Cashout</b></legend>
                        
                          Cash Out Number&nbsp;:&nbsp;&nbsp;<input type="text" name="merchantNumber" placeholder=" 019xxxxxxx"><br><br>
                        
                        
                        Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                        <input type="float" name="amount" placeholder=" 0.00" required>
                        <hr>
                        
                        <input type="submit" name="submit" value="Cash Out">
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>

                </td>
                
                
            </tr>

        <?php
 include('footer.php');
 ?>