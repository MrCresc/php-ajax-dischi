<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <?php include 'database.php'; ?>

    <header>
      <nav>
        <div class="wrapperNav">
          <img id="logo" src="img/logo.png" alt="">
        </div>
      </nav>
    </header>

    <main>
      <div class="wrapperSongs">
        <?php foreach ($database as $song) {?>
        <div class="song">
          <img src="<?php echo $song['poster']; ?>" alt="">
          <h2 class="title"><?php echo $song['title']; ?></h2>
          <h3 class="author"><?php echo $song['author']; ?></h3>
          <h3 class="year"><?php echo $song['year']; ?></h3>
        </div>
        <?php } ?>
      </div>
    </main>
  </body>
</html>
