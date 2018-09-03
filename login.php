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
                <form action="login.php" method="post">
					<fieldset><legend>Login</legend>
								
						<div id="u_lbl" class= "up_lbl">User Name: </div>
							<div id="u_ip" class="up_in"><input type="text" name="uname" id="uname" /></div>
									
							<div id="p_lbl" class= "up_lbl">Password: </div> 
								<div id="p_ip" class="up_in"><input type="password" name="pass" id="pass" /></div>
			
							<div id="up_btn" ><input type="submit" name="submit" id="submit" value="Submit" /></div>
					</fieldset>
				</form>
	            
            <div class="cleaner"></div>
                  	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->

<?php include "footer.php"; ?>