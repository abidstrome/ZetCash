<?php
      $title= "Change Picture";
      include('header.php');

      require_once('../../model/image_model.php');
      $username=$_SESSION['username'];
     
?>

   
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">
                    <fieldset style="width:60%;  margin:  1px auto;">
                  
                  <legend><b>PROFILE PICTURE</b></legend>

                  <form method="post" action="../../controller/user/uploadImage.php" enctype="multipart/form-data">

                  <?php
                        
												$conn = mysqli_connect('localhost', 'root', '', 'zetcash');
                        $sql = "select * from image where username='{$username}'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        
                        if(mysqli_num_rows($result) > 0){
                      ?>
                        <img src="<?php echo "{$row['image']}"; ?>" width="200px" height="200px"><br>
                      <?php 
                        }else{
                      ?>
                        <img src="../assets/user.png" width="100px" height="100px"><br>
                      <?php 
                        }
                      ?>
                  <input type="file" name="image" id="image"><hr>
                  
                  <button type="submit" name="upload" id="upload" > UPLOAD  </button>

                  

              </fieldset>
              <br><br>
                         <h4  align="center" id="response"></h4>
                </td>
                
                
            </tr>
            <script type="text/javascript" src="../scripts/script.js"></script>
<?php
 include('footer.php');
 ?>