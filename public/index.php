<?php
require_once '../app/config/config.php';
require_once '../app/core/Router.php';
require_once "../app/config/config.php";

/**
 * LOAD GLOBAL HELPERS
 */
require_once '../app/helpers/content_helper.php';
require_once '../app/helpers/url_helper.php';
require_once '../app/helpers/auth_helper.php';

$router = new Router();
$router->dispatch();
