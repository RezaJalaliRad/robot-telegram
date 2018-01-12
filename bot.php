<?php

require 'C:\xampp\htdocs\bots\id2tel\vendor\autoload.php';
/*
$telegram = new Telegram('522751465:AAFn-y57RnwqeqEFUrPcKJYyhVxbalZE7r4');


$result = $telegram->getData();
$text = $result['message'] ['text'];
$chat_id = $result['message'] ['chat']['id'];
$option = array(
    //First row
    array($telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 2")),
    //Second row
    array($telegram->buildKeyboardButton("Button 3"), $telegram->buildKeyboardButton("Button 4"), $telegram->buildKeyboardButton("Button 5")),
    //Third row
    array($telegram->buildKeyboardButton("Button 6")) );
$keyb = $telegram->buildKeyBoard($option, $onetime=false);
$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");
$telegram->sendMessage($content);
*/

$telegram = new Telegram('522751465:AAFn-y57RnwqeqEFUrPcKJYyhVxbalZE7r4');

$result = $telegram->getData();
$text = $result['message'] ['text'];
$chat_id = $result['message'] ['chat']['id'];
$content = array('chat_id' => $chat_id, 'text' => "salam");
$telegram->sendMessage($content);

