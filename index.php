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
    <form method="POST" action="index.php">
        <select name="language" onchange="this.form.submit()">
            <option value="danish" <?php if (isset($_SESSION["language"])) { if ($_SESSION["language"] == 'danish') echo ' selected="selected"'; }?>>Danish</option>
            <option value="english" <?php if (isset($_SESSION["language"])) { if ($_SESSION["language"] == 'english') echo ' selected="selected"'; }?>>English</option>
        </select>
    </form>
    <p>
        <?php
        if (isset($_SESSION["language"])) {
            if ($_SESSION["language"] == "danish") {
                echo $danishInfo->content;
            } else {
                echo $englishInfo->content;
            }
        }
        ?>
    </p>
    <form action="" method="post">
        <input type="submit" name="deleteSession" value="Delete Session">
    </form>
</body>

</html>