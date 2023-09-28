<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = 'Kurt';
        $surname = 'Cagle';
        $age = 40;
        $birthdate = new DateTime();
        $birthdate->setDate(1983, 5, 12);
        $tlfnumber = array(65434566,933332211);
            $tlfnumber = array(65434566,933332211);
        $address = 'Carrer de turin, 15';
        $email = 'kurt.cagle@example.com';
        $treballa = true;
        $heigth = 1.67;
        
    
    ?>
    <h1>
        <?php 
        echo "Descrivint a $name";
        ?>
    </h1>
    
    <h2>
        <?php 
        echo "Les dades de $name son:";
        ?>
    </h2>
        <ul>
         <li>
                <?php 
                 echo "Es diu: $name";
                ?>
         </li>
         <li>
                <?php 
                 echo "Te $age anys";
                ?>
         </li>
         <li>
                 <?php 
                echo "Va neixer l'any:" ;
                ?>
                <strong>
                 <?php 
                 echo date_format($birthdate, 'Y-m-d');
                ?>
                </strong>
         </li>
         <li>
                <?php 
                 echo "Els seus telèfons són: $tlfnumber[0] - $tlfnumber[1]  ";
                
                ?>
         </li>
         <li>
                <?php 
                 echo "Viu a: $address ";
                ?>
         </li>
         <li>
                <?php 
                 echo "El seu email és: $email ";
                ?>
         </li>
         <li>
         <?php 
                 echo "Treballa:" 
                 ?>
                <?php 
                 echo  $treballa ? 'Si' : 'No';
                ?>
         </li>
         <li>
                <?php 
                 echo "I medeix: $heigth";
                ?>
         </li>
        </ul>
</body>
</html>