<?php require_once('Telegram.php');

$Token = "1287774876:AAFgp9IIbPyx-hKmnTlyExdOPr_J5mvwiqE";
$WebHook = "https://www.****.com/test/WebHook.php";

$Web = new TelegramBot($Token);


if (php_sapi_name() == 'cli') {
  $Web->Request('setWebhook', array(
  	'url' => isset($argv[1]) &&
  	$argv[1] == 'delete' ? '' : $WebHook));
  exit;
}

$Data = file_get_contents("php://input");
$Web->Run($Data);

?>