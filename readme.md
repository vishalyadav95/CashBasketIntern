# IPL tournment Backend
Written on PHP laravel 5.4

### For Front end
- clone (refer running instructions ) it
- edit the views under resouce/
- And static file like css, image, JavaScript goes in the public/ directory

### For Android application
- The API will be returning the JSON file with the required details
- will update the API soon

## Runing instructions
Based on the PHP Laravel (5.4) framework.

#### Requirement:

- PHP >= 5.6.4
- Apache server
- MYSQL server
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

#### Instructions how to set the server:

1. Clone or Download the repository ( Master Branch )

2. Composer is required so download it from its official [website](https://getcomposer.org/) according your system

3. Navigate to the project directory ~/dir_name/

4. Use `composer install` to install Larvel and its dependencies   

5. Copy .env.example to .env

6. Edit according to the your machine configuration
        `DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=homestead
         DB_USERNAME=homestead
         DB_PASSWORD=secret`  


7. Use `php artisan key:generate` to generate the security key

8. Use `php artisan migrate` to setup database

9. Use `php artisan serve`  to run the server in development mode.
  - for the production make the apache server point to ~/dir_name/public  

## Instruction to run the application:
  Will be updated soon

There is a lot much, Why don't you explore it?
