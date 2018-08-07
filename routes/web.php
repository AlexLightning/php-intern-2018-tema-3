<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/keygen', function() {
    echo str_random(32);
});


$router->get('/companies', 'CompaniesController@showAllCompanies');
$router->get('/companies/{id}', 'CompaniesController@getCompanyById');
$router->get('/companies/types/{type}', 'CompaniesController@getCompanyByType');
$router->post('/companies', 'CompaniesController@create');
$router->put('/companies/{id}', 'CompaniesController@update');
$router->delete('/companies/{id}', 'CompaniesController@delete');

$router->get('/employees','EmployeesController@showAllEmployees');
$router->get('/employees/{id}', 'EmployeesController@showEmployeeById');
$router->get('/employees?job={job}', 'EmployeesController@showEmployeeByJob');
$router->post('/employees', 'EmployeesController@create');
$router->put('/employees/{id}', 'EmployeesController@update');
$router->delete('/employees/{id}', 'EmployeesController@delete');