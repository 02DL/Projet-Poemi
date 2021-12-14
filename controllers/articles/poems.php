<?php

$stmt = $pdo->prepare('SELECT post_content FROM post where author= ?');
$stmt->execute([$_SESSION['username']]);

$i = 0;

if(!$r = $stmt->fetch()){
    $_SESSION['personalPost'] = 0;
}

while($r = $stmt->fetch()){
    $_SESSION['personalPost'][$i] = $r;
    $i = $i++;
}



$stmt = $pdo->query('SELECT image_nom FROM user WHERE username = ?');
$stmt->execute([$_SESSION['username']]);
$r = $stmt->fetch();

echo "<img src='./assets/upload/".$r['image_nom']."' width='300px' ><br>";

render('articles/poems', ['title' => 'Loisirs']);

?>