<?php

if ($_SERVER['REMOTE_HOST'] == 'localhost' || $_SERVER['REMOTE_HOST'] == '127.0.0.1') {
    error_reporting(E_ALL);
}
function prettyPrint($a){
    print '<pre>';
    print 'print_r($a)';
    print '</pre>';
}

?>