<?php

include '../config.php';
include 'nav.php';


if (isset($_POST["add1"])) {
  $usn = $_POST['usn'];
  $otherexp = $_POST['otherexp'];
  $amt = $_POST['amte'];


  
 $sql= "INSERT INTO `otherexp`(`USN`, `OtherExp`, `Amount`) VALUES ('$usn','$otherexp','$amt') ";

 $result= mysqli_query($conn,$sql);

  
  
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Financial Management</title>
    <style>
        body {

            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('book.jpg');
           
        linear-gradient(to bottom, rgba(255,255,255,0.5), rgba(255,255,255,0.5)); /* Replace 'background-image.jpg' with the path to your background image */
   
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }


        h2 {
            color: White;
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
            background-color: #fff;
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
   background-color: rgba(255, 255, 255, 0.7);
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
    



    <div class="signup-form">
        <h3>Enter New Fee</h3>
        <form class="box-form2" action="otherExp.php" method="POST">
        <input type="text" id="usn" name="usn" placeholder="Enter USN" required>
        <input type="text" id="categ" name="otherexp" placeholder="Enter Other exp" required>
        <input type="text" id="signup-name" name="amte" placeholder="EnterAmount" required>
        
        
            <div class="box-btn3">
        <button class="btn-login" name="add1" type="submit" value="enter">Add</button>
      </div>
        </form>
    </div>

    
</div>

</body>
</html>