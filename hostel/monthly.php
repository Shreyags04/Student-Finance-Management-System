<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .signup-form,
        .login-form {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
  <div class="login-form">
        

 
        
  <button onclick="window.location.href = 'newFee.php';">New Fee</button>
  <button onclick="window.location.href = 'updateFee.php';">Edit  Fees</button>


           	<!-- <button type="submit">Enter new student details</button></a><br><br>
		    <button type="submit">Enter new fees</button><br> <br>
            <button type="submit">Enter student expenditure</button><br><br>
        	<button type="submit"> enter   </button> -->
		 
        </form>
    </div>

</div>
</body>
</html>