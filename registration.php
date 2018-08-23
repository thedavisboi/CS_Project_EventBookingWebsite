<?php include "header.php";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$uname = $_POST["uname"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		
	require "connection.php";

		$sql = "INSERT INTO `users` (`fname`, `lname`, `uname`, `dob`, `email`, `pass`) VALUES ('$fname', '$lname', '$uname', '$dob', '$email', sha1('$pass'));";


		if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
		} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}
	
?>

<div class="container">
	<h2>Register With Us!</h2>
		<?php include "leftPanel.php" ?>
	
<div class="contents">
	<form action="registration.php" method="post">
		<fieldset><legend>Registration Form</legend>
								
			<div id="fn_lbl" class="up_lbl">First Name: </div> 
				<div id="fn_ip" class="up_in"><input type="text" name="fname" id="fname" /></div>
								
			<div id="ln_lbl" class="up_lbl">Last Name: </div> 
				<div id="ln_ip" class="up_in"><input type="text" name="lname" id="lname" /></div>
				
			<div id="u_lbl" class= "up_lbl">User Name: </div>
				<div id="u_ip" class="up_in"><input type="text" name="uname" id="uname" /></div>
				
			<div id="dob_lbl" class="up_lbl">Date of Birth: </div>
				<div id="dob_ip" class="up_in"><input type="text" name="dob" id="dob" value="yyyy-mm-dd" /></div>
			
			<div id="em_lbl" class="up_lbl">Email Address: </div>
				<div id="em_ip" class="up_in"><input type="text" name="email" id="email" /></div>
									
			<div id="p_lbl" class= "up_lbl">Password: </div> 
				<div id="p_ip" class="up_in"><input type="password" name="pass" id="pass" /></div>
									
			<div id="cp_lbl" class= "up_lbl">Confirm Password: </div> 
				<div id="cp_ip" class="up_in"><input type="password" name="cpass" id="cpass" /></div>

			<div id="up_btn" ><input type="submit" name="submit" id="submit" value="Submit"  /></div>
		</fieldset>
	</form>

</div> <!--End of Contents-->

</div> <!--End of Container-->

<?php include "footer.php" ?>