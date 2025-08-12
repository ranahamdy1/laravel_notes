## laravel_notes

1. To open Local Server
   ```
   php -S localhost:8080
   ```
2. To create a new Laravel project by running:
   ```
   laravel new new_project_name
   ```
3. To start the Server
   ```
   php artisan serve
   ```   
4. To run your migrations, which means it creates or updates database tables based on the migration files in your project:
   ```
   php artisan migrate 
   ```
5. To create a new migration file:
   ```
   php artisan make:migration add_ex_name
   ```
6. To create a new Eloquent mode:
   ```
   php artisan make:model Example
   ```
7. To make model and migration
   ```
   php artisan make:model ModelName --migration 
   ```
8. To play seeder
```
php artisan db:seed
```
