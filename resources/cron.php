<?php

require 'db.php';

try {
    $person = [
        'id' => new MongoDB\BSON\ObjectId(),
        'firstname' => 'Andrei',
        'lastname' => 'Mihailescu',
        'insert_date' => new MongoDB\BSON\UTCDateTime()
    ];

    $insertOne = $db->persons->insertOne($person);
} catch (Exception $e) {
    echo 'Error data not inserted.';
} finally {
    echo 'Data inserted.';
}
