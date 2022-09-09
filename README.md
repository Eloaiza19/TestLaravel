TestLaravel
8 de septiembre de 2022






Presentado por:
Esteban Loaiza Ossa






Instructor:
Carlos Mora







Análisis y Desarrollo de Sistemas de Información
Centro de Desarrollo e Innovación Tecnológica Industrial
Dosquebradas

# Testing Laravel 
El tema anterior visto en el video consiste en realizar un testing en Laravel, usando algunos comandos correspondientes para empezar una nueva interfaz de usuario. Aprendimos una nueva forma de poner a correr el servidor para que podamos trabajar tanto en backend como en frontend, utilizamos herramientas las cuales tienen una librería que dentro de ella tienen iniciar sección y registrarse. En el video logramos observar la manera adecuada de configurar una librería y lograrle un buen provecho.
## Paso a paso:
1. Para empezar nuestro test debemos crear un nuevo proyecto de Laravel con el comando composer create-project laravel/laravel TestLaravel.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura1.PNG?raw=true)
1. Con este comando podemos poner a correr los test de prueba 
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura2.PNG?raw=true)
1. Procedemos a crear un archivo de test con el siguiente comando php artisan make:test UserTest
 ![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura3.PNG?raw=true)
1. Verificamos si se creó correctamente el archivo
 ![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura4.PNG?raw=true)

- Ponemos a ejecutar los test con php artisan test y verificamos que todo salga OK.

1. Si realizamos un cambio en el archivo de UserTest y lo ejecutamos nos saldrá un error de la siguiente manera:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura5.PNG?raw=true)

1. Devolverá el siguiente error:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura6.PNG?raw=true)
### Test Unitarios
1. Procedemos a crear un archivo testUnitarios con el siguiente comando php artisan make:test UserTest –unit
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura7.PNG?raw=true)
1. Nuevamente volvemos a ejecutar las pruebas
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura8.PNG?raw=true)
1. Ejecutamos el siguiente código para crear una ui
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura9.PNG?raw=true)
1. Creamos una interfaz de autentificación reactiva de la siguiente manera:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura10.PNG?raw=true)
1. No es recomendable ejecutar este comando en la terminal integrada de VSC (visaul studio code) si no en la ventana de comandos o en el cmd de wimdows.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura11.PNG?raw=true)
- En la terminal de VSC este comando puede presentar errores inesperado, es recomendado ejecutar uno por uno:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura12.PNG?raw=true)
1. Procedemos a crear una nueva base de datos con el nombre testLaravel y en la archivo .env modificamos el nombre para que coincida con la base de datos:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura13.PNG?raw=true)
1. Ponemos a correr la migración hacia la base de datos
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura14.PNG?raw=true)
1. Procedemos a modificar UserTest.php
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img/captura15.PNG?raw=true)

##### Link del repositorio
https://github.com/Eloaiza19/TestLaravel.git
