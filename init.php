<?php
chdir('..');
require_once __DIR__ . '/vendor/autoload.php';
new \HackLog\Core\App($_GET['uri'] ?? "");