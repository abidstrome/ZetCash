<?php
	session_start();
	$name =$_SESSION['name'];
	$username =$_SESSION['username'];
    $balance =$_SESSION['balance'];
	$email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dob=$_SESSION['dob'];
	$password=$_SESSION['password'];
	$number=$_SESSION['mobilenumber'];
	
	if(!isset($_COOKIE['flag']))
	{
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ZetCash - <?=$title?></title>
</head>
<body>
<table style="border:2px solid black; border-collapse: collapse;"  align="center"width="70%" >

<tr >

	<td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="right">

		 <img align="left" src="../../assets/zetcash.png" alt="Logo"width="200" height="100">
		   <br> 
		 <b>Logged in as </b>
		<a  href="../user/viewProfile.php"><?php echo $name ?></a>  
		<?php
				$username=$_SESSION['username'];
				$conn = mysqli_connect('localhost', 'root', '', 'zetcash');
				$sql = "select * from image where username='{$username}'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);

				
				if(mysqli_num_rows($result) > 0){
			  ?>
				<img src="<?php echo "{$row['image']}"; ?>" width="25px" height="25px">
			  <?php 
				}else{
			  ?>
				<img src="../assets/user.png" width="100px" height="100px">
			  <?php 
				}
			  ?>
			  |
		<a  href="../../controller/user/logout.php">Logout</a>
	

</tr>

<tr >
   
	
	<td colspan="1" width="32%" >
	  <b>Account </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Balance: <?=$balance?></b>
	  <hr align="left" width="90%">
		<ul align="left" >
			
			
		  <li><a  href="dashboard.php">Dashboard</a></li>
		  <li><a  href="viewProfile.php">View Profile</a></li>
		  <li><a  href="editProfile.php">Edit Profile</a></li>
		  <li><a  href="profilePicture.php">Change Profile Picture</a></li>
		  <li><a  href="changePassword.php">Change Password</a></li>
		  <li><a  href="../../controller/user/logout.php">Logout</a></li>
		</ul>
	  </td>
	
