jeasyui-php-ajax
================

Simple sample JQuery EasyUI with AJAX, PHP & MySQL.

MySQL
-----
Create database and table
```
mysql > create schema tododb;
mysql > use tododb;
mysql > create table datetime_data (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,waktu DATETIME);
```

Change database parameter setting in file `action.php` to your preferences

```
 $connection_uri = 'mysql:host=localhost;dbname=tododb';
 $username= 'your_mysql_username';
 $password='your_msysql_password';
```



