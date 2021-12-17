<?php
      $title= "Change Password";
      include('header.php');
?>

    
 
            
            <td style="border:2px solid black; border-collapse: collapse;">
                
               
                    <br><br><br><br><br>
                    <fieldset style="width:45%; margin:  0px auto;">
                        
                        <legend><b>FORGOT PASSWORD</b></legend>
                        
                        Current Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="cpassword"><hr>
                        New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="npassword"><hr>
                        Re-enter password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="rnpassword"><hr>
                        <input type="submit" id="change" value="Change Password" onclick="changePassword()">
                        <a id="reset" href="dashboard.php"><input type="button" name="back" value="back"></a>
                        <br><br>

                        
                    </fieldset>
                    
                    <br><br><br><br><br>
                    <h4  align="center" id="response"></h4>
                
                
            </td>
            
        </tr>
        <script type="text/javascript" src="../scripts/script.js"></script>

      <?php
 include('footer.php');
 ?>