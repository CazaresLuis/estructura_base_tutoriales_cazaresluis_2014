<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/includes/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: db_connection.inc.php 2014-03-15 23:39 _CazaresLuis_ ;
 * @comment: Datos de conexión con la base de datos
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


/* CODIGO SQL PARA CREACIÓN DE LA BASE DE DATOS
** IMPORTANTE
** Posterior a la creación de la base de datos, se debe crear un usuario específico para la administración de esta
*******************************************************************************************************************
--
-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2014 a las 10:11:34
-- Versión del servidor: 5.5.25
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `tutos_cazaresluis_2014`
--
CREATE DATABASE `tutos_cazaresluis_2014` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tutos_cazaresluis_2014`;

*/


define("server", 'localhost');
define("user", 'devCazaresLuis');
define("pass", 'xYzy8j65LXD2SVjs');
define("mainDataBase", 'tutos_cazaresluis_2014');

$errorDbConexion = true;

// Verificar constantes para conexión al servidor
if(defined('server') && defined('user') && defined('pass') && defined('mainDataBase'))
{
	// Conexión con la base de datos
	
	$mysqli = new mysqli(server, user, pass, mainDataBase);
	
	// Verificamos si hay error al conectar
	if (mysqli_connect_error()) {
	    $errorDbConexion = false;
	}
	else{
		// Evitando problemas con acentos
		$mysqli -> query('SET NAMES "utf8"');
	}
	
}

?>