<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'juhtqggmmn';
$CFG->dbuser    = 'juhtqggmmn';
$CFG->dbpass    = 'xxjq64kzeC';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://moodle-144182-449093.cloudwaysapps.com';
$CFG->dataroot  = '/home/144182.cloudwaysapps.com/juhtqggmmn/private_html/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02770;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

