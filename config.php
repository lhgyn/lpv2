<?php 
// GLOBAL SETTINGS
//////////////////////////////
define( 'FILE_NAME', basename($_SERVER['SCRIPT_FILENAME']) );
$filename = FILE_NAME;
$page = basename($filename, '.php');


// Site info
$data['site_title'] = 'Phenatrim | Weight Loss Formula | Site Oficial';


// Scripts de Conversão
$data['site_pixels'] = [];





date_default_timezone_set('America/Sao_Paulo');
$datahoralocalcadastro = date('d/m/Y H:i:s', time());
$ipaddress = NULL;
if (getenv('HTTP_CLIENT_IP'))
	$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'UNKNOWN';