### A premature Laravel like app

Works with PHP's built-in development server.
```
php -S localhost:8888
```

For database settings check config.php file.

It has a basic router. You can add new routes: app/routes.php
```
$router->get("users", "UsersController@index");
$router->post("users", "UsersController@store");
```

Has a basic dependency injector.

Controllers.

A basic QueryBuilder. Atm, there is only two methods.
```
$queryBuilder->selectAll("tableName");
$queryBuilder->insert("tableName", $dataArr);
```

Etc.

Written from scratch.
