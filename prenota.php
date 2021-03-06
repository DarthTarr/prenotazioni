<?php
 ini_set('display_errors', 1);
 ini_set('log_errors', 0);
 $host = 'localhost';
 $db = 'prenotazioni';
 $user = 'root';
 $pass = '';

 $dsn = 'mysql:host='.$host.';dbname='.$db;

 $pdo = new PDO($dsn, $user, $pass);
 $data_scelta = $_POST['data'];
 $fiscale = $_POST['codice'];
 $sql = "INSERT INTO prenotazioni VALUES(null, :fiscale, :data_scelta)";
 $stmt = $pdo->prepare($sql);

$stmt->execute(
    [
        'fiscale' => $fiscale,
        'data_scelta' => $data_scelta
    ]
);