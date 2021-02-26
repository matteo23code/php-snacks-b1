<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Snack1</title>
</head>
<body>

<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali
rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php
 $matches = [
    // key  => value
    "casa" => "55",
    "ospiti" => "60"
  ];

   



?>

<span>Olimpia Milano - Cantù | </span>
<?php echo $matches ['casa'];?> - <?php echo $matches ['ospiti'];?>
    
</body>
</html>