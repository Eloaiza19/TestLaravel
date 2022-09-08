TestLaravel
8 de septiembre de 2022






Presentado por:
Esteban Loaiza Ossa






Instructor:
Carlos Mora







Análisis y Desarrollo de Sistemas de Información
Centro de Desarrollo e Innovación Tecnológica Industrial
Dosquebradas
Para empezar nuestro test debemos crear un nuevo proyecto de Laravel con el comando composer create-project laravel/laravel TestLaravel.
 
1.	Con este comando podemos poner a correr los test de prueba 
 
2.	Procedemos a crear un archivo de test con el siguiente comando php artisan make:test UserTest
 
	Verificamos si se creó correctamente el archivo
 
3.	Ponemos a ejecutar los test con php artisan test y verificamos que todo salga OK.

4.	Si realizamos un cambio en el archivo de UserTest y lo ejecutamos nos saldrá un error de la siguiente manera:

 
Devolverá el siguiente error:
 







Test Unitarios
Procedemos a crear un archivo testUnitarios con el siguiente comando php artisan make:test UserTest –unit
 
	Nuevamente volvemos a ejecutar las pruebas
 
Ejecutamos el siguiente código para crear una ui
 

Creamos una interfaz de autentificación reactiva de la siguiente manera:
 
No es recomendable ejecutar este comando en la terminal integrada de VSC (visaul studio code) si no en la ventana de comandos o en el cmd de wimdows.
 
En la terminal de VSC este comando puede presentar errores inesperado, es recomendado ejecutar uno por uno:
 
 

Procedemos a crear una nueva base de datos con el nombre testLaravel y en la archivo .env modificamos el nombre para que coincida con la base de datos:
 

Ponemos a correr la migración hacia la base de datos
 
 

