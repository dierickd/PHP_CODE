<?php
$movies = [
    0 => [
        'movie_title' => 'Indiana Jones et le Royaume du Crâne de Cristal',
        'name_of_the_actor_1' => 'Harrison Ford',
        'name_of_the_actor_2' => 'Cate Blanchett',
        'name_of_the_actor_3' => 'Karen Allen'
    ],
    1 => [
        'movie_title' => 'Indiana Jones et la Dernière Croisade',
        'name_of_the_actor_1' => 'Harrison Ford',
        'name_of_the_actor_2' => 'Sean Connery',
        'name_of_the_actor_3' => 'Denholm Elliott'
    ],
    2 => [
        'movie_title' => 'Indiana Jones et le Temple maudit',
        'name_of_the_actor_1' => 'Harrison Ford',
        'name_of_the_actor_2' => 'Kate Capshaw',
        'name_of_the_actor_3' => 'Jonathan Ke Quan'
    ]
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php for($i=0; $i < count($movies); $i++): ?>
    <h2><?= $movies[$i]['movie_title'] ?></h2>
    <p>Acteurs principaux:</p>
    <ul>
        <li> <?= $movies[$i]['name_of_the_actor_1'] ?></li>
        <li> <?= $movies[$i]['name_of_the_actor_2'] ?></li>
        <li> <?= $movies[$i]['name_of_the_actor_3'] ?></li>
    </ul>

    <?php endfor; ?>
</body>
</html>
