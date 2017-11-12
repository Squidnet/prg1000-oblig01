<!doctype html>

<html lang="no">
<meta charset="utf-8">
<head>
    <title>Obligatorisk oppgave 1</title>
    
    <style>

    
    
    
    </style>
    
</head>
    
<body>
    <h2>Vis alle klassser</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a>Trykk for å vise alle klasser:</a><br>
           <input type="submit" value="Vis klasser" id="fortsett" name="fortsett" alt="vis klasse">
    
        
    </form>
    
</body>
    
</html>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/klasse.txt";

$mode = "r";
$file = fopen($filnavn,$mode);
    
$deler = array();
    
while(!feof($file)){
    $innhold = fgets($file);
    array_push($deler,explode(";", rtrim($innhold)));
    
}

    
foreach($deler as $navnDel){
    echo("<br> Klassekode: $navnDel[0] <br> Klassenavn: $navnDel[1] <br>");
}}

    
?>