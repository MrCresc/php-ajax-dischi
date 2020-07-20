<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <header>
      <nav>
        <div class="wrapperNav">
          <img id="logo" src="img/logo.png" alt="">
          <select id="artists" class="" name="">
            <option value="">All</option>
          </select>
        </div>
      </nav>
    </header>

    <main>
      <div class="wrapperSongs">

      </div>
    </main>

    <script id="template" type="text/x-handlebars-template">
      <div class="song">
        <img src="{{{poster}}}" alt="">
        <h2 class="title">{{{title}}}</h2>
        <h3 class="author">{{{author}}}</h3>
        <h3 class="year">{{{year}}}</h3>
      </div>
    </script>

    <script id="select-template" type="text/x-handlebars-template">
      <option value="{{ author }}">{{ author }}</option>
    </script>

    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
