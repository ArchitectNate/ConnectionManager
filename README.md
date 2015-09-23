# ConnectionManager
A PHP singleton designed to keep track of multiple database connections.

# Installation
The recommended way to install ConnectionManager is through composer(https://getcomposer.org/). Type the following command in your shell environment:

php ~/composer.phar require thephpeffect/connection-manager

### Usage
The "default" connection can be accessed by the db() function without passing a connection name.
```php
db("default", new mysqli(...));
db("stats", new PDO(...));

$result = db()->query("SELECT * FROM table1");
$statement = db("stats")->prepare("SELECT * FROM table1 WHERE a=? AND b=?");
```
