<?php
include '../config.php';
session_start();
$total_oth=0;
if (isset($_POST['parent'])) {
	$fname = $_POST['fname'];
	$usn = $_POST['usn'];
	$sql = "SELECT * FROM parents WHERE FatherName='$fname' AND USN='$usn'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
	} else {
        header("Location: failed.php");		
        exit();
	}
}
$sql1="SELECT * FROM `otherexp`WHERE `USN`='$usn'";
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

<h2>Monthly Fee of <?php 
echo " : " .date("F"); ?></h2>

<h3>Fixed Fee </h3>
<table>
    <?php
 echo"
<tr>
<th>Fee ID</th>
<th>Fees</th>
<th>Amount</th>
</tr>
";
    while ($row=mysqli_fetch_array($result2)){
   echo"
  <tr>
    <td>".$row['FeeId']."</td>
    <td>".$row['Fee_category']."</td>
    <td>".$row['Amount']."</td>
  </tr>";
    }
  ?>
</table>
</body>



<body>
<h3>Other Fee</h3>
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
$sqlo = "SELECT SUM(Amount) as total_oth FROM otherexp where `USN`='$usn'";
$resulto = $conn->query($sqlo);
if ($resulto->num_rows > 0) {
    // Fetch the result
    $row1 = $resulto->fetch_assoc();
    $total_oth = $row1["total_oth"];
}


$pendi = "SELECT Amount  FROM `pending_fee` where `USN`='$usn'";
$prn_res = $conn->query($pendi);
if ($prn_res->num_rows > 0) {
    // Fetch the result
    $row5 = $prn_res->fetch_assoc();
    $pen_fee = $row5["Amount"];
}


echo "</br>";
echo "Fixed Fee : ". $total_fee ."</br>";
echo "Other fee : ". $total_oth ."</br>";
echo "Pending fee : ". $pen_fee ."</br>";
$total = $total_fee+$total_oth+$pen_fee;
echo "Total Fee : " . $total ;
if  ( $total_oth==0){
  header("Location: uptodate.php");
}
?>
     <form class="form-detail" action="page2.php" method="post">
					<div class="tabcontent" id="sign-in">
						
						


						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="usn" id="password_1" class="input-text" required>
								<span class="label"> Enter USN to Confirm Payment</span>
								<span class="border"></span>
							</label>
						</div>
						

						<div class="form-row-last">
							<input type="submit" name="parent" class="register" value="Pay">
						</div>
					</div>
				</form>
  </body>
</html>



<?php
$mon = "SELECT month  FROM `month` where `id`=1";
$monn = $conn->query($mon);
if ($monn->num_rows > 0) {
    // Fetch the result
    $row6 = $monn->fetch_assoc();
    $month = $row6["month"];
}

//  line 166 for current date and 177 to give manual date (comment any one)


//$cur_month = date("F"); 
$cur_month = "February";






// echo $cur_month."</br>";
// echo $month."</br>";
if($month!=$cur_month){

  if($total_oth!=0){

 $insert= "UPDATE `pending_fee` SET `Amount`=`Amount`+ $total_fee WHERE `USN`='$usn'";

  $result= mysqli_query($conn,$insert);
  // $month=$cur_month;

  $upd= "UPDATE `month` SET `month`= '$cur_month' WHERE `id`=1";
  $updd= mysqli_query($conn,$upd);


  // echo $cur_month."</br> 185";
  // echo $month."</br> 186";

  }

}

?>


