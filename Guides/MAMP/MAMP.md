## Instalación para MAC - *MAMP*

Empezamos descargando e instalando **MAMP** des de la página oficial:

> https://www.mamp.info/en/

Vamos a:

> /Applications/MAMP/htdocs

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

> /etc/hosts

Añadiremos la siguiente linia en el fichero:

```
127.0.0.1   projectes.dev
```

#### Configuración de *Virtual Hosts*:

Abriremos el fichero de configuración httpd de Apache en **modo Administrador**:

> /Applications/MAMP/apache/conf/httpd.conf

Buscaremos y descomentaremos la siguiente línea *(quitar “#” si lo hay)*:

```
Include conf/extra/httpd-vhosts.conf
```

De esta forma habilitaremos los *Virual Hosts*.

A continuación abriremos el fichero de configuración de *Virtual Hosts* en **modo Administrador**.

> /Applications/MAMP/apache/conf/extra/httpd-vhosts.conf

**IMPORTANTE:**
</br>Borramos completamente el fichero y añadimos el siguiente codigo

```
<VirtualHost *:80>
	DirectoryIndex index.html index.php
	DocumentRoot "/Applications/MAMP/htdocs/ProjectesWeb"
	ServerName projectes.dev
	ServerAlias projectes.dev
</VirtualHost>
```

Donde **/Applications/MAMP/htdocs/ProjectesWeb** es la ruta hasta nuesto fichero **index.php**.

***
## Test para MAC

Para comprovar el funcionamiento correcto de MAMP abrimos la aplicación e iniciamos el servicio.

A continuación abrimos una nueva ventana en nuestro navegador usando la dirección:

> projectes.dev

Si funciona correctamente deveriamos observar un mensaje de "Hello World!"
