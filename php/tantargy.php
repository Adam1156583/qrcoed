<?php 
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iskola");
if (isset($_POST["nev"])) {
    $nev = $_POST["nev"];
    $conn-> query("insert into tantargy(nev) values ('".$nev."')");
}

?>
<form action="tantargy.php" method="post">
    <input type="text" name="nev" id="nev">
    <input type="submit">
</form>