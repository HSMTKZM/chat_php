<?php
$msg = $_POST["message"];
$new_chat = (object)$msg;
$path = "./chat.json";
$messages = json_decode(file_get_contents($path));

$message = $_POST["message[message]"];
if(empty($message)) {
    header('location:index.php');
    exit();
}

array_push($messages,$new_chat);
$messages = json_encode($messages);
file_put_contents($path,$messages);
header('location:index.php');
exit();

?>