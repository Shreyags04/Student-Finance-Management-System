<?php 
include 'config.php';
session_start();
error_reporting(0);
if (isset($_POST['department'])) {
	$dept_id = $_POST['dept_id'];
	$password = $_POST['password'];
	if ($dept_id=="dept" && $password=="password") {
		header("Location: hostel/pageOptions.php");
	} else {
		echo "<script>alert('Woops! Try Again.')</script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="images/form1.jpg" alt="form1">
				
				
<style>
.example_e {
	border: none;
	background: #404040;
	color: #ffffff !important;
	font-weight: 100;
	padding: 20px;
	text-transform: uppercase;
	border-radius: 6px;
	display: inline-block;
	transition: all 0.3s ease 0s;
}

.example_e:hover {
	color: #404040 !important;
	font-weight: 700 !important;
	letter-spacing: 3px;
	background: none;
	-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	transition: all 0.3s ease 0s;
}
</style>



			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">College</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Parent</button>
					</div>
				</div>
				<form class="form-detail" action="index.php" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="dept_id" id="full_name" class="input-text" required>
								<span class="label">ID</span>
		  						<span class="border"></span>
							</label>
						</div>
						
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						


						<div class="form-row-last">
							<input type="submit" name="department" class="register" value="Login">
						</div>
					</div>
				</form>










				<form class="form-detail" action="parent/page1.php" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="fname" id="full_name_1" class="input-text" required>
								<span class="label">Parent Name</span>
		  						<span class="border"></span>
							</label>
						</div>
						


						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="usn" id="password_1" class="input-text" required>
								<span class="label">USN</span>
								<span class="border"></span>
							</label>
						</div>
						

						<div class="form-row-last">
							<input type="submit" name="parent" class="register" value="Login">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	




	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>