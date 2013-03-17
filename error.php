<?php

$status=$_SERVER['REDIRECT_STATUS'];
$codes=array(
      400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
      401 => array('401 Login Error', 'It appears that the password and/or user-name you entered was incorrect.'),
      403 => array('403 Forbidden', 'Sorry, employees and staff only.'),
      404 => array('404 Missing', 'I\'m sorry, but the page you\'re looking for is missing, hiding, or maybe it moved somewhere else and forgot to tell you.'),
      405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
      408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
      414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.'),
      500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
      502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
      504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$errortitle=$codes[$status][0];
$message=$codes[$status][1];

if($errortitle==false){
       $errortitle="Unknown Error";
       $message="An unknown error has occurred.";
}

?>
<!doctype html>
<html>
<head>
<title><?php echo("$errortitle");?></title>
<meta charset="utf-8">
<style type="text/css">
* {
  margin: 0;
  padding: 0;
}

a {color:#AB3E5B; text-decoration: none;}
a:hover {color:#222222;}
.content {
  width: 100%;
  max-width: 500px;
  height: auto;
  margin: 180px auto 0px auto;
  background: #fff;
  border: 1px solid #ccc;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.4);
  text-align: left; }
  .content h1 {
    padding: 20px 0px 0px 20px; }
  .content h3 {
    padding: 0px 20px; }
  .content p {
    font-family: "Droid Serif", serif;
    padding: 0px 0px 20px 20px; }

.kevin {
  width: 56px;
  height: 120px;
  background: url("http://daten.kevingimbel.de/img/pixel/pixelatarijunge_bart.png");
  position: absolute;
  bottom: 0px;
  right: 20px; }

.error-area {
  width: 440px;
}

.error-title {
  color: #AB3E5B;
}

</style>
</head>
<body>
<div class="content">
    <div class="kevin"></div>
    <div class="error-area">
<?php
echo('<h1 class="error-title">'.$errortitle.'</h1>');
echo('<p>'.$message.'</p>');
?>
<p>You should better went back <a href="/">home</a>.</p>
  </div>
  </div><!-- content -->
</body>
</html>