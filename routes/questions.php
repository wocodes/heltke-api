<?php

// fetch questions
$router->get('/questions', 'QuestionController@index');

// post question
$router->post('/questions', 'QuestionController@store');
