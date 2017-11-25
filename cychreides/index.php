<?php
echo '<h1>Hello Cychreides</h1>';


$dbh = new PDO('mysql:host=sql_dragoon;dbname=dragoon', 'root', 'secret');
$dragoons = $dbh->query('SELECT * FROM Names')->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($dragoons);
echo '</pre>';

$dragoons = [
    'Lernaean Hydra', 'Ladon', 'Maeonian'
];

$dbh->exec('INSERT INTO Names VALUES (NULL, \'' . $dragoons[rand(0, 2)] . '\')');
