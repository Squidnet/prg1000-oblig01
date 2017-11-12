<!doctype html>

<html lang="no">
<meta charset="utf-8">
<head>
    <title>Obligatorisk oppgave 1</title>
    
    <style>

    
    
    
    </style>
    
</head>
    
<body>
    <h2>Registering av klasser</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a>Klassekode:</a><input type="text" id="klassekode" name="klassekode" required><br>
           <a>Klassenavn:</a><input type="text" id="klassenavn" name="klassenavn" required><br>
           <input type="submit" value="Fortsett" id="fortsett" name="fortsett" alt="fortsett">
           <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill">
        
    </form>
    
</body>
    
</html>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/klasse.txt";

$klassekode=$_POST["klassekode"];
$klassenavn=$_POST["klassenavn"];

if (!$klassekode or !$klassenavn){
    echo("Begge feltene må fylles ut!");}

else{   $mode = "a";
        $line = "\n" . $klassekode . ";" . $klassenavn;
        $file = fopen($filnavn, $mode);
        fwrite($file, $line);
        fclose($file);
        echo("$klassenavn ble lagret i klasse.txt!");}
}
        
?>