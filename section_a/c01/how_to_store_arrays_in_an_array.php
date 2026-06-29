<?php 

$members = [
    ['name' => 'Ivy', 'age' => 32, 'country' => 'UK'],
    ['name' => 'Emi', 'age' => 24, 'country' => 'Japan'],
    ['name' => 'Luke', 'age' => 47, 'country' => 'USA']
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Возраст: <?php echo $members[2]['age']; ?></p>
    <p>Имя: <?php echo $members[2]['name']; ?></p>
    <p>Страна: <?php echo $members[2]['country']; ?></p>
</body>
</html> 