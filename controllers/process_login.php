<?php

if(empty($_POST["usernameC"])){
    $_SESSION['error'] = 'errorLoginUsernameEmpty';
    redirect('login');
    exit;
}

if(empty($_POST["mdpC"])){
    $_SESSION['error'] = 'errorLoginPasswordEmpty';
    redirect('login');
    exit;
}

$username = $_POST["usernameC"];
$password = $_POST["mdpC"];

$stmt = $pdo->prepare('SELECT count(*) as nb FROM user WHERE username = ?');
$stmt->execute([$username]);
$r = $stmt->fetch();

if (!$r['nb'] == 1) {
    $_SESSION['error'] = 'errorLoginUsername';
    redirect('login');
    exit;
}

$stmt = $pdo->prepare('SELECT `password` FROM user WHERE username = ?');
$stmt->execute([$username]);
$r = $stmt->fetch();

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($r['password'],$hashed_password)!=0){
    $_SESSION['error'] = 'errorLogin';
    redirect('login');
    exit;
}

$_SESSION['logged_in'] = true;
$_SESSION['username'] = $username;

redirect('home');
exit();

?>