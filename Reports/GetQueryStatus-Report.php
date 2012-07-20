<?php
include_once "maxipago_payment.php";
$credentials = array("merchantId" => "mid", "merchantKey" => "secret-key");
define("version", "3.1.1.15");
define("url", "https://testapi.maxipago.net/ReportsAPI/servlet/ReportsAPI");
$data = array(
  "debug" => "1", // Turns debug ON (1) and OFF (0) //
  "checkStatus" => "1", // REQUIRED - Always '1' //
  "requestToken" => "a8fn219=" // REQUIRED - Request token created by maxiPago! //
);
$transaction = maxipago_payment("report", $credentials, $data, version, url);
print_r($transaction);
?>