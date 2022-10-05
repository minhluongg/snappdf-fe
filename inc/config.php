<?php
// Config
$isHomeUrl = 'https://'.strtolower($_SERVER['SERVER_NAME']);


include $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php';

$listLanguage = array(
    'ar' =>  array(
        'name' => 'عَرَبِيّ',
        'flag' => ''
    ),
    'en' =>  array(
        'name' => 'English',
        'flag' => ''
    ),
    'id' =>  array(
        'name' => 'Bahasa Indonesia',
        'flag' => ''
    ),
    'vn' =>  array(
        'name' => 'Tiếng Việt',
        'flag' => ''
    ),
    'es' =>  array(
        'name' => 'Español',
        'flag' => ''
    ),
    'fr' =>  array(
        'name' => 'Français',
        'flag' => ''
    ),
    'de' =>  array(
        'name' => 'German',
        'flag' => ''
    ),
    'it' => array(
        'name' => 'Italian', 
        'flag' => ''
    ),
    'pt' => array(
        'name' => 'Português', 
        'flag' => ''
    ),
    'tr' => array(
        'name' => 'Turkish', 
        'flag' => ''
    ),
    'ru' => array(
        'name' => 'Русский', 
        'flag' => ''
    ),
    'ja' => array(
        'name' => '日本語', 
        'flag' => ''
    )
);

$actualLink = $_SERVER['REQUEST_URI'];
$newActualLink = str_replace('/' . trim($_GET['lang']), "" ,$actualLink);

if (isset($multiLanguage)) {
    if (isset($_GET["lang"]) && $_GET["lang"] != "") {
        if (clear_string($_GET["lang"]) == 'en') {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . ($newActualLink != '' ?  $newActualLink : '/'));
            exit();
        }
        if (language_exists(clear_string($_GET["lang"])) === true) {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/inc/languages/" . clear_string($_GET["lang"]) . ".php");
            if (isset($privateLanguage)) {
                require_once($_SERVER['DOCUMENT_ROOT'] . "/inc/languages/".$privateLanguage . clear_string($_GET["lang"]) . ".php");
            }
        } else {
            header("Location: $home_page");
            exit();
        }
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'] . "/inc/languages/en.php");
        if (isset($privateLanguage)) {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/inc/languages/".$privateLanguage."en.php");
        }
    }
} else {
    if (isset($_GET["lang"])) {
        header("Location: $home_page");
        exit();
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'] . "/inc/languages/en.php");
    }
}
?>