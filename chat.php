<?php
require_once('db.php');

$chat= 'INSERT INTO messages(user, message) values(:user, :message)';
$statement=$db->prepare($chat);
$statement->execute([
    'user' => strip_tags($_POST['name']),
    'message' => strip_tags($_POST['message'])
]);
$_SESSION['name'] = strip_tags($_POST['name']);
header("Location: /");
