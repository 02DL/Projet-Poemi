<?php 
$username = $_POST["usernameI"];
$password = $_POST["mdpI"];
$passwordConfirmation = $_POST["mdpVerifI"];

$stmt = $pdo->prepare('SELECT count(*) as nb FROM user WHERE username = ?');
$stmt->execute([$username]);
$r = $stmt->fetch();


if ($r['nb'] == 1) {
  $_SESSION['error'] = 'SignUpUsername';
  redirect('inscription');
  exit;
}

if($password != $passwordConfirmation){
  $_SESSION['error'] = 'SignUpPassword';
  redirect('inscription');
  exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if(isset($_FILES['photoProfileI'])){
  $tmpName = $_FILES['photoProfileI']['tmp_name'];
  $name = $_FILES['photoProfileI']['name'];
  $size = $_FILES['photoProfileI']['size'];
  $error = $_FILES['photoProfileI']['error'];

  $tabExtension = explode('.', $name);
  $extension = strtolower(end($tabExtension));
  $extensions = ['jpg', 'png', 'jpeg', 'gif'];
  $maxSize = 400000;
  if(in_array($extension, $extensions) && $size <= $maxSize && $error != 0){
    exit;
  }
  $uniqueName = uniqid(true);
  $file =$uniqueName.".".$extension;
  move_uploaded_file($tmpName, '.\assets\upload\ '.$file);
}

if(isset($_FILES['photoProfileI'])){
  $stmt = $pdo->prepare('INSERT INTO user(id, username, `password`,image_nom) VALUES(null, ?, ?,?)');
  $stmt->execute([$username,$hashed_password, $file]);
}else{
    $stmt = $pdo->prepare('INSERT INTO user(id, username, `password`) VALUES(null, ?, ?)');
    $stmt->execute([$username,$hashed_password]);
}

redirect('home');
?>
