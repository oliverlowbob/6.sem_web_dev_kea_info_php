<?php
include_once("info.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kea Info</title>
</head>

<body>
    <form method="POST" action="">
        <select name="language" onchange="this.form.submit()">
            <option value="danish" selected>Danish</option>
            <option value="english">English</option>
        </select>
    </form>
    <p>
        <?php
        if(isset($_COOKIE["language"])){
            if ($_COOKIE["language"] == "danish") {
                echo $danishInfo->content;
            } else {
                echo $englishInfo->content;
            }
        }
        ?>
    </p>
</body>

</html>