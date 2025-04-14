<?php

require_once __DIR__ . 'patterns/factory/models/users.php';
#require_once __DIR__ . '/mvc/views/MarkdownView.php';
require_once __DIR__ . '/mvc/controllers/controller.php';

use patterns\mvc\controllers\Controller; 

error_reporting(E_ALL);
ini_set('display_errors', 1);

#require_once __DIR__ . '/mvc/controllers/controller.php';
#require_once __DIR__ . '/mvc/views/MarkdownView.php';
#require_once __DIR__ . '/mvc/models/users.php';

$controller = new Controller();
echo "<pre>" . $controller->render() . "</pre>";