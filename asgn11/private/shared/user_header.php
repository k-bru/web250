<?php
  if(!isset($page_title)) { $page_title = 'Bird Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SA Birds - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
  </head>

  <body>
    <header>
      <h1>SA Birds Admin Area</h1>
    </header>

    <?php 
        if($session->is_logged_in()) {
        echo "<a href='logout.php'>Logout</a>";
        } else {
          echo "<a href='login.php'>Login</a>";
        }

        ?>

    <?php echo display_session_message(); ?>
