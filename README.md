# KeyNG
### Miembros:
<a href="https://github.com/Skale21k"><i>Alexandru</a>
<a href="https://github.com/DarioSoto97">Darío</a>
<a href="https://github.com/Sergiksw">Sergio</a>
<a href="https://github.com/alexandarIvanov14">Alexandar</a>
</i>
----



## About
| ![KeyNG Supermercado](https://media.discordapp.net/attachments/1076961338204626976/1202931445316722748/si-Hecho-con-Clipchamp-unscreen.gif?ex=65cf4035&is=65bccb35&hm=65007ec10c033722c8dd0070c230bc89590d0c2f760ac1a0e426a22c9ccf8b42&) |
|:--:|
| KeyNG Supermercado es un sistema integral diseñado para la gestión eficiente de supermercados, ofreciendo una plataforma completa para administrar todos los aspectos operativos de un negocio minorista. Desde la gestión de productos y control de inventario hasta la administración de pedidos y seguimiento de ventas, KeyNG simplifica y automatiza procesos clave para optimizar la operación de supermercados de cualquier tamaño. Con una interfaz intuitiva y características avanzadas, KeyNG Supermercado proporciona a los usuarios una experiencia fluida y productiva para gestionar su negocio de manera efectiva. |


## Laravel


|<a href="https://laravel.com/docs/10.x">Laravel</u></a> es un framework de desarrollo web de código abierto y basado en PHP, conocido por su elegancia, simplicidad y eficiencia en la creación de aplicaciones web robustas y escalables. Ofrece una arquitectura MVC (Modelo-Vista-Controlador) que facilita la organización y mantenimiento del código, además de una amplia gama de características y herramientas integradas que aceleran el proceso de desarrollo. <br><br>|
|:--:|
| <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" style="width: 300px;"/> |



## Características

* Gestión de Productos: Agrega, edita y elimina productos fácilmente, manteniendo un inventario actualizado en todo momento.

* Control de Inventario: Supervisa los niveles de stock, recibe alertas de inventario bajo y gestiona la reposición de productos de manera eficiente.

* Administración de Pedidos: Procesa pedidos de clientes, realiza seguimiento del estado de los pedidos y gestiona las entregas para garantizar una experiencia de compra fluida.

* Seguimiento de Ventas: Monitorea las transacciones de venta, genera informes detallados y analiza tendencias para tomar decisiones comerciales fundamentadas.

*   Gestión de Clientes: Administra perfiles de clientes, realiza seguimiento del historial de compras y ofrece un servicio personalizado para fomentar la fidelidad del cliente.

*   Seguridad y Privacidad: Implementa medidas de seguridad robustas para proteger los datos confidenciales de la empresa y los clientes, garantizando la integridad y confidencialidad de la información.

*   Personalización y Escalabilidad: Adapta el sistema según las necesidades específicas de tu negocio y escala fácilmente a medida que crece tu operación.

*   Interfaz Intuitiva: Disfruta de una interfaz de usuario amigable y fácil de usar que facilita la navegación y agiliza las tareas diarias de gestión.

## Instalación

1. Necesitas tener git instalado en tu terminal (o <a href=https://gitforwindows.org>GitBash</a> en caso de que uses Windows).
    
        sudo apt install git
2. Una vez instalado, clona el repositorio.
        
        git clone https://github.com/Skale21k/Keyng-DWES

3. Ahora toca darle los ficheros de configuración, para ello descarga el fichero de este <a href="https://mega.nz/file/7zJ2yTDC#gxnB78BE2U_6rZIULSLw13sNODwS_7i4JHZ3z8mT1nQ">enlace</a>, y mueve el fichero .env a la misma carpeta en la que está el fichero llamado <i>docker-compose.yml</i>, y dentro de my-project mueve la carpeta vendor y el fichero .env(DENTRO DE my-project) <b>SE TIENE QUE LLAMAR .ENV, EL CONTENIDO DEL PARÉNTESIS ES SOLO UN DISTINTIVO.</b>

4. Una vez metidos los ficheros de configuarción, solo toca entrar en la carpeta e inicia el docker (<a href="https://docs.docker.com/desktop/">Instalación de Docker</a>).
   
        docker compose up -d

5. Bien, ahora toca crear las migraciones y establecer el enlace para las imágenes, para ello, debemos acceder a la terminal de nuestro contenedor Laravel, esto se puede conseguir mediante la <a href="https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker">extensión oficial de Microsoft</a>. Una vez instalada la extensión, nos dirigimos a ella, y le damos click derecho al contenedor de Laravel, presionamos "Attach Shell" y se nos debería abrir una terminal abajo. En esta terminal, tendremos que escribir los siguientes dos comandos:

        php artisan migrate:fresh --seed

        php artisan storage:link

6. Entra en http://localhost:8000 para ver el proyecto.
---
<div style="display: flex;">
    <img src="https://media.discordapp.net/attachments/1194692021600927868/1202679473246568518/image-removebg-preview.png?ex=65ce558b&is=65bbe08b&hm=4386993c6f222dbabdde435f225ded5fbace4391f3392c4ed211c75f3421392d&=&format=webp&quality=lossless" width="150" style="margin-left: -20px;"><br>
    
<p>©Todos los derechos reservados. Ninguna parte de este software, incluyendo pero no limitado a su código fuente, diseño, funcionalidades, o documentación, puede ser reproducida, distribuida o utilizada de ninguna manera sin el permiso expreso por escrito de los propietarios de KeyNG Supermercado. Cualquier uso no autorizado del software será considerado una violación de los derechos de propiedad intelectual y se tomarán las medidas legales correspondientes. KeyNG Supermercado es una marca registrada y cualquier uso no autorizado de la misma está estrictamente prohibido.</p>
    
</div>
