# Programming Test - CRUD

HOW TO INSTALL (Tested on Windows 10):
1. Download repository as zip file
2. Extract to your web server htdocs
3. change folder to "programmingtest"
4. edit .env.example, change the (?) based on your Mysql server setting:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=?
    DB_DATABASE=programmingtest
    DB_USERNAME=?
    DB_PASSWORD=?
    
5. open cmd command, locate to root folder "/programmingtest", run the following:
   1. composer update
   2. php artisan key:generate
6. Export programmingtest.sql to your local mysql server
7. Open link "localhost/programmingtest/public" in your web browser
