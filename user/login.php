<?php
	include("../classes/Autoload.php");
	$user = new User();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($user->login($_POST["user"], $_POST["password"]) != false){
			$err = "Wrong Username or Password";
		}
	}
?>
<html>
	<head>
		<title><?= Config::TITLE; ?></title>
		<style>
			.login_form {
				background-color:white;
				 border: 1px solid #e7e7e7;
				  border-radius:5px;
				 padding:20px;
				 position:relative;
				 max-width:400px;
				 top:100px;
				 margin: 0 auto;
				 color:#666;
				}

				.blue_btn{
				 background-color: #0066cc;
				 border: none;
				 color: white;
				 text-align: center;
				 padding: 10px 25px;
				}

				#remME_text{
					margin-left:30px;
				}
				#last_text{
						margin-left:100px;
				}

				.entry_text{
					
					display:table-cell;
					width:100%;
					height:25px;
					padding: 5px;
				}

				.entry_text2{
					
					display:table-cell;

					height:25px;
					padding: 5px;
				}

				.alert {
				  padding: 20px;
				  background-color: #f44336;
				  color: white;
				}

				.closebtn {
				  margin-left: 15px;
				  color: white;
				  font-weight: bold;
				  float: right;
				  font-size: 22px;
				  line-height: 20px;
				  cursor: pointer;
				  transition: 0.3s;
				}

				.closebtn:hover {
				  color: black;
				}
		</style>
		<? include(__dir__ . "/../layout/head.php"); ?>
	</head>
	<body>
		<? include(__dir__ . "/../layout/header.php"); ?>

	<!-- login form-->
	  <div class="login_form">
		<form action="login.php" method="post">
		  <h3>Log in</h3> 
		  <hr>
		  <p>Account
		  <br><input class="entry_text" type="text" name="user" required>
		  <p>Password
		  <br><input class="entry_text" type="password" name="password" required>
		  <p><input class="blue_btn" type="submit" value="Log in" name="submit">
		  <label id="remME_text" ><input type="checkbox" name="save">Remember Me</label>
		  <?php echo @$err; ?>
		</form>
	  </div>
	</body>