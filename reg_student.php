<!doctype html>

<html lang="no">
<meta charset="utf-8">
<head>
    <title>Obligatorisk oppgave 1</title>
    
    <style>

    
    
    
    </style>
    
</head>
    
<body>
    <h2>Registering av student</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a>Brukernavn:</a><input type="text" id="brukernavn" name="brukernavn" required><br>
           <a>Fornavn:</a><input type="text" id="fornavn" name="fornavn" required><br>
           <a>Etternavn:</a><input type="text" id="etternavn" name="etternavn" required><br>
           <a>Klassekode:</a><input type="text" id="klassekode" name="klassekode" required><br>
           <input type="submit" value="Fortsett" id="fortsett" name="fortsett" alt="fortsett">
           <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill">
        
    </form>
    
</body>
    
</html>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/student.txt";

$brukernavn=$_POST["brukernavn"];
$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];
$klassekode=$_POST["klassekode"];

if (!$brukernavn or !$fornavn or !$etternavn or !$klassekode){
    echo("Alle feltene må fylles ut!");}

else{   $mode = "a";
        $line = "\n" . $brukernavn . ";" . $fornavn . ";" . $etternavn . ";" . $klassekode;
        $file = fopen($filnavn, $mode);
        fwrite($file, $line);
        fclose($file);
        echo("$fornavn $etternavn ble lagret i student.txt!");}
}
        
?>