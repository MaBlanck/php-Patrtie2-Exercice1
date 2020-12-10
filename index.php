<?php
    $age = 18;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 1 Partie 2</title>
</head>
<body>
    <h1>Exercice 1 Partie 2</h1> 
    <?php  if ($age >= 18): ?>
    <p><?= 'Vous êtes majeur'; ?></p>
    <?php else :?>
    <p><?= 'Vous êtes mineur'; ?></p>
    <?php endif ;?>
</body>
</html>