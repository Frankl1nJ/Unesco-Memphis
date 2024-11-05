<?php
session_start();
if(!isset($_SESSION["connected"])) {
  header("location: login.php");
}
$target_dir = "../assets/Img_Article/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Le fichier existe déjà";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Le fichier est trop large";
  $uploadOk = 0;
}

if($imageFileType != "jpg") {
  echo "Seul le fichier jpg est autorisé";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Le fichier n'a pas pu être sauvegardé.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Le fichier ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a été enregistré.";
    sleep(5);
    header("location: panel.php");
  } else {
    echo "Erreur lors de l'upload de l'image.";
    sleep(5);
    header("location: panel.php");
  }
}
?>