<?php

$table = 'subs';
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'id','dt' => 0 ),
    array( 'db' => 'email','dt' => 1 ),
    array( 'db' => 'nama','dt' => 2 ),
    array( 'db' => 'created_at', 'dt' => 3 )

);
 
$sql_details = array(
    'user' => 'devz2353_devours',
    'pass' => 'dandi129',
    'db'   => 'devz2353_devours',
    'host' => 'localhost'
);
require('ssp.class.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);