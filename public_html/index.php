<?php
$url = "https://tinyurl.com/esawebtvone";
$m3u8_url = file_get_contents($url);
header("Location: " . $m3u8_url);
exit();
?>
