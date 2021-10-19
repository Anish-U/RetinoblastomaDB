<?php
  require('./database.inc.php');
  $page_title = "";
  $uri = $_SERVER['REQUEST_URI'];

  $home = false;
  $gene = false;
  $about = false;
  $sequence = false;
  $search = false;
  
  if(strpos($uri,"index.php") != false){
    $home = true;
    $page_title = " Home";
  }
  
  if(strpos($uri,"gene.php") != false || strpos($uri,"genes.php") != false){
    $page_title = " Gene";
    $gene = true;
  }

  if(strpos($uri,"about.php") != false){
    $page_title = " About";
    $about = true;
  }

  if(strpos($uri,"search.php") != false){
    $page_title = " Search Gene";
    $search = true;
  }

  if(strpos($uri,"sequence.php") != false || strpos($uri,"sequences.php") != false){
    $page_title = " Mutations";
    $sequence = true;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RetinoblastomaDB | <?php echo $page_title ?></title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  </head>
  <body>
    <div class="wrapper">
      <div class="nav" data-aos="fade-down" data-aos-duration="1500">
        <div class="logo">
          <h4>RetinoblastomaDB.</h4>
        </div>
        <div class="links">
          <a href="./index.php" <?php if($home) echo 'class="mainlink"' ?>>Home</a>
          <a href="./about.php" <?php if($about) echo 'class="mainlink"' ?>>About</a>
          <a href="./genes.php" <?php if($gene) echo 'class="mainlink"' ?>>Genes</a>
          <a href="./sequences.php"<?php if($sequence) echo 'class="mainlink"' ?>>Mutations</a>
          <a href="./search.php"<?php if($search) echo 'class="mainlink"' ?>>Search</a>
        </div>
      </div>