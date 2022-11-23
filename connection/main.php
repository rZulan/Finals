<?php

define('SQL_HOST', 'localhost');
define('SQL_DATABASE', 'learnpp');
define('SQL_USER', 'root');
define('SQL_PASS', 'pass');

$SQL_DSN = 'mysql:host=localhost;mysql:dbname=learnpp';

try {
    $SQL_Handle = new PDO($SQL_DSN, SQL_USER, SQL_PASS, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    echo '<script>console.log("MYSQL Connection has been established!")</script>';
} catch(PDOException $error) {
    echo $error;
}
