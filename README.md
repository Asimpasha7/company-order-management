Company Order Management System
Overview


The Company Order Management System is a web application designed to manage companies, their orders, 
and the countries they operate in. This system provides functionalities to add, edit, 
and delete companies, orders, and countries, as well as view detailed information about each entity.


Installation

1.Clone the repository to your local machine.
2.Install PHP, Composer, and Laravel if you haven't already.
3.Run composer install to install project dependencies.
4.Configure your environment variables in the .env file, including database settings.
5.Run php artisan migrate to migrate the database tables.
 Run php artisan db:seed to seed the database with sample data.
6.Start the development server using php artisan serve.
7.Access the application in your web browser at http://localhost:8000 or your specified port


Companies API Endpoint:

URL: http://localhost:8000/api/companies
Description: This endpoint allows you to perform CRUD operations on companies.

Orders API Endpoint:

URL: http://localhost:8000/api/orders
Description: This endpoint allows you to perform CRUD operations on orders
