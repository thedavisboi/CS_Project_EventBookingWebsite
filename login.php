<?php include "header.php"; ?>

<div class="container">
	<h2>Register With Us!</h2>
		<?php include "leftPanel.php" ?>
	
<div class="contents">
	<form action="login.php" method="post">
		<fieldset><legend>Login</legend>
								
			<div id="u_lbl" class= "up_lbl">User Name: </div>
				<div id="u_ip" class="up_in"><input type="text" name="uname" id="uname" /></div>
									
			<div id="p_lbl" class= "up_lbl">Password: </div> 
				<div id="p_ip" class="up_in"><input type="password" name="pass" id="pass" /></div>
			
			<div id="up_btn" ><input type="submit" name="submit" id="submit" value="Submit"  /></div>
		</fieldset>
	</form>

</div> <!--End of Contents-->

</div> <!--End of Container-->

<?php include "footer.php"; ?>
