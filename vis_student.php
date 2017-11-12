<!doctype html>

<html lang="no">
<meta charset="utf-8">
<head>
    <title>Obligatorisk oppgave 1</title>
    
    <style>

    
    
    
    </style>
    
</head>
    
<body>
    <h2>Vis alle studenter</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a>Trykk for å vise alle studenter:</a><br>
           <input type="submit" value="Vis studenter" id="fortsett" name="fortsett" alt="vis studenter">
    
        
    </form>
    
</body>
    
</html>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/student.txt";

$mode = "r";
$file = fopen($filnavn,$mode);
    
$deler = array();
    
while(!feof($file)){
    $innhold = fgets($file);
    array_push($deler,explode(";", rtrim($innhold)));
    
}

    
foreach($deler as $navnDel){
    echo("<br> Brukernavn: $navnDel[0] <br> Fornavn: $navnDel[1] <br> Etternavn: $navnDel[2] <br> Klassekode: $navnDel[3] <br>");
}}

    
?>