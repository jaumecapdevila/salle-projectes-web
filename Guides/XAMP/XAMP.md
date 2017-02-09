
Guia de instalación y Setup MAMP/XAMP
-------------
## Indice

* Instalacion para Windows - *XAMPP*

* Test para Windows

* Instalación para MAC - *MAMP*

* Test para MAC

***
## Instalación para Windows - *XAMPP*

Empezamos descargando e instalando **XAMPP** des de la página oficial:

> https://www.apachefriends.org/es/index.html

Vamos a:

> C:\xampp\htdocs

Y creamos un directorio nuevo: **ProjectesWeb**.

Dentro de este nuevo directorio creamos un nuevo archivo: **index.php**, dentro de este archivo escriviremos el siguiente codigo:

```
<!DOCTYPE html>
<html>
<body>

<h1>Hello World!</h1>

</body>
</html>
```

A continuación abriremos el fichero de configuración de hosts en **modo Administrador**:

> C:\Windows\System32\drivers\etc\hosts

Añadiremos la siguiente linia en el fichero:

```
127.0.0.1   projectes.dev
```

#### Configuración de *Virtual Hosts*:

Abriremos el fichero de configuración httpd de Apache en **modo Administrador**:

> C:\xampp\apache\conf\httpd.conf

Buscaremos y descomentaremos la siguiente línea *(quitar “#” si lo hay)*:

```
Include conf/extra/httpd-vhosts.conf
```

De esta forma habilitaremos los *Virual Hosts*.

A continuación abriremos el fichero de configuración de *Virtual Hosts* en **modo Administrador**.

> C:\xampp\apache\conf\extra\httpd-vhosts.conf

**IMPORTANTE:**
</br>Borramos completamente el fichero y añadimos el siguiente codigo

```
<VirtualHost *:80>
	DocumentRoot "C:\xampp\htdocs\ProjectesWeb"
	ServerName projectes.dev
	ServerAlias projectes.dev
</VirtualHost>
```
Donde **C:\xampp\htdocs\ProjectesWeb** es la ruta hasta nuesto fichero **index.php**.

***
## Test para Windows

Para comprovar el funcionamiento correcto de XAMPP abrimos la aplicación en **modo Administrador** e iniciamos el servicio de **Apache**.

A continuación abrimos una nueva ventana en nuestro navegador usando la dirección:

> projectes.dev

Si funciona correctamente deveriamos observar un mensaje de "Hello World!"

***