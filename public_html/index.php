//GAS: https://script.google.com/home/projects/1ZEygjvxxCtVGCBdrtbR68i6y3bzm9gDFGibXzvkANvsPsOEpgjhZBJDX/edit
//EDIT: https://files.000webhost.com/
//VIEW: https://livestreamserver.000webhostapp.com/
<?php
$url = "https://tinyurl.com/esawebtvone";
$m3u8_url = file_get_contents($url);
header("Location: " . $m3u8_url);
exit();
?>
