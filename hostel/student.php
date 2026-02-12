<?php

include '../config.php';
include 'nav.php';


if (isset($_POST["submit"])) {
  $usn = $_POST['usn'];
  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $year = $_POST['year'];
  $age = $_POST['age'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];


  
 $sql= "INSERT INTO `students`(`USN`, `Name`, `Year`, `Age`, `Phone`, `Address`) VALUES ('$usn','$name','$year','$age','$phone','$address')";

 $result= mysqli_query($conn,$sql);

  $sqll="INSERT INTO `parents`(`USN`, `FatherName`, `MotherName`) VALUES ('$usn','$fname','$mname')";

  
  $result2= mysqli_query($conn,$sqll);

  $sql3="INSERT INTO `pending_fee`(`USN`, `Amount`) VALUES ('$usn',0)";

  $result3= mysqli_query($conn,$sql3);


  
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
        <h3>Signup</h3>
        <form class="box-form" action="student.php" method="POST">
        <input type="text" id="signup-usn" name="usn" placeholder="Enter the USN" required>
        <input type="text" id="signup-name" name="name" placeholder="Enter the name" required>
        <input type="text" id="signup-fullname" name="fname" placeholder="Enter Father name" required>
    	<input type="text" id="signup-fullname" name="mname" placeholder="Enter Mother name" required>  
        <input type="number" id="signup-year" name="year" placeholder="Current Year" required>
        <input type="number" id="age" name="age" placeholder="Age" required>
        <input type="textarea" id="address" name="address" placeholder="Enter the address">
        <input type="tel" id="phone" name="phone" placeholder="Enter phone number" pattern="[\d\s()+-]{6,20}" required />

            <!-- <button type="submit" name="submit">Signup</button> -->


            <div class="box-btn-login">
        <button class="btn-login" name="submit" type="submit" value="enter">Enter</button>
      </div>
        </form>
    </div>

    
</div>

</body>
</html>