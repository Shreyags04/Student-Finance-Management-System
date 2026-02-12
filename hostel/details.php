<?php
include '../config.php';
include 'studentdetails.php';



$no = $_POST['no'];

// echo "USN =  ";
// echo $no;







$sql1="SELECT * FROM `otherexp`WHERE `USN`='$no'";
$result1= mysqli_query($conn,$sql1);
$sql2="SELECT * FROM `fee`";
$result2= mysqli_query($conn,$sql2);





?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>


<body>
<h2>Other Fee</h2>
<table>
    <?php

echo" <tr>
   
<th>Fee</th>
<th>Amount</th>
</tr>
<tr>";

    while ($row=mysqli_fetch_array($result1)){
   echo"
   
    <td>".$row['OtherExp']."</td>
    <td>".$row['Amount']."</td>
  </tr>";
    }
  ?>
</table>




     <?php


$sqlf = "SELECT sum(Amount) as total_fee from `fee`";


$resultf = $conn->query($sqlf);

if ($resultf->num_rows > 0) {
    // Fetch the result
    $row = $resultf->fetch_assoc();
    $total_fee = $row["total_fee"];
}



$sqlo = "SELECT SUM(Amount) as total_oth FROM otherexp where `USN`='$no'";
$resulto = $conn->query($sqlo);

if ($resulto->num_rows > 0) {
    // Fetch the result
    $row1 = $resulto->fetch_assoc();
    $total_oth = $row1["total_oth"];
}

if($total_oth>0){
echo "</br>";
echo " Monthly Fees :  ". $total_fee ."</br>";
echo " Other Fees :  ". $total_oth ."</br>";
$total = $total_fee+$total_oth;
echo " Total Fees :  ". $total ."</br>";

}else{
  echo "<script>alert('No fees.')</script>";
}
?>


</body>


</html>
