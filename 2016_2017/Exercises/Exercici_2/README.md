# MVC To do list
To do list implementada seguint el patró de disseny MVC

## Introducció
En aquesta entrega haureu de completar la to do list que vam començar a classe seguint el patró de disseny MVC. El codi inicial que heu de fer servir el podeu trobar dins de la carpeta `code` en aquest mateix directori. 

**Nota:** Per crear la base de dades i la taula necessària per realitzar l'exercici podeu fer servir el següent [dump](https://github.com/jaumecapdevila/salle-projectes-web/blob/master/Exercises/Basics/Solutions/todolist.sql)  

## Requeriments
Per tal que el següent codi funcioni correctament heu de crear un **vhost** que apunti a la carpeta root on poseu el codi. Exemple:

```
<VirtualHost *:80>
        ServerAdmin webmaster@localhost
        ServerName todolist.dev
        DocumentRoot /var/www/projectesweb/php/exercise_2
        <Directory /var/www/projectesweb/php/exercise_2>
                AllowOverride All
        </Directory>
</VirtualHost>
``` 

També cal crear un fitxer **.htaccess** a la carpeta arrel del projecte amb el següent contingut:

```
<IfModule mod_rewrite.c>
    RewriteEngine On

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
``` 
On la carpeta **exericse_2** és on es troba el codi del projecte. 

## Estructura del projecte 
El projecte actualment presenta la següent estructura:

```
src
|__Controller
	|__TaskController.php
|__View
	|__templates
	|	|__...
	|__ViewHelper.php
|__Model
	|__Database
	|	|__Database.php
	|__Entity
	|	|__Task.php
	|__Repository
		|__TasksRepository.php
		|__PdoTasksRepository.php
.htacces
composer.json
composer.lock
index.php
...
```
**Nota:** Recordeu que heu de fer un **composer intall** (des del directori on es troba el fitxer **composer.json**) quan us baixeu el codi per tal de descarregar les dependències del projecte.

### index.php

En aquest fixter es fa servir el component RouterContainer del paquet **Aura/Router** per tal de definir les rutes que volem tenir en la nostra aplicació i les accions a realitzar en cada cas. Podeu trobar la documentació de la llibreria en el següent [enllaç](https://github.com/auraphp/Aura.Router/blob/3.x/docs/index.md). En el codi actual únicament hi ha definida la ruta / (pàgina principal) que executa la acció **indexAction** del controlador. 

### TaskController
En aquesta classe és on es defineixen totes les accions referents a la gestió i manipulació de les tasques. Actualment només té definida una única acció **indexAction** que s'encarrega de recollir i mostrar totes les tasques de la base de dades.

### ViewHelper
Aquesta classe rep dos paràmetres per constructor. El primer és el fitxer/template php que es vol mostrar i el segon són les dades que se li volen passar al template. Aquesta classe retorna un string que conté el resultat de renderitzar el template amb les dades proporcionades.  

### Task
Classe que representa l'entitat *tasca* de la nostra aplicació.

### TasksRepository
Interface on s'han definit els mètodes que es poden fer servir per a consultar o modificar inforamció del nostre sistema. 

### PdoTasksRepository
Classe que implementa la interface **TasksRepository**  fent servir la classe **Database.php** per connectar-se a la BD i executar queries.

## Exercici
L'exercici consisteix a acabar d'implementar els casos restants de la to do list fent servir aquesta mateixa metodologia. A continuació s'explica més en detall cadascun dels casos que s'han d'implementar.

### Mostrar el formulari per afegir una nova tasca

1.	Cal definir la ruta **/task/add** en el fitxer index.php. Aquesta ruta només ha de ser accessible des d'una petició **GET**
2. Cal afegir una nova acció al controlador **getAddTaskAction** que s'encarregui de mostrar el formulari per afegir una nova tasca

### Afegir una nova tasca

1. Cal definir la ruta **/task/add** en el fitxer index.php. Aquesta ruta només ha de ser accessible des d'una petició **POST**
2. Cal afegir una nova acció al controlador **postAddTaskAction** que s'encarregui de recollir la informació enviada des del formulari i d'inserir la tasca corresponent a la base de dades.
3. Un cop eliminada cal redirigir als usuaris a la pàgina home / fent servir l'objecte **RedirectResponse** que ens ofereix la llibreria

### Eliminar una tasca

1. Cal definir la ruta **/task/remove/{id}** en el fitxer index.php. Aquesta ruta només ha de ser accessible des d'una petició **GET**
2. Cal afegir una nova acció al controlador **removeTaskAction** que s'encarregui de recollir el *id* de la tasca i d'eliminar la tasca corresponent. 
3. Un cop eliminada cal redirigir als usuaris a la pàgina home / fent servir l'objecte **RedirectResponse** que ens ofereix la llibreria

## Entrega
Aquest exercici s'ha de realitzar i entregar de forma individual.

La **data límit** per realitzar l'entrega serà el **dilluns dia 3 d'Abril**. Per tal de realitzar l'entrega haureu de penjar un zip al pou corresponent que trobareu a l'estudy. El contingut del zip ha de ser el següent:

* Codi 
* README bàsic amb una breu explicació del codi i qualsevol indicació que cregueu convenient que tinguem en compte.  
