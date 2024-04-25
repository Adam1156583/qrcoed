<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iskola");

if (isset($_POST["ev"])) {
    $ev= $_POST["ev"];
    $oszt= $_POST["oszt"];
    $conn -> query("insert into osztaly(evfolyam,osztaly) values (".$ev.",".$oszt.")");

}
?>
<form action="osztaly.php" method="post">
    evfolyam
    <input type="number" name="ev" id="ev">
    osztaly
    <input type="number" name="oszt" id="oszt">
</form>