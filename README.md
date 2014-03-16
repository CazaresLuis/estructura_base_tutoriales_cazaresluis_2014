estructura_base_tutoriales_cazaresluis_2014
===========================================

Estructura de carpetas y librerías para tutoriales 2014

Esta es la estructura básica necesaria para llevar a cabo los tutoriales y ejemplos de diseño y desarrollo web

===========================================
CONFIGURACIÓN DE LA BASE DE DATOS
===========================================

El script de creación de la base de datos se encuentra en la siguiente ruta:

tutoriales2014/includes/db_connection.inc.php

Incluye los datos del usuario y un pequeño script SQL 

===============================================
Script SQL para creación de Base de datos mysql
===============================================
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

Nota importante:
Esta estructura se irá enriqueciendo con librerías según el tipo de tutorial que se desarrolle,
cuando sea el caso informaré en los artículos y videos relacionados.

Luis Fernando Cázares Bulbarela
Diseño y desarrollo web
www.cazaresluis.com
@cazaresluis
