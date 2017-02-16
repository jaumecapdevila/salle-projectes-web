# Projectes web - Exercicis PHP Bàsic


### Exercici 1
Mostra per pantalla un missatge indicant el teu nom, cognom i la data actual( utilitzant variables)

### Exercici 2
Crea un formulari usant el metode POST amb els seguents camps:
- Nom (cadena de caracters amb longitud maxima 20)
- Edat( entre 1 i 120)

Al apretar el botó de Submit cridar a un fitxer formulari.php que mostri els valors que ha rebut del formulari usant el metode POST


### Exercici 3
Formulari (dos numeros) i un radiobutton per seleccionar operacio que es vol fer( suma, resta, multiplicació) . Definir les operacions cadascuna com una funció, retornar el valor per pantalla indicant la operació realitzada.


### Exercici 4
Definex la següent variable de tipus array i mostra tots els paisos amb les seves respectives capitals

```php
$countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
```

### Exercici 5
Utlitzant l'array de l'exercici anterior, crea un input de tipus text que retorni la capital del país introduit.

### Exercici 6
Crea un formulari de registre utilitzant el metode POST que contingui els següents camps:
- Nom(longitud maxima 20 caracters)
- Email (ha de ser valid)
- Contrasenya

Mostrar un cop ingressat un usuari , si ha complert tots els requisits tenint en compte que no pot haver cap camp buit.

### Exercici 7
Usant el formulari implementat en l'exercici anterior , crea una classe User amb els camps corresponents , i en el cas que el formulari sigui correcte , crea un nou usuari i mostra la seva informació usant una funcio getUserInfo() implementada a dins de la classe User.

### Exercici 8 
Prova del metode GET. (Potser massa bàsic)

### Exercici 9
Crea un comptador de visites de la teva pafgina creant una variable COOKIE anomenada visites. En cas que sigui el primer cop que l'usuari entri a la pagina mostrar un missatge de benvinguda , si ja hi ha entrat previament mostrar quants cops ha accedit a la pàgina.

### Exercici 10
Connexio amb la base de dades . Des de phpMyAdmin crea una taula User que contingui la informació d'usuari necessaria (id, username, password, email)  i insereix un usuari.
Crea un fitxer php que estableixi la connexió amb la nova base de dades creades i mostri el resultats de la taula User.

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
