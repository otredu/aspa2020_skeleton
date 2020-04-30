<?php
session_start();
set_include_path(dirname(__FILE__) . '/../');

require_once 'env.php';
require_once 'router/Request.php';
require_once 'router/Router.php';
require_once 'libraries/helpers.php';
require_once 'controllers/demoManagement.php';

$router = new Router(new Request);

$router->get('/', function($request) {
  demoController();
});
