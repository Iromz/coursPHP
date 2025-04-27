<?php
session_start();
require_once __DIR__ . '/../includes/contactList.php';

$id = $_GET['id'] ?? '';
$list = &$_SESSION['contact'] ?? [];


if ($id && count($list)) {
    
};

header('location: /');
exit;
