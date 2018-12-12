# EVALUACION 
Prueba técnica desarrollador del área de Tecnología American Scholl Way (Tiempo: 1 hora y 30 minutos)

## Instrucciones

> El objetivo de este ejercicio es evaluar sus habilidades en desarrollo de aplicaciones mediante el patrón MVC con y ORMs.

> Se tiene las siguientes tablas

* Clientes y Ciudades, se requiere desarrollar un aplicativo en PHP con las funcionalidades para la tabla Clientes (CRUD), con las siguientes condiciones:

* Utilizar MVC

* Se debe crear una vista que contenga los datos de la tabla Clientes

* Crear una vista parcial para seleccionar la ciudad.

* Como Framework css se debe usar bootstrap en su version 4 haciendo uso del sistema de grilla y estilos

* Una vez clonado el proyecto se debe crear un branch que contenga por nombre nombre y inicial del apellido y subir dicho proyecto al repositorio

* la base de datos debe ser contruida a travez de las migraciones o en su defecto debe ser adicioado el archivo .sql a la raiz del proyecto

### Ejercicio
1. Se debe construir una solución mínimo 3 capas, adicionar las funcionalidades de (Adición, Consulta, Actualización, Eliminación).


> Adicionalmente se debe construir una vista en la que se muestren la totalidad de los clientes ingresados en la base de datos, con la totalidad de las columnas, desde donde se seleccione un Cliente y se pueda cargar a la vista principal y se pueda modificar, consultar y/o Eliminar.

### MODELOS
Clientes
* id (llave primaria)
* nombres
* apellidos
* cedula
* email
* telefono
* ciudad_id( llave foranea, Ciudad)

Ciudad

* id (llave primaria)
* nombre

### Caracteristicas
> Modulo de ciudades: permite realizar operaciones CRUD para ciudades, muestra el total de ciudades registradas, por cada ciudad muestra número de clientes registrados. Al hacer clic sobre una ciudad, envia a la vista de clientes por ciudad.

> Modulo de clientes: permite realizar operaciones CRUD para clientes, muestra el total de clientes registrados, al crear y editar un cliente, este es asociado a una ciudad (relación uno a uno).

> alidaciones de formulario realizadas con jQuery Form Validator por el lado de frontend, por el lado de backend se implemento validación por medio de Laravel Request.

### Técnicas de Laravel implementadas
* Relaciones establecidas en los modelos Ciudad y Cliente, por medio de Eloquent ORM Active Record: 1) One to One, un cliente vive en una ciudad. 2) Belongs To, una ciudad tiene varios clientes.
* Modelos Ciudad y Cliente con nombres de tabla, campo de llave primaria y campos de dato de tabla de tipo protegido(protected) para garantizar operaciones de almacenamiento y actualización de los datos.
* Migrations, migraciones para establecer los esquemas entre el modelo y la base de datos
* Seeds, para alimentar tabla Ciudades con registros por defecto.
* Middlewares para Ciudad y para Cliente, permiten agrupamiento de rutas por modulos.
* Routes, rutas agrupadas para Cliente y Ciudad.
* Request, reglas de validación y mensaje por medio de backend en Laravel para garantizar seguridad en la aplicación.

### Prerequisitos de instalación
XAMPP versión 7.1.4
Composer 1.4.1
Instalación
Descargar por medio de GIT:

git clone https://github.com/comunicasw/desarrollo-evaluacion.git
