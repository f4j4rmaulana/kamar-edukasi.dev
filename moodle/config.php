<?php // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost = 'localhost';
$CFG->dbname = 'fmad1793_moodle';
$CFG->dbuser = 'fmad1793_f4j4rmaulana';
$CFG->dbpass = 'f4j4rmaulana';
$CFG->prefix = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => 0,
    'dbport' => 3306,
    'dbsocket' => '',
    'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot = 'https://fmaulana.my.id/moodle/';
$CFG->dataroot = '/home/fmad1793/moodledata';
$CFG->admin = 'admin';

$CFG->directorypermissions = 0777;

require_once __DIR__ . '/lib/setup.php';

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
