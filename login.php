<?php include "header.php"; 

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$uname = $_POST["uname"];
		$pass = $_POST["pass"];

		require "connection.php";

		$sql = "SELECT * from users WHERE uname = '$uname' AND pass = sha1('$pass')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
    	while($row = mysqli_fetch_assoc($result)) {
        	
        	$_SESSION["uname"] = $row["uname"];
        	$_SESSION["fname"] = $row["fname"];
        	$_SESSION["lname"] = $row["lname"];

        	header("location: index.php");

    	}
	} else {
    echo "0 results";
	}

}

?>

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
			
			<div id="up_btn" ><input type="submit" name="submit" id="submit" value="Submit" /></div>
		</fieldset>
	</form>

</div> <!--End of Contents-->

</div> <!--End of Container-->

<?php include "footer.php"; ?>