

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $page->title ?> | My Language </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/bootsrap/bootstrap.min.css?<?php echo time(); ?>" />

    <style>
      .navbar{
        position: fixed;
        width: 100%;
      }
      a {
        text-decoration: none;
      }
      body {
        background-image: url('../images/bg-universal.png');
        background-position: center;
        background-size: cover;
      }
    </style>