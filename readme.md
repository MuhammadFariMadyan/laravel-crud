# Laravel basic CRUD example

## Functions

+ list all times
+ create item
+ show a given item
+ update a given item
+ delete a given item

## Install
0. `git clone https://github.com/richardtoth/laravel-crud.git`
1. `cd laravel-crud`
2. `composer install`
3. create a .env file based on the env.example file in the project root and set up your databes connection data
4. run `php artisan key:generate`
5. run `php artisan migrate` (create the tables)
6. run `php artisan db:seed` (insert simple data to the database)

## Details
+ `App/Http/Controllers/ItemController.php`
+ `App/Http/Requests/ItemRequest.php`
+ `App/Repositories/ItemRepositoryInterface.php`
+ `App/Repositories/DbItemRespository.php`
+ `App/Item.php`
+ `database/migrations/2016_08_14_095140_create_items_table.php`
+ `database/seeds/ItemSeeder.php`
+ `resources/views`
