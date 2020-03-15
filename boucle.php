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

for($i=0; $i < count($movies); $i++):
    echo "Dans le film ".$movies[$i]['movie_title']." , les principaux acteurs sont : ".name_of_the_actor_1.", ".name_of_the_actor_2.", ".name_of_the_actor_3
endfor;
