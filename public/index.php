<?php

session_start();
require_once dirname(__DIR__) . '/App/Core/bootstrap.php';
use App\Core\Router;

new Router();

