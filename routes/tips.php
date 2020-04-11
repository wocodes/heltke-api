<?php

$router->get('/daily-tips', 'TipController@index');

$router->get('/daily-tips/today', 'TipController@show');

$router->get('/daily-tips/create', 'TipController@create');

$router->post('/daily-tips', 'TipController@store');
