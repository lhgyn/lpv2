<?php 
// GLOBAL SETTINGS
//////////////////////////////
define( 'FILE_NAME', basename($_SERVER['SCRIPT_FILENAME']) );
$filename = FILE_NAME;
$page = basename($filename, '.php');



// Theme Fontes
$data['theme_fonts'] = [
	'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400',
	'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
    'https://fonts.googleapis.com/css?family=Marck+Script|Nothing+You+Could+Do|Yellowtail'
];



// Theme Styles
$data['_theme_styles'] = [ 'assets/css/bootstrap.min.css', 'assets/css/bootstrap-theme.min.css', 'assets/css/font-awesome.css', 'assets/css/main.css', 'assets/css/flaticon.css', 'assets/libs/animate.css', 'assets/libs/GoogleNexusWebsiteMenu/css/component.css'];

switch ($page) {
    case 'home':
        array_push($data['_theme_styles'], 'assets/css/news-home.css');
        break;
    case 'como-funciona':
        array_push($data['_theme_styles'], 'assets/css/como-funciona.css');
        break;
    case 'depoimentos':
        array_push($data['_theme_styles'], 'assets/css/depoimentos.css');
        break;
    case 'garantia':
        array_push($data['_theme_styles'], 'assets/css/garantia.css');
        break;
    case 'perguntas-frequentes':
        array_push($data['_theme_styles'], 'assets/css/perguntas-frequentes.css');
        break;
    case 'contato':
        array_push($data['_theme_styles'], 'assets/css/contato.css');
        break;
    case 'sobre-nos':
        array_push($data['_theme_styles'], 'assets/css/sobre-nos.css');
        break;
    case 'na-midia':
        array_push($data['_theme_styles'], 'assets/css/na-midia.css');
        break;
    case 'politica-privacidade':
        array_push($data['_theme_styles'], 'assets/css/politica-privacidade.css');
        break;
    case 'politica-reembolso':
        array_push($data['_theme_styles'], 'assets/css/politica-reembolso.css');
        break;
    
    default:
        # code...
        break;
}

// Theme Scripts
$data['_theme_scripts'] = [
	'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
	'assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
    'assets/js/vendor/bootstrap.min.js',
	'app/ajaxGetPost.js',
	'app/main.js',
	'app/newsLetter.js',
    'assets/libs/jquery.fittext.js',
    'assets/libs/GoogleNexusWebsiteMenu/js/gnmenu.js',
    'assets/libs/GoogleNexusWebsiteMenu/js/classie.js'


];

// Theme Colors
$data['theme_colors'] = [
    'default' => '#333',
    'primary' => '#0077c8',
    'secondary' => '#106f88',
    'light_color' => '#666',
    'links' => '#606060',
    'cta' => '#fff',
    'cta_bg' => 'linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%)',
    'icons' => '#106f88',
];


// Scripts de Conversão
$data['site_pixels'] = [];


// Site info
$data['site_title'] = 'Phenatrim | Weight Loss Formula | Site Oficial';



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