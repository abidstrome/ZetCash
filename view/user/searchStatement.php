<?php
      $title= " Search Statement";
      include('header.php');
      require_once('../model/transaction_model.php');


?>
l>
              </td>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

              
                    <br><br><br><br><br>
                    <fieldset style="width:60%;  margin:  0px auto;" >
                        
                        <legend><b>Transaction Histroy</b></legend>
                        <table border="1" style="border:2px solid black; border-collapse: collapse;"  width="100%" `>
                        <tr>
                 <input type="text" name="id" id="transid" size="60"  placeholder="Enter Transaction ID to search" onkeyup="searchTransaction()"/>
                 <br><br>
                 <!--<input type="submit" name="search"  value="search"  ><hr>  <br>-->
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
                           
                           require_once('../model/transaction_model.php');
                           $tableName = $_SESSION['username'];
                           //print_r($tableName);
                           $id = $_POST['id'];
                           if(isset($_POST['search'])){

                             $transaction=getTransaction($id,$tableName);
                          if($transaction==true)
                        
                          {
                           echo "<tr>";
                           
                           echo "<td>"; echo $transaction["type"]; echo "</td>";
                           echo "<td>"; echo $transaction["number"]; echo "</td>";
                           echo "<td>"; echo $transaction["date"]; echo "</td>";
                           echo "<td>"; echo $transaction["id"]; echo "</td>";
                           echo "<td>"; echo $transaction["amount"]; echo "</td>";
                           echo "</tr>";
                          }else{
                          echo "Failed to Search";
                         }
                           
                      }
                       ?>
                        
                      </table>
                      </div>
                      <hr><a id="seeAll" href="statement.php"><input type="button" id="seeAll" value="See All Transaction" ></a>  <br>
                      <?php 
                           if(isset($_POST['seeAll'])){
                              header("Location: statement.php");
                          }
                      ?>
                        
                          
                        
                    </fieldset>
                    <br><br><br><br><br>
                

                </td>
                
                
            </tr>
            <script type="text/javascript" src="../scripts/script.js"></script>
        <?php
 include('footer.php');
 ?>