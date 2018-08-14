<?php include "header.php" ?>

<div class="container">
	<h2>Register With Us!</h2>
	<div id="left">
		<ul id="list">
			<li><a href="index.php">Home</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Current Events</a></li>
				  <li><a href="#">Future Events</a></li>
				  <li><a href="#">Past Events</a></li>
				</ul>
			</li>
			<li><a href="about.php">Contact Us</a></li>
			<li><a href="contact.php">FAQs</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Current Events</a></li>
				  <li><a href="#">Future Events</a></li>
				  <li><a href="#">Past Events</a></li>
				</ul>
			</li>
		</ul>
	</div>
	
<div class="contents">
<form action="registration.php" method="post">
	<fieldset><legend>Registration Form</legend>
							
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
</form>

</div>

</div>

<?php include "footer.php" ?>