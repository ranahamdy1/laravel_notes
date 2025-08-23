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
7. To make controller:
   ```
   php artisan make:controller NameController
   ```
8. To make model and migration
   ```
   php artisan make:model ModelName --migration 
   ```
9. To edit migration with steps (remove last migration for ex)
   ```
   php artisan migrate:rollback --step=1
   ```
10. To play all seeder
   ```
   php artisan db:seed
   ```
11. To play one seeder
   ```
   php artisan db:seed --class=NameTableSeeder
   ```
12. To create Middleware
   ```
   php artisan make:middleware NameOfMiddleware
   ```
13. To create Authentication
    ```
    composer require laravel/ui
    ```
    then for Bootstrap:
    ```
    php artisan ui bootstrap --auth
    ```
    then
    ```
    npm install
    ```
    then
    ```
    npm run dev
    ```

    
