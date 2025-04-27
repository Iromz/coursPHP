<?php
session_start();
require_once __DIR__ . '/../includes/contactList.php';

$id = $_GET['id'] ?? '';
$list = &$_SESSION['contact'] ?? [];


if ($id && count($list)) {
    $NameModifier =  array_search($id, array_column($list, 'name'));
    $MailModifier =  array_search($id, array_column($list, 'mail'));


    array_is_list($list, $NameModifier);
    array_is_list($list, $MailModifier);
};

header('location: /');
exit;
