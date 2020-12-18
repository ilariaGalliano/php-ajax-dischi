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
   <div id="app">
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
        <div class="options"> Filter by artist:
          <select value="">
            <option value="all">Bon Jovi</option>
            <option value="pop">Queen</option>
            <option value="rock">Sting</option>
            <option value="jazz">Steve Gadd Band</option>
            <option value="metal">Metallica</option>
            <option value="metal">Eric Clapton</option>
          </select>
        </div>

        <!-- Album section -->
        <section class="album-section">
         <div class="container">

          <ul class="list">
            <!-- Vue -->
            <li v-for="artist in artists" class="list-album">
              <img :src="artist.poster" :alt="artist.title">
                <h3 class="title"> {{artist.title}} </h3>
                <small class="author"> {{artist.author}} </small>
                <h3 class="year"> {{artist.year}} </h3>
                <small class="genre"> {{artist.genre}} </small>
            </li>

          </ul>
         </div>

        </section>
      </main>
   </div>

    <!-- Js -->
    <script src="./dist/js/main.js"></script>

  </body>
</html>
