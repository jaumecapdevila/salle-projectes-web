# Cool blog
En aquest exercici haureu de desenvolupar un blog que ofereixi les funcionalitats més bàsiques. El blog haurà de disposar com a mínim de les següents seccions:

* Una pàgina on es mostrin les últimes entrades del blog. Aquesta pàgina haurà de ser visible per a qualsevol usuari, ja que serà la pàgina principal del vostre blog. 
* Una pàgina de registre que permeti als usuaris de crear-se una nova conta al vostre blog. 
* Una pàgina de login que permeti als usuaris que ja s'hagin registrat en l'aplicació d'iniciar una nova sessió.
* Una pàgina que permeti als usuaris que tinguin la sessió iniciada de crear una nova entrada pel blog.  

**Secció opcional:**
* De manera opcional (per pujar nota) heu de crear una pàgina que permeti als usuaris que hagin iniciat una sessió de veure un llistat amb totes les entrades que hagin creat.

A continuació s'explicarà més en detall cadascuna de les seccions anteriors. 

## Pàgina principal
En la pàgina principal del blog s'han de mostrar les últimes 10 entrades ordenades per la data de creació de tal manera que les més recents apareguin les primeres. Per cada una de les entrades s'ha de mostrar la informació següent: 

* El títol. 
* El contingut de l'entrada. 
* La data de creació. 
* El nom d'usuari del creador. 

**Opcional:** En cas que el blog disposi de més de 10 entrades cal mostrar un botó que, a través d'una petició Ajax, carregui les 5 entrades següents. 

## Pàgina de registre
En la pàgina de registre s'haurà de mostrar un formulari que permeti als usuaris registrar-se en el blog. El formulari de registre ha de contenir els camps següents:

* 	**username:** Serà el nom amb el que es podrà identificar a l'usuari dins del blog. Únicament pot contenir caràcters alfanumèrics i no pot excedir dels 20 caràcters.
*  **email:** Ha de ser una adreça de correu vàlida.
*  **data de naixement:** Ha de ser una data vàlida segons el format ISO 8601.
*  **password:**
	* Ha de contenir entre 6 i 12 caràcters.
	* Ha de contenir majúscules i minúscules.
	* Ha de contenir com a mínim un número
*  **confirm password:** Cal assegurar que coincideix amb la contrasenya introduïda en el camp anterior.

**Nota:** es recomana fer servir expressions regulars per tal de validar el format de la contrasenya.

S'han de validar tots els camps abans de guardar un nou usuari a la base de dades. En cas que no s'hagi pogut registrar a l'usuari cal mostrar els errors en el formulari. En cas contrari s'ha de redirigir a l'usuari a la pàgina de login per tal que pugui iniciar sessió amb les seves credencials.

Per tal de poder guardar els usuaris registrats en el blog haureu de crear una nova taula en la vostra base de dades. A continuació es planteja una possible solució quant a l'estructura de la taula. Teniu en compte que únicament és una recomanació, podeu fer servir l'estructura que cregueu més convenient.

| column      | type                |
|-------------|---------------------|
| id 		    | INT, AUTO_INCREMENT |   
| username    | VARCHAR(20)         |
| email       | VARCHAR(255)        |
| birthdate   | DATE                |
| password    | VARCHAR(12)         |

## Pàgina de login
En la pàgina de login s'ha de mostrar un formulari que permeti als usuaris iniciar la seva sessió. Per tal d'iniciar la sessió els usuaris han de poder fer servir tant el seu nom d'usuari com el seu correu. 

El formulari únicament ha de contenir dos camps:

* Un per introduïr el nom d'usuari o bé el correu
* Un per introduïr la contrasenya

En cas que l'inici de sessió sigui satisfactori, s'haurà de redirigir als usuaris a la pàgina principal amb la sessió iniciada. En cas contrari s'haurà de mostrar un missatge en el mateix formulari.

**Nota:** Cal tenir en compte que els usuaris poden intentar fer-nos injeccions SQL a través del formulari. Per aquest motiu el vostre codi ha d'estar preparat per tal de reduir el màxim possible aquest tipus d'atacs tal com es va veure a classe.  

## Pàgina per afegir una nova entrada
En aquesta pàgina els usuaris que hagin iniciat la seva sessió disposaran d'un formulari que els permetrà afegir una nova entrada al blog. És un **requisit** que l'usuari estigui *loguejat* per tal de poder accedir a aquesta secció. Caldrà redirigir a tots els usuaris que intentin accedir a aquesta secció sense tenir una sessió iniciada a la pàgina de login. 

Per tal de guardar les entrades del blog haureu d'afegir una nova taula a la vostra base de dades. A continuació es mostra una possible solució a nivell d'estructura. Novament sou totalment lliures de fer servir l'estructura que cregueu convenient.

| column      | type                |
|-------------|---------------------|
| id 		    | INT, AUTO_INCREMENT |   
| user_id     | INT                 |
| title       | VARCHAR(255)        |
| content     | TEXT                |
| created_at  | DATETIME            |


**Nota:** Cal tenir en compte que els usuaris han pogut inserir codi HTML en el contingut de l'entrada. Per aquest motiu caldrà filtrar degudament la informació abans de mostrar-la per pantalla en la pàgina principal. Es recomana d'utilitzar la funció **htmlentities** de PHP per filtrar el contingut de l'entrada abans de mostrar-lo. 

## Pàgina per mostrar les entrades d'un usuari (opcional)
En aquesta pàgina els usuaris que hagin iniciat una sessió podran veure un llistat amb totes les seves entrades. El contingut a mostrar de cada entrada ha de ser el mateix que el que es mostra en la pàgina principal a excepció del nom d'usuari del creador. 

## Altres requeriments
* Cal fer servir la llibreria de Bootstrap per tal de donar estil al vostre blog. 
* Cal validar el contingut del formulari de registre amb Javascript abans d'enviar la informació al servidor. Es recomana fer servir la llibreria **jQuery** però no és obligatori.
* El vostre codi HTML no pot contenir css o codi javascript *inline*.

# Entrega
Aquest exercici s'ha de realitzar i entregar de forma individual. Tingueu en compte que aquesta primera entrega servirà de base de cara a dues entregues futures. 

La **data límit** per realitzar l'entrega serà el **dilluns dia 13 de Març**. Per tal de realitzar l'entrega haureu de penjar un zip al pou corresponent que trobareu a l'estudy. El contingut del zip ha de ser el següent:

* Codi 
* README bàsic amb una breu explicació del codi i qualsevol indicació que cregueu convenient que tinguem en compte.  
* Fitxer SQL que contingui el **dump** de l'estructura de la base de dades que hagueu utilitzat per realitzar l'exercici. 