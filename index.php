<?php

// Set environment variable
$isDevelopment = in_array( $_SERVER['HTTP_HOST'], array( 'localhost', '127.0.0.1' ));

$envVariables = array(
    'folder' => $isDevelopment ? '/valeverdebar/' : '/public_html/',
    'subfolder' => $isDevelopment ? '/valeverdebar/' : '/'
);


define('__ROOT__', dirname(dirname(__FILE__)). $envVariables['folder']);
define('__VENDOR__', __ROOT__ . 'vendor/');
define('__INCLUDES__', __ROOT__ . 'includes/');

// auto load feature provided by composer
require_once(__VENDOR__ . 'autoload.php');
require_once(__INCLUDES__ . 'tools.php');
require_once(__INCLUDES__ . 'contact.php');
require_once(__INCLUDES__ . 'calculator.php');

$page = Tools::getCurrentPageUrl();
$home = 'http://' . $_SERVER['HTTP_HOST'] . $envVariables['subfolder'];

/**
 *  Initialize Vendors (services)
 */

$mandrill = new Mandrill('K6zCpkX3tF5Kd8q3DpDmaQ');
$smarty = new Smarty();
// $smarty->caching = 0;
$smarty->setCacheDir('vendor/smarty/cache');
$smarty->setConfigDir('vendor/smarty/configs');
$smarty->setCompileDir('vendor/smarty/templates_c');
$smarty->setTemplateDir('views');
// $smarty->testInstall(); exit;
//

$contact = new Contact($mandrill, $smarty);
$calculator = new Calculator();

$smarty->assign('siteName', $envVariables['subfolder']);
$smarty->assign('assets', $envVariables['subfolder'].'assets/');
$smarty->assign('endereco', 'Rua Adelino Strasi, s/n - Varzea Paulista, SP');
$smarty->assign('cep', '13225-298');
$smarty->assign('email', 'contato@valeverdefestas.com.br');
$smarty->assign('telefone', '(11) 4595-8886');
$smarty->assign('celular', '(11) 9 7441-2195');
$smarty->assign('celularName', '');
$smarty->assign('siteBasic', 'www.valeverdefestas.com.br');
$smarty->assign('siteFull', 'http://www.valeverdefestas.com.br');

switch($page){
    case 'calculator':
        echo $calculator->calc();
        break;

    case 'contact':

        echo $contact->sendMail();
        break;

    case $home:

        $smarty->display('home.tpl');
        break;

    case 'servicos':

        $smarty->display('services.tpl');
        break;

    case 'buffet':

        $smarty->display('services/buffet.tpl');
        break;

    case 'locacao-chacara-casamento':

        $smarty->display('services/locacao-chacara-casamento.tpl');
        break;

    case 'locacao-festa':

        $smarty->display('services/locacao-festa.tpl');
        break;

    case 'localizacao' :

        $smarty->display('localizacao.tpl');
        break;


    case 'contato' :

        $smarty->display('contato.tpl');
        break;

    case 'sobre-nos' :

        $smarty->display('sobre-nos.tpl');
        break;

    default :

        $smarty->display('404.tpl');
        break;
}
