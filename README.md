# Laravel Project to Upload Excel File

## Installation
- Clone repository
```
$ git clone https://github.com/blpraveen/business_listing
```
- Run in your terminal
```
$ composer install
$ copy .env.example .env
$ php artisan key:generate
```
- Setup database connection in .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
Laravel User Scaffolding 
```bash
php artisan ui bootstrap
```

Run Npm 

```
$ npm install
$ npm run build
```


- Migrate tables and seed with demo data
```
$ php artisan migrate --seed
```


- Access it on
```
$ php artisan serve
http://localhost:8000/
```
There will be no listing need to add listing from admin 
Admin Login
```
http://127.0.0.1:8000/admin/login
email:blpraveen2002@gmail.com
password:Praveen01
```

Add some listing and view the home page. In Listing detail page you can submit the rating