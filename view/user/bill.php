<?php
      $title= "Pay Bill";
      include('header.php');
      $type = $title;
?>

    
 
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                  <form action="../../controller/user/transactionhandler.php?type=<?php echo $type;?>" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%;  margin:  0px auto;" >
                        
                        <legend><b>Pay Bill</b></legend>
                        
                          Organization Type&nbsp;&nbsp;:&nbsp;&nbsp;
                          <select name="catergory">
                          <option value = "Electricity"> Electricity  
                          </option>  
                          <option value = "gas"> Gas  
                          </option>  
                          <option value = "water"> Water   
                          </option>  
                          <option value = "internet"> Internet  
                          </option>  
                          <option value = "telephone"> BTCL Telephone  
                          </option>  
                          <option value = "tv"> DTH  
                          </option>
                          <option value = "education"> Education  
                          </option>
                          <option value = "card"> Credit Card  
                          </option>
                          <option value = "others"> others  
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