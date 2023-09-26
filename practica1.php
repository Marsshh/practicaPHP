<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      define('IVA', 0.21);
       
      $cursos = array(
       array("ID" => 1, "NOM" => "PHP", "DESC" => "Introducció a PHP", "PREU" => 15.5),
       array("ID" => 2, "NOM" => "Laravel", "DESC" => "Laravel per experts", "PREU" => 30),
       array("ID" => 3, "NOM" => "Django", "DESC" => "Dominant Django", "PREU" => 10)
   );
    
   foreach ($cursos as $curs){
       echo $curs["NOM"] ."\n";
       echo ""
   }








    ?>
</body>
</html>