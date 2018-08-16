<?php include "header.php" ?>

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