<?php
require('../resources/db.php');

// UPLOAD
// $bucket = $db->selectGridFSBucket(['bucketName' => 'images']);

// $stream = $bucket->openUploadStream('cat.jpg');

// $contents = file_get_contents('../public/cat.jpg');
// fwrite($stream, $contents);
// fclose($stream);






// DOWNLOAD
// In practice, $fileId denotes the _id of an existing file in GridFS
$fileId = new MongoDB\BSON\ObjectId('5a771d611d41c80f2f041122');

$bucket = $db->selectGridFSBucket(['bucketName' => 'images']);

// STREAM
$stream = $bucket->openDownloadStream($fileId);
// $contents = stream_get_contents($stream);

// SAVE TO DISK
// $file = fopen('../public/cat2.jpg', 'wb');
// $bucket->downloadToStream($fileId, $file);






// open the file in a binary mode
// $name = '../public/cat.jpg';
// $fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/jpg");
// header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($stream);
exit;