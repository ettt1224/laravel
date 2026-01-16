# laravel
laravel0114


*資料夾要對*

git clone https://github.com/ettt1224/laravel.git

cd 目錄 
composer install

還原套件
npm install

cp .env.example .env
php artisan key:generate

重建資料庫 (XAMPP下)
php artisan migrate

建立框架
composer create-project "laravel/laravel:^12.0" home0114


新增Controller
php artisan make:controller UserController