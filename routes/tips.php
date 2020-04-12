<?php

$router->group(["prefix" => "api"], function() use ($router) {
    $router->get('/daily-tips', 'TipController@index');

    $router->get('/daily-tips/today', 'TipController@show');

    $router->get('/daily-tips/create', 'TipController@create');

    $router->post('/daily-tips', 'TipController@store');
});

