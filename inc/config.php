<?php
// Config
$isHomeUrl = 'https://'.strtolower($_SERVER['SERVER_NAME']);


include $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php';

$languages = array(
    'en' =>  array(
        'name' => 'English',
        'flag' => ''
    ),
    'id' =>  array(
        'name' => 'Bahasa Indonesia',
        'flag' => ''
    ),
    'ms' =>  array(
        'name' => 'Bahasa Malaysia',
        'flag' => ''
    ),
    'jw' =>  array(
        'name' => 'Basa Jawa',
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
    'hi' =>  array(
        'name' => 'Hindi',
        'flag' => ''
    ),
    'it' => array(
        'name' => 'Italian', 
        'flag' => ''
    ),
    'hu' =>  array(
        'name' => 'Magyar',
        'flag' => ''
    ),
    'nl' =>  array(
        'name' => 'Nederlands',
        'flag' => ''
    ),
    'pl' =>  array(
        'name' => 'Polish',
        'flag' => ''
    ),
    'pt' => array(
        'name' => 'Português', 
        'flag' => ''
    ),
    'ro' =>  array(
        'name' => 'Română',
        'flag' => ''
    ),
    'th' => array(
        'name' => 'Thai', 
        'flag' => ''
    ),
    'vn' =>  array(
        'name' => 'Tiếng Việt',
        'flag' => ''
    ),
    'tr' => array(
        'name' => 'Turkish', 
        'flag' => ''
    ),
    'cs' =>  array(
        'name' => 'Čeština',
        'flag' => ''
    ),
    'el' =>  array(
        'name' => 'Ελληνικά',
        'flag' => ''
    ),
    'ru' => array(
        'name' => 'Русский', 
        'flag' => ''
    ),
    'uk' =>  array(
        'name' => 'украї́нська мо́ва',
        'flag' => ''
    ),
    'ja' => array(
        'name' => '日本語', 
        'flag' => ''
    ),
    'ko' => array(
        'name' => '한국어', 
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