## Estructura de un proyecto con PHP sin framework

## Estructura de un proyecto

### Contexto
Para entender mejor por qué te estoy compartiendo esta estructura te recomiendo leer:

- [Estructura de un proyecto en PHP sin framework](https://anabelisa.co/poo-con-php-sin-framework/)

Este proyecto es un formulario que guarda usuarios en una base de datos en postgresql. No nos enfocaremos en diseño, ni en vistas, aquí lo importante es que analices la estructura de los archivos y el flujo de trabajo entre ellos.

### De la vista HTML al control de JS
En la carpeta de vistas tenemos solo las maquetas visuales de la aplicación, estas solo tienen la importación del archivo .js (además de los css) que se encargará de interactuar con la siguiente parte de la aplicación como son los datos, los eventos, etc.
El en el .js que en realidad es Jquery, tenemos entre otras cosas, las peticiones al servidor (en este caso estamos usando Ajax) y recibe las respuestas para ponerlas en nuestras maquetas. 

Pero esta petición sólo envía parámetros y una palabra clave que indica qué le estamos pidiendo al back y lo hemos bautizado como la “acción”.

### Un puente entre JS y PHP
Esta acción es recibida por un script llamado enlace_algo.php dentro de la carpeta enlaces y este lo que hace es recibir esos parámetros, la acción que necesita y pasárselos a un controlador donde va a estar realmente la lógica del negocio, donde se va a organizar la información de acuerdo a lo que queremos que haga.

### La lógica de negocio va aparte
Dentro de este controlador, cuando ya hemos dado la forma de lo que queremos a los datos recibidos, se lo pasamos como última instancia a un archivo llamado trans_algo.php quien es realmente el que va a hacer el insert, el update o el delete de lo que le estemos mandando.
Retornamos el resultado de la transacción final, lo procesamos en el controlador, se lo devolvemos al enlace y este ya lo pasa al front listo para mostrarse.

### Evitando repeticiones innecesarias
Dentro de la carpeta de transacciones tenemos un par de carpetas llamados “genéricas” y “conexión”

*Genéricas:* Tenemos un archivo que hace las consultas y nos las devuelve de acuerdo a lo que necesitemos de manera genérica para luego procesar de manera específica.

*Conexión:* Aquí es donde tenemos realmente el archivo de conexión que lee los parámetros del .xml que guardamos en config.

### Y todo lo demás también va aparte 
En las otras carpetas o directorios tenemos paquetes externos que usamos como utilidades o extensiones de nuestra aplicación como pdf para generar los archivos en pdf o XMLTools para hacer la lectura de nuestro .xml con un script php.

Igualmente dentro de webroot están los demás complementos para bootstrap, jQuery, fuentes y css que se utiliza en el front.

### Lo que puedes mejorar de aquí:
- TODO debería estar en inglés.
- Usa camelCase para los nombres de las funciones y variables.
- Usa PascalCase para los nombres de las clases.
- Importantísima tener la identación bajo control.

Envíame un PR con tus cambios sugeridos y me encantará hacerte parte de esto 💜
