<?php

$filename = "./images/ram-3500.jpg";

// Retorna um copnteú em binário que é convertido
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:".$mimetype.";base64,".$base64;

?>


<a href="<?=$base64encode?>" target="_blank">Link da imagem</a>

<br/>

<img src="<?=$base64encode?>">