<?php

$table = 'movies';
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'judul','dt' => 0 ),
    array( 'db' => 'season','dt' => 1 ),
    array( 'db' => 'episode','dt' => 2 ),
    array( 'db' => 'rilis_tanggal', 'dt' => 3 ),
    array( 'db' => 'kategori', 'dt' => 4 ),
    array( 'db' => 'id', 'dt' => 5 ),


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