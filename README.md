LaraShop - Its an E-commerce created using laravel & Tailwind. 

Installation:
Clone this project using git clone {REPO_URl} and then follow the below commands.

1. composer install 
2. npm run dev or npm run build
3. Setup .env file with your database info ex - 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ecommerce
    DB_USERNAME=root
    DB_PASSWORD=
4. Migrate the database tables.
    php artisan migrate
6. Link storage. 
    php artisan storage:link
7. create images direct in public/storage/images
8. Seed the database by running the factory. 
    php artisan db:seed ProductSeeder
9. run the project.
    php artisan serve
10. open http://localhost:8000
