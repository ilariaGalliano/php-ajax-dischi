<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php ajax dischi</title>
    <!-- Css -->
   <link rel="stylesheet" href="./dist/css/main.css">
  </head>
  <body>

    <?php // include file database php
      include __DIR__ . '/partials/database.php'
    ?>

      <!-- Header -->
      <header>
        <div class="container">
          <div class="header-app">
            <img src="./img/logo.png" alt="spotify">
          </div>
        </div>
      </header>

      <!-- Main -->
      <main class="main-app">

        <!-- Music options -->
        <div class="options"> Filter by gendre:
          <select v-model="actualMusic" @change="chooseTypeMusic">
            <option value="all">All</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="jazz">Jazz</option>
            <option value="metal">Metal</option>
          </select>
        </div>

        <!-- Album section -->
        <section class="album-section">
         <div class="container">

          <ul class="list">
          <!-- Php -->
          <?php  foreach ($database as $data) { ?>
                   <li class="list-album">
                    <img src="<?php echo $data['poster']; ?>">
                    <h3 class="title"> <?php echo $data['title']; ?> </h3>
                    <small class="author"> <?php echo $data['author']; ?> </small>
                    <h3 class="year"> <?php echo $data['year']; ?> </h3>
                    <small class="genre"> <?php echo $data['genre']; ?> </small>
    <?php        }?>
                   </li>
          </ul>
         </div>

        </section>
      </main>

  </body>
</html>
