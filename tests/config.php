<?php 
$temp_dir  = explode(DIRECTORY_SEPARATOR , dirname(__FILE__));
array_pop($temp_dir);
$crystal_dir = implode(DIRECTORY_SEPARATOR, $temp_dir);

/** DEFINE DIRECTORY CONSTANTS **/
define('CRYSTAL_ROOT_DIR', $crystal_dir . DIRECTORY_SEPARATOR);
define('SIMPLETEST_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'simpletest' . DIRECTORY_SEPARATOR);
define('TESTS_ROOT_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('CRYSTAL_VALIDATION_TESTS', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Validation' . DIRECTORY_SEPARATOR);
define('CRYSTAL_MYSQL_TESTS', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'QueryBuilders' . DIRECTORY_SEPARATOR . 'MySQL' . DIRECTORY_SEPARATOR);
define('CRYSTAL_POSTGRE_TESTS', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'QueryBuilders' . DIRECTORY_SEPARATOR . 'PostgreSQL' . DIRECTORY_SEPARATOR);