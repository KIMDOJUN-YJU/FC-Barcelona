1. Composer
    - composer install

2. NPM
    - npm install
3. key
    - php artisan key:generate     
4. env
    - cp .env.example .env

5. migrate
    - php artisan migrate


## Yajra
    1.
        composer require yajra/laravel-datatables-oracle
    
    2-1.
        config/app.php 'providers' => [
        ............
        Yajra\Datatables\DatatablesServiceProvider::class,

    ],
    
    2-2.
        'aliases' => [
        ................
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,

    ],
    2-3.
        php artisan vendor:publish --provider=Yajra\DataTables\DataTablesServiceProvide

    

