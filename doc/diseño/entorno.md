# Herramientas

## Control de versiones

Para el control de versiones utilizaremos [GitHub](https://github.com/Skale21k/Keyng-DWES).

## Documentación[](https://github.com/Skale21k/Keyng-DWES)

Para la documentación utilizaremos diferentes herramietas:

- [PlantUML:](www.plantuml.com) Lo utilizaremos para los diagramas de casos y digramas de actividades.

- [Miro:](https://miro.com/) Lo utilizaremos para el sitemap.

- [GitMind:](https://gitmind.com/es/)Lo utilizaremos para la arquitectura del proyecto, diseño de datos y el diseño de componentes.

- MarkDown: Usaremos MarkDown para toda la parte escrita conjuntamente con las demás herramientas.

- Visual Estudio Code: Será nuestro editor de texto.

## Diagramado

Para los diferentes diagramas hemos utilizado 3 herramientas distinas: [PlantUML](www.plantuml.com), [Miro](https://miro.com/) y [GitMind](https://gitmind.com/es/).

## Prototipado

El prototipo será hecho en un cuaderno a mano, y también en un html básico.

# Definición del entorno / Automatización

Para el entorno de desarrollo, utlizaremos un docker que contenga Laravel de bitnami y un gestor de bases de datos, MariaDB en este caso.

Utilizamos docker para que todos tengamos el mismo entorno de trabajo y no haya problemas a la hora de realizar el proyecto.
La parte de la base de datos tomará la información del archivo .env que cada uno configurará para su base de datos.

Al usar docker, es tan fácil como copiar el archivo docker-composer.yml que contiene contiene la configuración de los servicios, redes y volúmenes, despues, solo queda ir a la terminal y ejecutar el comando "docker-composer up".

Implementaremos facotrías para crear datos para nuestra base de datos y poder probar las funcionalidades que lo requieran.
También usaremos plantillas para las vistas, con el fin de programarla una vez y poder reutilizarlas.

[Volver](../Diseño.md)