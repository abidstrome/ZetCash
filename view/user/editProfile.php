<?php
  

    $title= "Edit Profile";
    include('header.php');


    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dob=$_SESSION['dob'];
   
    $gender=$_SESSION['gender'];
?>


            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">
                  <!--<form action="../controller/edit.php" method="post">-->
                    <fieldset>
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" id="name"value="<?php echo $name ?>" ><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" id="email" value="<?php echo $email ?>"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <input type="radio" id="gender" value="Male"> Male
                            <input type="radio" id="gender" value="Female"> Female
                            <input type="radio" id="gender" value="Other"> Other
                            <hr>
                       Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" id="dob"value="<?php echo $dob ?>" size="1" ><b> </b>
                           <!-- <input type="tel" name="mm" value="<?php //echo $mm ?>" size="1" ><b> /</b>
                            <input type="tel" name="yyyy" value="<?php //echo $yyyy ?>" size="2" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
-->
                          (dd/mmm/yyyy) <hr>
                        
                        <input type="submit" id="submit" value="Submit" onclick="editProfile()">
                         </fieldset>
                          <br><br>
                         <h4  align="center" id="response"></h4>
                       <!--</form>-->
                       
                  
                </td>
                
                
            </tr>
            <script type="text/javascript" src="../../scripts/script.js"></script>
      <?php
 include('footer.php');
 ?>