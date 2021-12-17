<?php
    $title= "Cash IN";
    include('header.php');
?>


            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                  <form action="../../controller/user/transactionhandler.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%;  margin:  0px auto;" >
                        
                        <legend><b>Cash In</b></legend>
                        
                          Enter Card Number&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                            <input id="ccn" type="tel" name="cardnumber" placeholder="xxxx xxxx xxxx xxxx">
                            <!--<input type="tel" name="c1" size="1" pattern="[0-9]{4}" required><b>  </b>
                            <input type="tel" name="c2" size="1" pattern="[0-9]{4}"required><b>  </b>
                            <input type="tel" name="c3" size="1" pattern="[0-9]{4}"required><b>  </b>
                            <input type="tel" name="c4" size="2" pattern="[0-9]{4}"required>-->
                            <br><br>

                            
                            Valid Till&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                            <input class="inputCard" type="text" name="expirymm" id="expiry" placeholder="mm" size="1" />/
                            <input class="inputCard" type="text" name="expiryyy" id="expiry" placeholder="yy " size="1" />


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            CVC/CVV&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                            <input type="tel" name="cvc" size="1" ><b>  </b>
                            
                            <br><br>
                            Card Holder Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                            <input type="text" name="name" placeholder=" " required>
                            <br><br>
                            Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                            <input type="float" name="amount" placeholder=" 0.00" required>
                            <hr>
                        
                        <input type="submit" name="cashin" value="Cash In">
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>

                </td>
                
                
            </tr>

        <?php
 include('footer.php');
 ?>