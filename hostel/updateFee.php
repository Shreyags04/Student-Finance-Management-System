<?php

include '../config.php';
include 'nav3.php';


if (isset($_POST["update"])) {
  $categ = $_POST['categ'];
  $amt = $_POST['amt'];


  
 $sql= "UPDATE `fee` SET Amount='$amt' WHERE `Fee_category`='$categ'";

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
    



    <div class="update-form">
        <h3>Update Fee</h3>
        <form class="box-form3" action="updateFee.php" method="POST">
        <input type="text" id="categ" name="categ" placeholder="Enter Fee Category" required>
        <input type="text" id="up-name" name="amt" placeholder="Enter New Amount" required>
        
        
            <div class="box-btn">
        <button class="btn-login" name="update" type="submit" value="enter">Update</button>
      </div>
        </form>
    </div>

    
</div>

</body>
</html>