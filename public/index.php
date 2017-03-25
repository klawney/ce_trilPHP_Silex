<?php
require_once __DIR__.'/../bootstrap.php';

$app->get('/',function() use($response) {

    $response->setContent('Eu ainda estou aqyu');
    return $response;
});

$app->run();