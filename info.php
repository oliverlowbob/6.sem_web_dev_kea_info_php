<?php

    $danishInfo = json_decode(file_get_contents("data/kea_da.json"));
    $englishInfo = json_decode(file_get_contents("data/kea_en.json"));

    if (isset($_POST["language"])) {
        setcookie("language", $_POST["language"], time() + (24 * 24 * 60));
        header("Refresh:0");
    }
    
?>