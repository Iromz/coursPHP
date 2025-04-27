<?php
session_start();
require_once __DIR__ . '/../includes/contactList.php';

$id = $_GET['id'] ?? '';
$list = &$_SESSION['contact'] ?? [];


if ($id && count($list)) {
    $listIndex =  array_search($id, array_column($list, 'id'));

    if ($listIndex !== false) {
        array_splice($list, $listIndex, 1);
    }
};

header('location: /');
exit;
