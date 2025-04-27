<?php
require_once 'Controller.php';

$page = $_GET['page'] ?? 'home';

$controller = new Controller();
$controller->handle($page);
?>
