<?php
      $title= "Donate";
      include('header.php');
      $type=$title;
?>


            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                  <form action="../../controller/user/transactionhandler.php?type=<?php echo $type;?>" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%;  margin:  0px auto;" >
                        
                        <legend><b>Donate</b></legend>
                        
                          Donation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                          <select name="catergory">
                          <option value = "brac"> Brac  
                          </option>  
                          <option value = "1takayahar"> Ek Takay Ahar  
                          </option>  
                          <option value = "eshoShobai"> Esho Shobai   
                          </option>  
                          <option value = "mastul"> MASTUL Foundation  
                          </option>  
                          <option value = "telephone"> Alter Youth  
                          </option>  
                          <option value = "sajida"> Sajida Foundation
                          </option>
                          </select> 
                          <br><br>  
                        
                        
                        Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                        <input type="float" name="amount" placeholder=" 0.00" required>
                        <hr>
                        
                        <input type="submit" name="donate,pay" value="Make Payment">
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>

                </td>
                
                
            </tr>
<?php
 include('footer.php');
 ?>