<?php 
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"iskola");

if (isset($_post["tanarnev"])) {
    $nev= $_post["tanarnev"];
    $ev= $_post["szulev"];
    $ferfi= $_post["radio1"];
    $conn-> query("insert into tanar(nev,szulev,ferfi) values ('".$nev."',".$ev.",".$ferfi.")");
    
}
?>

<form action="tanar.php" method="post">
    tanar neve
    <input name="tanarnev" id="tanarnev">
    szuletesi ev
    <input name="szulev" id="szulev">
    ferfi
    <input type="radio" name="radio1" id="radio1" value="0" >
    <label for="radio1">nő</label>
    <input type="radio" name="radio1" id="radio1" value="1">
    <label for="radio1">ferfi</label>
    <input type="submit">
</form>