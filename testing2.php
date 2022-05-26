<?php

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("https://zealotechsolution.com/{$ip}/json"));
echo $details->region;
switch ($region) {
    case 'malaysisa':
      header("Location: https://zealotechsolution.com/my",TRUE,301);
      exit;
      break;
    case 'singapore':
      header("Location: https://zealotechsolution.com/sg",TRUE,301);
      exit;
      break;
    
    }
  
?>