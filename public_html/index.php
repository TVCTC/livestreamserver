<?php
$url = "https://tinyurl.com/esawebtvone";
$m3u8_url = file_get_contents($url);
header("Location: " . $m3u8_url);
exit();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My first PHP script</title>
        <style type="text/css">
            body {background:black; color:lightgreen}
        </style>
    </head>
    <body>
    <?php
        echo 'PHP version: ' . phpversion() . '\r\n';
        echo $m3u8_url;
    ?>
    </body>
</html>
