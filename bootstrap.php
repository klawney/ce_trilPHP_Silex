<?php
require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response;
$app= new \Silex\Application();
$app['debug']=true;
