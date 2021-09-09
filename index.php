<?php

define('S3_ENDPOINT', 's3.amazonaws.com');
define('S3_BUCKET', 'bucket');
define('S3_DIR', 'path/to/dir');
define('S3_KEY', '*****');
define('S3_SECRET', '*****');

// submitted form
$_stored_filename = 'file.txt';
$_file_tmp_name = $_FILES['tmp_name'];

new S3(S3_KEY, S3_SECRET, false, S3_ENDPOINT);
S3::putObjectFile($_file_tmp_name, S3_BUCKET, S3_DIR . DS . $_stored_filename, S3::ACL_PUBLIC_READ);

$_uploaded_file = 'https://' . S3_ENDPOINT . DS . S3_BUCKET . DS . S3_DIR . DS . $_stored_filename;
