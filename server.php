<?php

// Aqui definimos los recursos disponibles

$allowedResourcesTypes = [
    'books',
    'authors',
    'genres',
];

// Validamos que el recurso este disponible

$resourceType = $_GET['resource_type'];

if (!in_array($resourceType, $allowedResourcesTypes)) {
    die;
}

//Defino los recursos

$books = [
    1 => [
        'titulo' => 'Lo que el viento se llevo',
        'id_author' => 2,
        'id_genero' => 2, 
    ],
    
    2 => [
        'titulo' => 'La Iliada',
        'id_author' => 1,
        'id_genero' => 1, 
    ],
    3 => [
        'titulo' => 'La Odisea',
        'id_author' => 1,
        'id_genero' => 1, 
    ]
];

//Generamos la respuesta asumiendo que el pedido es correcto

header('Content-Type: application/json');

switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
case 'GET':
    echo json_encode($books); 
    break;
case 'POST':
    break;
case 'PUT':
    break;
case 'DELETE':
    break;
default:
}
