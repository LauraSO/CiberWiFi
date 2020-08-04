<?php
// Paths to Entities that we want Doctrine to see
$paths = array(
       "../base/Entidades",
       
);

// Tells Doctrine what mode we want
$isDevMode = true;

// Doctrine connection configuration
$dbParams = array(
       'driver' => 'mysqli',
       'user' => 'ciberwifi',
       'password' => '36298175',
       'dbname' => 'ciberwifi'
);

?>