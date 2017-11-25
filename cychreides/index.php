<?php
echo '<h1>Hello Cychreides</h1>';

$config = file_get_contents("config.json");
$config = json_decode($config, true);
$dbh = new PDO('mysql:host=sql_dragoon;dbname=dragoon', 'root', $config['pwd']);

$dragoons = $dbh->query('SELECT * FROM Names');
if ($dragoons) $dragoons = $dragoons->fetchAll(PDO::FETCH_ASSOC);
else var_dump($dbh->errorInfo());

echo '<pre>';
var_dump($dragoons);
echo '</pre>';

$dragoons = [
    'Lernaean Hydra', 'Ladon', 'Maeonian'
];

$dbh->exec('INSERT INTO Names VALUES (NULL, \'' . $dragoons[rand(0, 2)] . '\')');


