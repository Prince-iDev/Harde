
# Harde (CRUD Application)

Harde is a FullStack Laravel (PHP Freamework) CRUD Application which is able to Create, Read, Upload & Delete data, using both database from a local server (Lampp in this case) and data from an external Api (ice & fire) using Laravel Guzzle which enables an HttpClient request.
After creating the Api, 
## Requirements
* PHP 8^
* Laravel 9^
* Lampp/Xampp Apache
* Postman
* Visual Studio Code



## Installation
* Installing PHP for any Operating System visit -> https://www.php.net/manual/en/install.php chooseyour preferred Operating System and follow the Installation guide.
* Installing Laravel for any Operating System visit -> https://laravel.com/docs/9.x/installation for the latest version. follow the instruction for the installation on your preferred Operating System
* Installing Lampp/Xampp for any Operating System visit -> https://www.apachefriends.org/ Click on your preferred OPerating System then follow the Installation guide
* Installing Postman for any Operating System visit -> https://www.postman.com/downloads/ Postman automatically detect yor OPerating System go ahead and follow the Installation Guide.
* Installing VS Code or Visual Studio Code visit -> https://code.visualstudio.com/download Choose your preferred OPerating System then follow the Installation guide

## Setup
* Well I want to assume you know the basics of laravel if not I advice you visit -> https://laravel.com/docs
* Atter installing all above required installation tools you can go ahead clone this repo with VS Code.
* Go ahead and start your Xampp/Lampp Apache Serve which will initialize the Mysql database
* Create a database in your Local Server (Lampp/Xampp) database.
* Go over to your Laravel Folder Locate your .env file. Open it and input the name of your database like below where it says DB_DATABASE=

* *DB_CONNECTION=mysql
* *DB_HOST=127.0.0.1
* *DB_PORT=3306
* *DB_DATABASE=Harde
* *DB_USERNAME=root
* *DB_PASSWORD=
* Make available your .env file and Vender Folder where your autoload.php resides. 
* Now start the Laravel Serve by input "php artisan Serve" in your terminal/command prompt lafter you cd into your Laravel project directory.
* Now go ahead and run "php artisan migrate" to upload data tables into the created database.
* Visit the link generated. Most likely "127.0.0.1:8000"
* After which you can view the frontend and test the available APIs on Postman
* Incase you are not familiar with postman visit -> https://learning.postman.com/docs/getting-started/introduction/

## Documentation

[Api documenter on postman](https://documenter.getpostman.com/view/18238633/VUjTkicm)


## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/bolarin-prince)

