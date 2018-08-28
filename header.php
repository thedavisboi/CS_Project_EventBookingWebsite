<?php
	session_start();
	$message = "";
	
	if (isset($_SESSION['uname'])){
		$message = '<li><a href="#"><span class="glyphicon glyphicon-Update"></span> <?php ?> </a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-logout"></span> Logout</a></li>';
	}
	else {
		$message = '<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book It 'n Come</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/myStyle.css" rel="stylesheet" type="text/css" />
  
</head>

<body>

<div class="header"> <!-- header found at https://www.w3schools.com/bootstrap/bootstrap_navbar.asp -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Book It 'n Come</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
	  <li><a href="events.php">Events</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<?php echo $message ?>
    </ul>
	<form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	
  </div>
</nav>
</div> <!-- end of header -->