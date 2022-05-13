<?php
// Changement dynamique du header
$title = "Movie";
$css = "movie.css";
$js = "movie.js";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<div class="text-center">
  <img src="" alt="" class="mt-5">
</div>
<!-- <img src="" alt=""> -->
<table class="table table-bordered table-hover mt-5 text-center" id="infotable">
  <thead class="thead-dark">
    <th colspan="2" class="text-center">Informations</th>
  </thead>
  <tr>
    <th scope="row">Titre</th>
    <td id="title">N/A</td>
  </tr>
  <tr>
    <th scope="row">Years</th>
    <td id="years">N/A</td>
  </tr>
  <tr>
    <th scope="row">Rated</th>
    <td id="rated">N/A</td>
  </tr>
  <tr>
    <th scope="row">Released</th>
    <td id="released">N/A</td>
  </tr>
  <tr>
    <th scope="row">Runtime</th>
    <td id="runtime">N/A</td>
  </tr>
  <tr>
    <th scope="row">Genre</th>
    <td id="genre">N/A</td>
  </tr>
  <tr>
    <th scope="row">Director</th>
    <td id="director">N/A</td>
  </tr>
  <tr>
    <th scope="row">Writer</th>
    <td id="writer">N/A</td>
  </tr>
  <tr>
    <th scope="row">Actors</th>
    <td id="actors">N/A</td>
  </tr>
  <tr>
    <th scope="row">Plot</th>
    <td id="plot">N/A</td>
  </tr>
  <tr>
    <th scope="row">Language</th>
    <td id="language">N/A</td>
  </tr>
  <tr>
    <th scope="row">Country</th>
    <td id="country">N/A</td>
  </tr>
  <tr>
    <th scope="row">Awards</th>
    <td id="award">N/A</td>
  </tr>
  <tr>
    <th scope="row">Type</th>
    <td id="type">N/A</td>
  </tr>
  <tr>
    <th scope="row">DVD</th>
    <td id="dvd">N/A</td>
  </tr>
  <tr>
    <th scope="row">BoxOffice</th>
    <td id="boxoffice">N/A</td>
  </tr>
</table>

<table class="table table-bordered table-hover mt-5 table-sm">
  <thead class="thead-dark">
    <th colspan="2" class="text-center">Ratings</tr>
  </thead>
    <tr>
      <th>Internet Movie Database</th>
      <td id="imdb" class="text-center">N/A</td>
    </tr>
    <tr>
      <th>Rotten Tomatoes</th>
      <td id="rt" class="text-center">N/A</td>
    </tr>
    <tr>
      <th>Metacritic</th>
      <td id="mc" class="text-center">N/A</td>
    </tr>
    <tr>
      <th>Metascore</th>
      <td id="ms" class="text-center">N/A</td>
    </tr>
</table>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>