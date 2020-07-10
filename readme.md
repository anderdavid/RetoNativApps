<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Presentación prueba técnica NativApps

- Ver aplicación en servidor compartido (heroku):
		https://thawing-caverns-90161.herokuapp.com/
        
- Credenciales de acceso a la base de datos (https://www.freemysqlhosting.net):
	- Servidor: sql10.freemysqlhosting.net
	- Nombre base de datos: sql10353371
	- Username: sql10353371
	- Password: 5P2FLpfLL4
	- Port number: 3306
    
- Instalación<br>
Requerimientos:
    - PHP 7.1+
    - Composer.
    - Mysql
        
 - clonar de repositorio <br>
		Git clone https://github.com/anderdavid/RetoNativApps.git<br>
		cd RetoNativApps/<br>
		composer install<br>
        
- configurar credenciales base de datos
		
	- nano .env
			
        DB_CONNECTION=mysql<br>
        DB_HOST= (nombre servidor)<br>
        DB_PORT=3306<br>
        DB_DATABASE=(nombre base de datos)<br>
        DB_USERNAME=(username)<br>
        DB_PASSWORD=(password)<br>
        
- Correr migracion <br>
    php artisan migrate



## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
