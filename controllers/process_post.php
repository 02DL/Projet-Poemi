<?php 

$username = $_SESSION['username'];
$post_content = $_POST['poeme'];

$stmt = $pdo->prepare('INSERT INTO post(id, author, post_content) VALUES(null, ?, ?)');
$stmt->execute([$username,$post_content]);

redirect('home');

?>