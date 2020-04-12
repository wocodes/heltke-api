<?php

//
$router->post('/user/login', 'UserController@login');

// called when new user registers
$router->post('/user/register', 'UserController@register');

