<?php

// Set environment variable
$isDevelopment = in_array( $_SERVER['HTTP_HOST'], array( 'localhost', '127.0.0.1' ));

$envVariables = array(
    'folder' => $isDevelopment ? '/valeverdebar/' : '/valeverdebar.com.br/',
    'subfolder' => $isDevelopment ? '/valeverdebar/' : '/'
);


define('__ROOT__', dirname(dirname(__FILE__)). $envVariables['folder']);
define('__VENDOR__', __ROOT__ . 'vendor/');
define('__INCLUDES__', __ROOT__ . 'includes/');

// auto load feature provided by composer
require_once(__VENDOR__ . 'autoload.php');
require_once(__INCLUDES__ . 'tools.php');
require_once(__INCLUDES__ . 'contact.php');

$page = Tools::getCurrentPageUrl();

/**
 *  Initialize Vendors (services)
 */

$mandrill = new Mandrill('K6zCpkX3tF5Kd8q3DpDmaQ');
$smarty = new Smarty();
$smarty->setCacheDir('vendor/smarty/cache');
$smarty->setConfigDir('vendor/smarty/configs');
$smarty->setCompileDir('vendor/smarty/templates_c');
$smarty->setTemplateDir('views');
// $smarty->testInstall(); exit;
//

$contact = new Contact($mandrill, $smarty);

$smarty->assign('siteName', $envVariables['subfolder']);
$smarty->assign('assets', $envVariables['subfolder'].'assets/');
$smarty->assign('endereco', 'Estrada da Servidao, 30 - Varzea Paulista, SP');
$smarty->assign('cep', '13225-298');
$smarty->assign('email', 'fabiozaffani@gmail.com');
$smarty->assign('telefone', '(11) 4582-2964');
$smarty->assign('celular', '(11) 9 4749-0551');
$smarty->assign('siteBasic', 'www.valeverdebar.com.br');
$smarty->assign('siteFull', 'http://www.valeverdebar.com.br');

switch($page){

    case 'contact':

        echo $contact->sendMail();
        break;

    case 'index' :
    case 'home' :

        $smarty->display('home.tpl');
        break;

    case 'servicos':

        $smarty->display('services.tpl');
        break;

    case 'buffet':

        $smarty->display('services/buffet.tpl');
        break;

    case 'locacao-casamento':

        $smarty->display('services/locacao-casamento.tpl');
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

    case 'album' :

        $smarty->display('album.tpl');
        break;

    default :

        $smarty->display('home.tpl');
        break;
}
