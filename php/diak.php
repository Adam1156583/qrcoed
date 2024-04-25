<?php 


$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iskola");
if (isset($_POST["nev"])) {
    $nev = $_POST["nev"];
    $ev = $_POST["ev"];
    $oszt = $_POST["oszt"];
    $fon = $_POST["fon"];
    $conn->query("insert into diak(nev,szulev,osztaly,osztalyfonok) values ('".$nev."',".$ev.",".$oszt.",".$fon.")");
}

?>
<form action="diak.php" method="post">
    neve:
    <input type="text" name="nev" id="nev">
    születési év:
    <input type="number" name="ev" id="ev">
    osztály:
    <input type="number" name="oszt" id="oszt">
    osztalyfonok:
    <input type="number" name="fon" id="fon">
</form>