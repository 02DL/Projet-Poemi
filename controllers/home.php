<?php

$_SESSION['error'] = null;

$stmt = $pdo->prepare('SELECT count(*) as nb FROM post');
$stmt->execute();
$r = $stmt->fetch();
$nb = random_int(0,$r[0]);

$stmt = $pdo->prepare('SELECT post_content, author FROM post where id=?');
$stmt->execute([$nb]);
$r = $stmt->fetch();
$_SESSION['post_to_show'] = $r;


render('home', ['title' => 'home']);

?>
