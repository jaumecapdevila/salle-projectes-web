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
Modifica el formulari de l'exercici anterior per tal que els usuaris puguin pujar una imatge de perfil que ha de complir les següents especificacions:

- Ha d'ocupar menys d'1 Mb
- Ha de tenir una mida màxima de 200x200px
- Ha de tenir un dels següents formats:
	- png
	- jpg
	- gif 	

**Nota:** La imatge s'ha de guardar en una carpeta **uploads** que es trobi en el mateix directori.

### Exercici 10
Modifica la to-do list creada en l'exercici 6 per tal que la tasca a afegir provingui d'un formulari. Per altra banda, l'arxiu **remove_task.php** ha de rebre el número de la tasca que es vol esborrar de la llista com a paràmetre **GET**.