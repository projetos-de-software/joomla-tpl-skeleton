<?php

/**
 *  @package Joomla.Site
 *  @subpackage Templates.skeleton
 * 
 *  @copyright 2025 Projetos de Software <https://www.projetosdesoftware.com.br>
 *  @license MIT
 */

 // Linha necessária para que não se execute o script pelo caminho. 
 defined('_JEXEC') or die; 

 use Joomla\CMS\Factory;
 use Joomla\CMS\HTML\HTMLHelper;
 use Joomla\CMS\Language\Text;
 use Joomla\CMS\Uri\Uri; 


 /** @var  Joomla\CMS\Document\HtmlDocument $this */

 $app = Factory::getApplication();
 $input = $app->getInput();
 $wa = $this->getWebAssetManager();


 // Adicionar Suporte a Favicons


 // Detecting Active Variables
$option   = $input->getCmd('option', '');
$view     = $input->getCmd('view', '');
$layout   = $input->getCmd('layout', '');
$task     = $input->getCmd('task', '');
$itemid   = $input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu     = $app->getMenu()->getActive();
$pageclass = $menu !== null ? $menu->getParams()->get('pageclass_sfx', '') : '';


?>

<!DOCTYPE html>

<!-- Incluir aqui linguagem e idioma -->

<head>
    <!-- Incluir aqui metas, estilos e scripts -->
</head>

<body>


</body>

</html>