<?php
// Este archivo integra Swagger en el proyecto utilizando la librería swagger-php.
// Asegúrate de haber instalado la librería con Composer:
// composer require zircote/swagger-php

// Cargamos el autoload de Composer.
require_once __DIR__ . '/../vendor/autoload.php';

use OpenApi\Generator;

// Escanear los directorios que contienen las anotaciones de Swagger.
// Por ejemplo, se asume que las clases y controladores con anotaciones están en el directorio 'src'.
$openapi = Generator::scan([__DIR__ . '/../src']);

// Establecer la cabecera de respuesta para JSON.
header('Content-Type: application/json');

// Imprimir la especificación de Swagger en formato JSON.
echo $openapi->toJson();

// Comentarios adicionales:
// - Para visualizar la documentación, puedes acceder a este archivo mediante la URL correspondiente, por ejemplo: http://tu-dominio/swagger.php
// - Asegúrate de documentar correctamente tus rutas y métodos en la carpeta 'src' utilizando las anotaciones de Swagger.
?>