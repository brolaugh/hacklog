<?php
chdir('..');
require_once __DIR__ . '/vendor/autoload.php';
new \HackLog\Core\App(isset($_GET['uri']) ? $_GET['uri'] : '');