<?php
include '../config.php';
include 'nav.php';
$tra="SELECT * FROM `transactions`";
$result1= mysqli_query($conn,$tra);

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

<h2>Transactions</h2>
<table>
    <?php

echo" <tr>
<th>Transaction ID</th>
<th>USN</th>
<th>Parents Name</th>
<th>Date</th>
<th>Amount Name</th>
</tr>";


    while ($row=mysqli_fetch_array($result1)){
   echo" 
  <tr>
    <td>".$row['transaction_id']."</td>
    <td>".$row['USN']."</td>
    <td>".$row['parent']."</td>
    <td>".$row['date']."</td>
    <td>".$row['total']."</td>
  </tr>";
    }
  ?>
</table>
</body>


</html>
