<?php
session_start();

$danishInfo = json_decode(file_get_contents("data/kea_da.json"));
$englishInfo = json_decode(file_get_contents("data/kea_en.json"));

if (isset($_POST["language"])) {
    //setcookie("language", $_POST["language"], time() + (24 * 24 * 60));
    $_SESSION["language"] = $_POST["language"];
    header("Refresh:0");
}

if (array_key_exists('deleteSession', $_POST)) {
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 86400, '/');
    }
    session_destroy();
    header("Refresh:0");
}
