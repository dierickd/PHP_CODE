
## REQUETE SQL

> Récupère tous les champs pour les sorciers nés entre 1975 et 1985  

`mysql> SELECT * FROM wizard WHERE birthday BETWEEN '1975/01/01' AND '1985/12/31';`

| id | firstname | lastname | birthday   | birth_place | biography                             | is_muggle |
| ---|-----------|----------|------------|-------------|---------------------------------------|-----------|
|  1 | harry     | potter   | 1980-07-31 | london      |                                       |         0 |
|  2 | hermione  | granger  | 1979-09-19 |             | Friend of Harry Potter                |         0 |
|  4 | ron       | weasley  | 1980-03-01 |             | Best friend of Harry                  |         0 |
|  5 | ginny     | weasley  | 1981-08-11 |             | Sister of Ron and girlfriend of Harry |         0 |
|  6 | fred      | weasley  | 1978-04-01 |             |                                       |         0 |
|  7 | george    | weasley  | 1978-04-01 |             |                                       |         0 |
| 10 | drago     | malefoy  | 1980-06-05 |             |                                       |         0 |
| 14 | dudley    | dursley  | 1980-06-23 |             | Cousin d'Harry                        |         1 |
| 15 | harry     | potter   | 1980-07-31 | london      |                                       |         0 |
| 16 | hermione  | granger  | 1979-09-19 |             | Friend of Harry Potter                |         0 |
| 18 | ron       | weasley  | 1980-03-01 |             | Best friend of Harry                  |         0 |
| 19 | ginny     | weasley  | 1981-08-11 |             | Sister of Ron and girlfriend of Harry |         0 |
| 20 | fred      | weasley  | 1978-04-01 |             |                                       |         0 |
| 21 | george    | weasley  | 1978-04-01 |             |                                       |         0 |
| 24 | drago     | malefoy  | 1980-06-05 |             |                                       |         0 |
| 28 | dudley    | dursley  | 1980-06-23 |             | Cousin d'Harry                        |         1 |

16 rows in set (0.00 sec)

> Le prénom uniquement des sorciers dont le prénom commence par la lettre ‘H’  

mysql> SELECT firstname FROM wizard WHERE firstname LIKE 'H%';

| firstname |
|-----------|
| harry     |
| hermione  |
| harry     |
| hermione  |

4 rows in set (0.00 sec)

> Les prénom et nom de tous les membres de la famille ‘Potter’, classés par ordre de prénom

mysql> SELECT firstname, lastname FROM wizard WHERE lastname='Potter' ORDER BY firstname ASC;

| firstname | lastname |
|-----------|----------|
| harry     | potter   |
| harry     | potter   |
| lily      | potter   |
| lily      | potter   |

4 rows in set (0.00 sec)

> Le prénom, nom et date de naissance du plus vieux sorcier (doit fonctionner quelque soit le contenu de la table)

mysql> SELECT lastname, firstname, birthday FROM wizard ORDER BY birthday ASC LIMIT 0, 1;

| lastname   | firstname | birthday   |
|------------|-----------|------------|
| dumbledore | albus     | 1881-07-01 |

1 row in set (0.00 sec)
