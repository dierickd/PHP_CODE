# REQUETES SQL AVANCEES

> Insertion des données dans le tableau

mysql> SELECT * FROM school;

| id | name                                         | capacity | country        |
|----|----------------------------------------------|----------|----------------|
|  1 | Beauxbatons Academy of Magic                 |      350 | France         |
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Norway         |
|  4 | Hogwarts School of Witchcraft and Wizardry   |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |
|  7 | Mahoutokoro School of Magic                  |      800 | Japan          |
|  8 | Uagadou School of Magic                      |      350 | Uganda         |

8 rows in set (0.01 sec)

> “Durmstrang Institute” est en réalité en Suède (Sweden), modifie son pays.

mysql> UPDATE school  
    -> SET country = 'Sweden'  
    -> WHERE name = 'Durmstrang Institute';  
  Query OK, 1 row affected (0.00 sec)  
  Rows matched: 1  Changed: 1  Warnings: 0

mysql> SELECT * FROM school;

| id | name                                         | capacity | country        |
|----|----------------------------------------------|----------|----------------|
|  1 | Beauxbatons Academy of Magic                 |      350 | France         |
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Sweden         |
|  4 | Hogwarts School of Witchcraft and Wizardry   |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |
|  7 | Mahoutokoro School of Magic                  |      800 | Japan          |
|  8 | Uagadou School of Magic                      |      350 | Uganda         |

8 rows in set (0.00 sec)

> “Mahoutokoro School of Magic” passe à une capacité de 700

mysql> UPDATE school  
    -> SET capacity 700  
    -> WHERE name = 'Mahoutokoro School of Magic';  
  Query OK, 1 row affected (0.00 sec)  
  Rows matched: 1  Changed: 1  Warnings: 0

mysql> SELECT * FROM school;

| id | name                                         | capacity | country        |
|----|----------------------------------------------|----------|----------------|
|  1 | Beauxbatons Academy of Magic                 |      350 | France         |
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Sweden         |
|  4 | Hogwarts School of Witchcraft and Wizardry   |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |
|  7 | Mahoutokoro School of Magic                  |      700 | Japan          |
|  8 | Uagadou School of Magic                      |      350 | Uganda         |

8 rows in set (0.00 sec)

> Supprime en une seule requête toutes les écoles comportant “Magic” dans leur nom (il y en a 3). Tu peux t’aider du mot clé LIKE.

mysql> DELETE FROM school  WHERE name LIKE '%Magic';  
  Query OK, 3 rows affected (0.01 sec)

mysql> SELECT * FROM school;

| id | name                                         | capacity | country        |
|----|----------------------------------------------|----------|----------------|
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Sweden         |
|  4 | Hogwarts School of Witchcraft and Wizardry   |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |

5 rows in set (0.00 sec)
