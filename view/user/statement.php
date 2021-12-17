<?php
      $title= "Statement";
      include('header.php');
      require_once('../../model/transaction_model.php');
?>

            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                    <br><br><br><br><br>
                    <fieldset style="width:60%;  margin:  0px auto;" >
                        
                        <legend><b>Transaction Histroy</b></legend>
                        <table border="1" style="border:2px solid black; border-collapse: collapse;"  width="100%" >
                        <tr>
                        <input type="text" name="id" id="transid" size="60"  placeholder="Enter Transaction ID to search" onkeyup="searchTransaction()"/>
                 <br><br>
            </tr>
                                  
                        <tr>
                          
                          <th >TYPE</th>
                          <th>Number</th>
                          <th>Date</th>
                          <th>Transaction ID</th>
                          <th>Amount</th>
                                 
                        </tr>
                        <div id= "result">
                        <?php

                        
                          $tablename = $_SESSION['username'];
                           $conn = mysqli_connect('localhost', 'root', '', 'zetcash');
                           $sql = "select * from $tablename";
                           $result = mysqli_query($conn, $sql);
                           while($transaction=mysqli_fetch_array($result))
                           /*getAlltransaction($tablename);
                           while($transaction)*/
                           {
                            echo "<tr>";
                            
                            echo "<td>"; echo $transaction["type"]; echo "</td>";
                            echo "<td>"; echo $transaction["number"]; echo "</td>";
                            echo "<td>"; echo $transaction["date"]; echo "</td>";
                            echo "<td>"; echo $transaction["id"]; echo "</td>";
                            echo "<td>"; echo $transaction["amount"]; echo "</td>";
                            echo "</tr>";


                            
                    }
                        ?>
                        
                      </table>
                      <div>
                          
                        
                    </fieldset>
                    <br><br><br><br><br>
                
                    
                </td>
                
                
            </tr>
            <script type="text/javascript" src="../../scripts/script.js"></script>
        <?php
 include('footer.php');
 ?>