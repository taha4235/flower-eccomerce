<?php
include("db.php");
$result="";
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
if(isset($_POST['lastname'])){
    $lastname=$_POST['lastname'];
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}
if(isset($_POST['msg'])){
    $msg=$_POST['msg'];
}
if(isset($_POST['send'])){
    $sql="INSERT INTO flower VALUES('$name','$lastname','$email','$msg')";
    $select="SELECT * FROM flower ";
    $queryconnections=mysqli_query($connect,$sql);
}
if(isset($_POST['quant'])){
    $quant=$_POST['quant'];
}
if(isset($_POST['add'])){
    $s="INSERT INTO   VALUES($quant)";
    $taha=mysqli_query($connect,$s);
    header("location:index.php");
}
$result = "SELECT * FROM flower";

while ($row = mysqli_fetch_all($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["lastname"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["msg"] . "</td>";
    echo "</tr>";
}
?>
