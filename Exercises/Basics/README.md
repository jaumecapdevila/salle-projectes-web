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
Modifica el teu script **remove_task.php** per tal que posi la tasca finalitzada (eliminada) en un nou fitxer. Crea un nou script que es digui **display_completed_tasks.php** que mostri les tasques finalitzades. 

### Exercici 7
Crea un fitxer que contingut un formulari amb mètode POST i que contingui els següents camps:

- **Nom** (Cadena de caràcters amb longitud màxima 20)
- **Email** (Ha de ser un email vàlid)
- **Edat** (Ha de ser un enter i ha d'estar comprès entre 1 i 120)

A l'apretar el botó de **Submit** s'ha d'enviar el formulari a un fitxer *formulari.php* que haurà de validar els valors rebuts per tal que compleixen les especificacions anteriors. En cas que alguna de les validacions falli, s'ha de redirigir als usuaris novament cap al formulari. En cas que tots els camps passin la validació s'haurà de mostrar per pantalla la informació rebuda.

### Exercici 8
Modifica l'exercici anterior per tal que l'enviament del formulari es realitzi amb Ajax. 

**Nota:** Podeu fer servir la llibreria de jQuery.

### Exercici 9
Modifica el formulari de l'exercici 7 per tal que els usuaris puguin pujar una imatge de perfil que ha de complir les següents especificacions:

- Ha d'ocupar menys d'1 Mb
- Ha de tenir una mida màxima de 200x200px
- Ha de tenir un dels següents formats:
	- png
	- jpg
	- gif 	

**Nota:** La imatge s'ha de guardar en una carpeta **uploads** que es trobi en el mateix directori.

### Exercici 10
Modifica la to-do list creada en l'exercici 6 per tal que la tasca a afegir provingui d'un formulari. Per altra banda, l'arxiu **remove_task.php** ha de rebre el número de la tasca que es vol esborrar de la llista com a paràmetre **GET**.

### Exercici 11

Modifica l'exercici anterior per tal que les tasques es guardin a una base de dades en comptes d'un fitxer. La taula on inserireu les tasques ha de contenir els camps següents:

| Columns |
|---------|
| id 		|
| task    |
| date    |
| done    |

El camp *done* serveix per indicar si una tasca s'ha finalitzat o no. En la pantalla on mostrem totes les tasques de la nostra to-do list hem de señalitzar d'alguna manera les que hàgem marcat com a finalitzades.

**Requisit:** S'ha d'utilitzar PDO per connectar-se amb la base de dades. 

### Exercici 12
He de desenvolupar una petita aplicació que disposi de les següents seccions:

* Una pàgina de registre
* Una pàgina de login/benvinguda

Per tal de registrar-se en l'aplicació els usuaris han d'introduir el seu nom i cognoms, l'adreça de correu electrònic, una contrasenya, un cap per confirmar la contrasenya, la data de naixement, el DNI i finalment han d'acceptar els termes i condicions. Cal tenir en compte que s'han de validar cadascun dels camps abans de registrar un usuari a l'aplicació. Les validacions a realitzar són les següents:

* El nom i els cognoms únicament poden contenir caràcters alfanumèrics
* El correu ha de ser una adreça vàlida
* La contrasenya ha de tenir com a mínim 6 caràcters, ha de contenir majúscules i minúscules i com a mínim un número i un caràcter especial. 
* Cal assegurar que les dues contrasenyes introduïdes per l'usuari coincideixen
* La data ha de seguir el format ISO 8601
* El DNI ha de ser vàlid (00000000-A)

Per altra banda també s'ha de crear una pàgina de login que mostri als usuaris un formulari on podran introduir el seu correu i la seva contrasenya. En cas que l'usuari existeixi a la base de dades s'haurà de mostrar la seva informació per pantalla. En cas contrari es mostrarà un missatge d'error. 