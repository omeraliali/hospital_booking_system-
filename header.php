<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<h1>My forum</h1>
    <div id="wrapper">
		<div id="menu">
			<a class="item" href="index.html">HOME</a> - -
			<a class="item" href="signin.php">SIGN IN</a> - -
			<a class="item" href="signup.php">SIGN UP</a>
			 
			<div id="userbar">
			<div id='userbarcontent'>		
			<?php
					if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
					{
						echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
					}
					else
					{
						echo '<a href="signin.php">Sign in</a> or <a href="signup.php">create an account</a>.';
					}
			?>
			</div>
			</div>
		</div>
			<div id="content">



