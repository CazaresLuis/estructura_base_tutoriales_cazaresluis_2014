<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: index.php 2014-03-15 23:25 _CazaresLuis_ ;
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

session_name('tutorialesCazares2014');
session_start();

// Directorio Raíz de la app
// Es utilizado en templateEngine.inc.php
$root = '';

// Incluimos el template engine
include('includes/templateEngine.inc.php');


// Cargamos la plantilla
	$twig->display('layout_index.html',array(
		"root"			=> $root,
		"title"			=> "Tutoriales cazaresluis.com",
		"footer"		=> 'cazaresluis.com | luis.f.cazares@gmail.com | Celular: 55 22 71 46 89 | <a href="http://www.cazaresluis.com" target="_blank">Blog</a> | <a href="https://www.youtube.com/user/luisfcazares/" target="_blank">Youtube Channel</a> | <a href="https://twitter.com/cazaresluis" target="_blank">Twitter</a> | <a href="https://plus.google.com/u/0/+LuisFernandoCázaresBulbarela/" target="_blank">Google +</a>',
	));
?>