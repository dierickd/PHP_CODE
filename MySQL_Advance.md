# REQUETES SQL AVANCEES

> Insertion des données dans le tableau

mysql> SELECT * FROM school;

| id | name                                         | capacity | country        |
|----|----------------------------------------------|----------|----------------|
|  1 | Castelobruxo                                 |      380 | Brazil         |
|  2 | Durmstrang Institute                         |      570 | Norway         |
|  3 | Hogwarts School of Witchcraft and Wizardry   |      450 | United Kingdom |
|  4 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  5 | Koldovstoretz                                |      125 | Russia         |
|  6 | Mahoutokoro School of Magic                  |      800 | Japan          |
|  7 | Uagadou School of Magic                      |      350 | Uganda         |

7 rows in set (0.01 sec)

> “Durmstrang Institute” est en réalité en Suède (Sweden), modifie son pays.

mysql> UPDATE school  
    -> SET country = 'Sweden'  
    -> WHERE name = 'Durmstrang Institute';  
  Query OK, 1 row affected (0.00 sec)  
  Rows matched: 1  Changed: 1  Warnings: 0

mysql> SELECT * FROM school;

| id | name                                         | capacity | country        |
|----|----------------------------------------------|----------|----------------|
|  1 | Castelobruxo                                 |      380 | Brazil         |
|  2 | Durmstrang Institute                         |      570 | Sweden         |
|  3 | Hogwarts School of Witchcraft and Wizardry   |      450 | United Kingdom |
|  4 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  5 | Koldovstoretz                                |      125 | Russia         |
|  6 | Mahoutokoro School of Magic                  |      800 | Japan          |
|  7 | Uagadou School of Magic                      |      350 | Uganda         |

7 rows in set (0.00 sec)

> “Mahoutokoro School of Magic” passe à une capacité de 700

