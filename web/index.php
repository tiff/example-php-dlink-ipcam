<?php
$image_path = "webcam.jpg";
shell_exec("fswebcam ./$image_path");
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3">
    <title>Webcam</title>
  </head>
  <body>
    <img src="<? echo $image_path ?>">
  </body>
</html>

