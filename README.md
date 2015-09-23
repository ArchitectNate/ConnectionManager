# ConnectionManager
A PHP singleton designed to keep track of multiple database connections.

###Examples
The "default" connection can be accessed by the db() function without passing a connection name.
```php
db("default", new mysqli(...));
db("stats", new PDO(...));

$result = db()->query("SELECT * FROM table1");
$statement = db("stats")->prepare("SELECT * FROM table1 WHERE a=? AND b=?");
$statement->execute(array(1, 2));
```
