<?php include "header.php" ?>

<?php
	session_start();
	$message = "";
	$regUpdate = "";
	
	if (isset($_GET['logout'])){//implement a simple logout 
		session_unset();
		session_destroy();
		 header("Location:index.php");//reload this page
	}
	if (isset($_SESSION['Uname'])){ 
		$message = '<form action="index.php" method="get"><button type="submit" name="logout">logout</button></form>';
		
		$regUpdate = '<form action="update_db.php" method="post" name="update_form" >
							<fieldset><legend>Update Info</legend>
							
								<div id="fn_lbl" class="up_lbl">First Name: </div> 
								<div id="fn_ip" class="up_in"><input type="text" name="fname" id="fname" /></div>
								
								<div id="ln_lbl" class="up_lbl">Last Name: </div> 
								<div id="ln_ip" class="up_in"><input type="text" name="lname" id="lname" /></div>
								
								<div id="em_lbl" class="up_lbl">Email Address: </div>
								<div id="em_ip" class="up_in"><input type="text" name="email" id="email" /></div>
								
								<div id="p_lbl" class= "up_lbl">Password: </div> 
								<div id="p_ip" class="up_in"><input type="password" name="pass" id="pass" /></div>
								
								<div id="cp_lbl" class= "up_lbl">Confirm Password: </div> 
								<div id="cp_ip" class="up_in"><input type="password" name="cpass" id="cpass" /></div>
								
								<div id="up_btn"><input type="submit" name="submit" id="submit" value="Update"  /></div>
							</fieldset>
						</form>'; 
						
		$reg_up= '<a href="registerForm.php">UPDATE </a>';
		$reg_up2= '<a href="registerForm.php">Update </a>';
	}
	else {		
		$message = '<form action="login_db.php" method="post" >
						<fieldset>
							<legend>Login</legend>
							<span class="loglbl" > User Name: </span>
							<span class="logip"><input type="text" name="uname" id="uname" /></span>
							<span class="loglbl" >Password: </span>
							<span class="logip"><input type="password" name="pass" id="pass" /></span> <br/>
							<span id="logbtn"><input type="submit" value="login"/></span>		
						</fieldset>
					</form>';
				
		$regUpdate = '<form action="insert_db.php" method="post" name="registerForm" id="registerForm" >
				
				<fieldset><legend>Register with Squash Mania</legend>
				
					<div id="fn_lbl" class="labels" >First Name: </div> 
					<div id="fn_input" class="in"><input type="text" name="fname" id="fname" /></div>
					
					<div id="ln_lbl" class="labels">Last Name: </div> 
					<div id="ln_input" class="in"><input type="text" name="lname" id="lname" /></div>
					
					<div id="em_lbl" class="labels">Email Address: </div> 
					<div id="em_input" class="in"><input type="text" name="email" id="email" /></div>
					
					<div id="un_lbl" class="labels">User Name: </div> 
					<div id="un_input" class="in"><input type="text" name="uname" id="uname" /></div>
					
					<div id="pass_lbl" class="labels">Password: </div> 
					<div id="pw_input" class="in"><input type="password" name="pass" id="pass" /></div>
					
					<div id="cpass_lbl" class="labels">Confirm Password: </div> 
					<div id="cpw_input" class="in"><input type="password" name="cpass" id="cpass" /></div>
					
					<div id="btn"><input type="submit" name="submitbtn" id="submitbtn" value="Register"  /></div>
				</fieldset>
				</form>'; 
				
		$reg_up= '<a href="registerForm.php">REGISTRATION </a>';
		$reg_up2= '<a href="registerForm.php">Registration </a>';
		
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