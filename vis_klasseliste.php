<!doctype html>

<html lang="no">
<meta charset="utf-8">
<head>
    <title>Obligatorisk oppgave 1</title>
    
    <style>

    
    
    
    </style>
    
</head>
    
<body>
    <h2>Vis klasseliste</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
    <a>Klassekode:</a><input type="text" id="klassekode" name="klassekode" required><br>    
    <input type="submit" value="Søk" id="fortsett" name="fortsett" alt="fortsett">
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill">
        
    </form>
    
</body>
    
</html>

<?php
    
if (isset($_POST["fortsett"])){

$sook = $_POST["klassekode"];
    
if (!$sook)
echo("Du må skrive inn klassekode!");
    
else {

$filnavn="../../raw/klasse.txt";

$mode = "r";
$file = fopen($filnavn,$mode);
    
$deler = array();
    
while(!feof($file)){
    $innhold = fgets($file);
    array_push($deler,explode(";", $innhold));}
    
    $match = false;
    
    foreach($deler as $navnDel){
        if (strtoupper($navnDel[0]) == strtoupper($sook)){
            $match = true;}}
    
    //søk stemmer med klasser
    if($match){
        
        $filnavn="../../raw/student.txt";

        $mode = "r";
        $file = fopen($filnavn,$mode);
    
        $deler = array();
    
        while(!feof($file)){
            $innhold = fgets($file);
            array_push($deler,explode(";", rtrim($innhold)));}

    
            foreach($deler as $navnDel){
                if (strtoupper($navnDel[3]) == strtoupper($sook)){
                    echo("<br> Brukernavn: $navnDel[0] <br> Fornavn: $navnDel[1] <br> Etternavn: $navnDel[2] <br> Klassekode: $navnDel[3]<br>");
                }
               else {
                   
               } 
                
            }    
        
        
    }
    
    else {
        echo("Dette er ikke en gyldig klassekode!");
    }
    
    
    
}
    
}

    
?>