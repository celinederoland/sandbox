<?php
echo '<h1>Hello Demeter</h1>';

$dbh = new PDO('mysql:host=sql_dragoon;dbname=dragoon', 'root', 'secret');
$dragoons = $dbh->query('SELECT * FROM Names');
if($dragoons) $dragoons = $dragoons->fetchAll(PDO::FETCH_ASSOC);
else var_dump($dbh->errorInfo());
echo '<pre>';
var_dump($dragoons);
echo '</pre>';

$dragoons = [
    'Delphyne', 'Giantomachian', 'Colchian'
];

$dbh->exec('INSERT INTO Names VALUES (NULL, \'' . $dragoons[rand(0, 2)] . '\')');
