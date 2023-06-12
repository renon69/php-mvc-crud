<?php

    require('model/database.php');
    require('city_db.php');

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$countrycode = filter_input(INPUT_POST, "countrycode", FILTER_SANITIZE_STRING);
$district = filter_input(INPUT_POST, "district", FILTER_SANITIZE_STRING);
$population = filter_input(INPUT_POST, "population", FILTER_SANITIZE_STRING);

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = 'create_read_form';
    }
}

$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING);
if (!$city) {
    $city = filter_input(INPUT_GET, "city", FILTER_SANITIZE_STRING);
};

switch($action) {
    case 'insert':
        break;
    case 'select':
        break;
    case 'update':
        break;
    case 'delete':
        break;
    default:
        include('view')
}





