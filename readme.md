# Programming Test - CRUD

HOW TO INSTALL:
1. Place "programmingtest" folder to your local apache server, commonly in htdocs/ or www/
2. go to root directory "/programmingtest/", edit .env file, find part like this:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=4406
    DB_DATABASE=programmingtest
    DB_USERNAME=root
    DB_PASSWORD=
    
    change for DB_PORT, DB_USERNAME, and DB_PASSWORD like your mysql server setting.
3. go to root directory "/programmingtest/", import programmingtest.sql in your mysql client.
3. Open link "localhost/programmingtest/public" in your web browser
