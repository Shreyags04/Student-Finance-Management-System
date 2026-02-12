<?php
include '../config.php';

$usn = $_POST['usn'];


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

echo "</br>";
echo " Fee". $total_fee ."</br>";
echo "other". $total_oth ."</br>";
$total = $total_fee+$total_oth;
echo "Total Fee " . $total ."</br> ";



$fat_sql = "SELECT parents.FatherName as father_name FROM parents JOIN students on parents.USN = students.USN and parents.USN='$usn'";
$f_name = $conn->query($fat_sql);

if ($f_name->num_rows > 0) {
    // Fetch the result
    $row2 = $f_name->fetch_assoc();
    $father_name = $row2["father_name"];
}
echo "Father Name " . $father_name ."</br>" ;



$insert= "INSERT INTO `transactions`(`USN`, `parent`,`total`) VALUES ('$usn','$father_name','$total')";

$result= mysqli_query($conn,$insert);

echo "inserted </br>";


$del= "DELETE FROM `otherexp` WHERE `USN` ='$usn'";
$del= mysqli_query($conn,$del);


$del2= "DELETE FROM `pending_fee` WHERE `USN` ='$usn'";
$del2= mysqli_query($conn,$del2);


echo "deleted </br>";


header("Location: ../index.php");
?>