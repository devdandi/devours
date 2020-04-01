<?php
$table = 'report';
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'id','dt' => 0 ),
    array( 'db' => 'id_video','dt' => 1 ),
    array( 'db' => 'judul','dt' => 2 ),


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
