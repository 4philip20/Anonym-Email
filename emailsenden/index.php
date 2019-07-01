<?php
$mailtext = '<html>
<head>
    <title>HTML-E-Mail mit PHP erstellen</title>
</head>
 
<body>
 
<h1>HALLO</h1>
 

 
</body>
</html>
';
 
$empfaenger = "asa.rippstein@icloud.com"; //Mailadresse
$absender   = "Donald.Trump@pizza.com";
$betreff    = "Test";
$antwortan  = "ICH@example.com";
 
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";
 
$header .= "From: $absender\r\n";
$header .= "Reply-To: $antwortan\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();
 
mail( $empfaenger,
      $betreff,
      $mailtext,
      $header);
 
echo "Mail wurde gesendet!";
?>