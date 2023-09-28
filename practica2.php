<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Llista de cursos</h1>



<?php
$contador = 0;
$cursos = array(
    array("ID" => 1, "NOM" => "PHP", "DESC" => "Introducció a PHP", "PREU" => 15.5),
    array("ID" => 2, "NOM" => "Laravel", "DESC" => "Laravel per experts", "PREU" => 30),
    array("ID" => 3, "NOM" => "Django", "DESC" => "Dominant Django", "PREU" => 10)
);
foreach ($cursos as $curso) {
    if (isset($curso["ID"])) {
        $contador++;
    }
}
echo "<h2>El número de cursos apuntats:  $contador</h2>";
?>


    <?php 

      define('IVA', 0.21);
       
      $cursos = array(
       array("ID" => 1, "NOM" => "PHP", "DESC" => "Introducció a PHP", "PREU" => 15.5),
       array("ID" => 2, "NOM" => "Laravel", "DESC" => "Laravel per experts", "PREU" => 30),
       array("ID" => 3, "NOM" => "Django", "DESC" => "Dominant Django", "PREU" => 10)
   );
   foreach ($cursos as $curs){
    echo "<div style='border:1px solid black; padding:10px; margin:10px'>";
    echo "<h3>" . $curs["NOM"] . "</h3><br>";
    echo "<p>" . $curs["DESC"] ."</p><br>";
    echo "<p>" ."El preu del llibre amb IVA: " . ($curs["PREU"]+($curs["PREU"]*IVA)) . "</p><br>";
    echo "</div>\n";
 }
 

 
 
 








    ?>
</body>
</html>