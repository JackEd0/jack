<?php
session_start();
if (isset($_POST['lang'])) {
    $_SESSION['locale_lang'] = $_POST['lang'];
}

define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

$user = include_once DOCUMENT_ROOT . '/includes/user.php';
$locale_lang = isset($_SESSION['locale_lang']) && file_exists(DOCUMENT_ROOT . "/includes/langs/$_SESSION[locale_lang].php") ?
    $_SESSION['locale_lang'] :
    $user['default_lang'];
$langs = include_once DOCUMENT_ROOT . "/includes/langs/$locale_lang.php";

function _l($text)
{
    global $langs;
    return isset($langs[$text]) ? $langs[$text] : $text;
}
