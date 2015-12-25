<?
$username = '';
$password = '';
$url = 'http://192.168.178.32/dms'
 
$context = stream_context_create(array(
    'http' => array(
        'header'  => "Authorization: Basic " . base64_encode("$username:$password")
    )
));

header("Content-Type: image/jpeg");
readfile($url, false, $context);
?>