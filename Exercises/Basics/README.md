# Projectes web - Exercicis PHP


### Exercici 1
Crea un script PHP que rebent un número com a paràmetre, mostri com a resultat la seva taula de multiplicar

**Ajuda:** per executar un arxiu php des de consola ho podeu fer de la manera següent `php nom_script.php`. 

### Exercici 2
Crea un script PHP que donat dos nombres i el nom de l'operació a realitzar, retorni el resultat d'aquesta operació. Les operacions disponibles són:

1. Sumar
2. Restar
3. Dividir
4. Multiplicar

**Nota:** Cada operació ha d'estar implementada en una funció diferent. En cas que l'operació no existeixi cal mostrar un missatge d'error.

**exemple:** 

```
php calculator.php suma 2 2
4

```
### Exercici 3 
Modifica el script anterior per tal que pugui rebre un nombre indefinit de nombres i que apliqui l'operació a tots ells.

### Exercici 4
Crea un script PHP que rebent una frase com a paràmetre retorni la següent informació:

* Nombre total de paraules
* El nombre total de vegades que apareix cada paraula 

### Exercici 5
Crea 3 scripts PHP que ens permetin simular una to-do list. Les funcionalitats de cada fixter són les següents:

* **add_task.php** -> rep una tasca com a argument i la afegeix en el fitxer
* **remove_task.php** -> rep una tasca com a argument i la intenta eliminar del fitxer en cas que la trobi
* **display_tasks.php** -> mostra totes les tasques que hi han a la llista

### Exercici 6
Crea un formulari utilitzant el metode POST amb els seguents camps:
- **Nom** (cadena de caracters amb longitud maxima 20)
- **Edat** (entre 1 i 120)

Al apretar el botó de **Submit** cridar a un fitxer *formulari.php* que mostri els valors que ha rebut del formulari usant el metode POST.

Al apretar el botó de Submit cridar a un fitxer formulari.php que mostri els valors que ha rebut del formulari usant el metode POST

### Exercici 7
Crea un formulari que rebi dos valors numèrics com a input i una llista d'opcions mitjançant un *radiobutton*, les opcions seràn:

- Suma
- Resta
- Multiplicació
- Divisió

Defineix mitjançant funcions PHP les operacions, les quals retornaràn el valor per pantalla.


### Exercici 8
Definex la següent variable de tipus array i mostra tots els paisos amb les seves respectives capitals

```php
$countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
"France" => "Paris", "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
```

### Exercici 8.2
Definex la següent variable de tipus cadena, a continuació calcula i mostra:

- Les temperatures ordenades.
- La **mitjana** de temperatura de la cadena.
- Les 7 temperatures més **baixes**.
- Les 7 temperatures més **altes**.

```php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63,81, 76,73,68, 72,
73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75,79, 73";
```

### Exercici 9
Utlitzant l'array de l'**exercici 4**, crea un formulari amb un input de tipus text que retorni la capital del país introduit.

Mostrar un cop ingressat un usuari , si ha complert tots els requisits tenint en compte que no pot haver cap camp buit.

### Exercici 10
Crea un formulari de registre utilitzant el metode POST que contingui els següents camps:

- Nom(longitud maxima 20 caracters)
- Email (ha de ser valid)
- Contrasenya

Mostrar un cop ingressat un usuari , si ha complert tots els requisits tenint en compte que no pot haver cap camp buit.

### Exercici 11
Crea un formulari que permeti seleccionar una imatge de l'ordinador i la mostri per pantalla. Aquest ha de tenir la opció d'enviar la imatge, la qual ens mostrarà per pantalla:

- Un missatge d'status.
- El nom de la imatge.
- La mida de la imatge.
- El tipus *(.png, .jpg, ...)*.

Si enviem la imatge aquesta es guardarà en una carpeta */img* que prèviament haurem creat.

### Exercici 12
Usant el formulari implementat en l'**exercici 6** , crea una classe *User* amb els camps corresponents, tot comprovant que els camps siguin correctes. En cas que el formulari sigui correcte, crea un nou *User* i mostra la seva informació usant una funcio *getUserInfo()* implementada a dins de la classe *User*.

| User     |
|----------|
| username |
| password |
|  email   |

### Exercici 13
Crea un formulari amb la informació d'usuari. Passant la informació amb el mètode GET, i aquest ens mostri una nova pantalla de benvinguda amb el nostre nom i email. Comprovarem que mitjançant el mètode GET podrem canviar el valor d'aquestes variables a través de la URL.

| User     |
|----------|
| username |
|  email   |

### Exercici 14
Crea un comptador de visites de la teva pafgina creant una variable **COOKIE** anomenada *visites*. En cas que sigui el primer cop que l'usuari entri a la pagina mostra un missatge de benvinguda , si ja hi ha entrat previament mostra quants cops ha accedit a la pàgina.

### Exercici 15
Des de la pàgina *phpMyAdmin* crea una taula *User* que contingui la informació d'usuari:

```sql
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

```

Crea un fitxer **PHP** que estableixi la connexió amb la base de dades creades i mostri els resultats de la taula *User*.

### Exercici 16
Crea un formulari que es conecti a la anterior Base de Dades i permti afegir *User*'s, per fer-ho crea les classes *Database* i *User* amb les funcions pertinents.

| User     |
|----------|
| username |
| password |
|  email   |

> ***Consell:*** Recorda que abans d'afegir cap valor a la Base de Dades cal comprovar que el camp té un valor correcte i es del tipus pertinent.

### Exercici 17
Crea tres pàgines **PHP**, per les quals ens mourem usant links.La primera ha de crear una variable de *sessió* amb els segënts camps i printar-los per pantalla:

- Missatge.
- Nom.

La segona pàgina s'encarrega de printar els camps anteriors un cop recuperats de la sessió. i d'esborrar el *Nom*. I la tercera printarà els camps recuperats de la sessió, esborrarà les dades, tornarà a mostrar els camps i finalment esborrarà la sessió, permetent-nos accedir de nou a la primera pàgina.


