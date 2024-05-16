<?php
// Configuration variables are defeined here

// Display any error message caused by the PHP script
error_reporting(E_ALL | E_STRICT);
ini_set('display_error', 1);

// The require / include statement takes all the text/code/markup that exists
// in the specified file and copies it into the file that used the require / include statement
require 'application/mvc.php';
?>