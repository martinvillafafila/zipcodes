## RETO TECNICO BACKBONE SYSTEMS
Se realizo el codigo con el objetivo de cumplir lo propuesto con la prueba tecnica, se realizaran las siguientes aclaraciones a modo de que se enttienda mejor la concepcion del proyecto.

## ACLARACIONES
EL proyecto se subio en principio a infinity free para poder probarlo(solo accesible por navegador), el cual tiene un tiempo de respuesta no menor a los 300 ms en local los tiempos de respuestas estan en alrededor de 90 ms.

Luego se obto por subirlo a un servidor de AWS Elastic Beanstalk y crear una base de datos mysql para el almacenamiento de la informacion.

No se realizo un modelo de la tabla zipcodes por no considerarse necesario, ya que solamente se necesita devolver informacion, en el caso de que sea un CRUD se implementaria un modelos completo.

No se realizo ningun tipo de autenticacion, como un token, a la hora de consumir el servicio por no considerarse necesaria.

Los registros se obtuvieron directamente de la fuente solicitada, uniendo todos los registros divididos y cargandolos a la base de datos, se realizo la migracion y la carga de todos los registros en la base de dato local.

La base de datos se deberia normalizar diviendo los datos redundantes, no se realizo debido a que no se especifica si esos datos deben estar en esa determinada tabla o en algun orden en particular. 

La respuesta se envia tal cual el ejemplo siguiendo los mismos campos sin considerar rendimiento ni redundancia de datos.

Se busco el enfoque de hacer el codigo lo mas simple y eficiente posible sin agregar controles extras. 
