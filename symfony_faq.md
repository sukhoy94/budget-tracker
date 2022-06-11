1. How to start local server?

Run in console:
```
symfony server:start
```

2. PHPstan

```
.\vendor\bin\phpstan analyse -l 9 src
```

3. How to configure connection do db mysql

1) install orm pack
```
composer require symfony/orm-pack
```
2) Set env variable
```
DATABASE_URL="mysql://user:password@127.0.0.1:3306/database_name?serverVersion=5.7&charset=utf8mb4"
```

4. How to check if db connection is correct

```
$em = $this->getDoctrine()->getManager();
$em->getConnection()->connect();
$connected = $em->getConnection()->isConnected();
var_dump($connected); exit;
```
