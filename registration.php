<?php include "header.php";
	
	$message = "";
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
			$message = '<p><br/>' . $uname . ' added to database</p>';
		} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}
	
?>

<div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categories</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="#">Sed eget purus</a></li>
                        <li><a href="#">Vestibulum eleifend</a></li>
                        <li><a href="#">Nulla odio ipsum</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Nunc a dui sed</a></li>
                        
                        <li class="last"><a href="#">Sed eget purus</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Events By Region </h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                        <h4><a href="#">Donec nunc nisl</a></h4>
                        <p class="price">$10</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
        	
        	<h1>Register With Us!</h1>
                <form action="registration.php" method="post">
		<fieldset><legend>Registration Form</legend>
								
			<div id="fn_lbl" class="up_lbl">First Name: </div> 
				<div id="fn_ip" class="up_in"><input type="text" name="fname" id="fname" /></div>
								
			<div id="ln_lbl" class="up_lbl">Last Name: </div> 
				<div id="ln_ip" class="up_in"><input type="text" name="lname" id="lname" /></div>
				
			<div id="u_lbl" class= "up_lbl">User Name: </div>
				<div id="u_ip" class="up_in"><input type="text" name="uname" id="uname" /></div>
				
			<div id="dob_lbl" class="up_lbl">Date of Birth: </div>
				<div id="dob_ip" class="up_in"><input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd" /></div>
			
			<div id="em_lbl" class="up_lbl">Email Address: </div>
				<div id="em_ip" class="up_in"><input type="text" name="email" id="email" /></div>
									
			<div id="p_lbl" class= "up_lbl">Password: </div> 
				<div id="p_ip" class="up_in"><input type="password" name="pass" id="pass" /></div>
									
			<div id="cp_lbl" class= "up_lbl">Confirm Password: </div> 
				<div id="cp_ip" class="up_in"><input type="password" name="cpass" id="cpass" /></div>

			<div id="up_btn" ><input type="submit" name="submit" id="submit" value="Submit"  /></div>
		</fieldset>
	</form>
	
	<?php echo $message; ?>
            
            <div class="cleaner"></div>
                  	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->

<?php include "footer.php" ?>