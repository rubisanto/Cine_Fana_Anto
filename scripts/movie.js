// Recupere l'url
let url = new URL(window.location.href);

// Cherche le parametre movie dans l'url
let id = url.searchParams.get("movie");

// Selecteurs
let img = document.querySelector("img");
let title = document.querySelector("#title");
let years = document.querySelector("#years");
let rated = document.querySelector("#rated");
let released = document.querySelector("#released");
let runtime = document.querySelector("#runtime");
let genre = document.querySelector("#genre");
let director = document.querySelector("#director");
let writer = document.querySelector("#writer");
let actors = document.querySelector("#actors");
let plot = document.querySelector("#plot");
let language = document.querySelector("#language");
let country = document.querySelector("#country");
let award = document.querySelector("#award");
let type = document.querySelector("#type");
let dvd = document.querySelector("#dvd");
let boxoffice = document.querySelector("#boxoffice");
let imdb = document.querySelector("#imdb");
let rt = document.querySelector("#rt");
let mc = document.querySelector("#mc");
let ms = document.querySelector("#ms");

// Requete qui affiche les donnees du film dans le tableau grace a l'id de l'url
fetch("https://www.omdbapi.com/?apikey=cdaca34c&i=" + id).then((res) => {
  if (res.ok) {
    res.json().then((data) => {
      img.src = data.Poster;
      title.textContent = data.Title;
      years.textContent = data.Year;
      rated.textContent = data.Rated;
      released.textContent = data.Released;
      runtime.textContent = data.Runtime;
      genre.textContent = data.Genre;
      director.textContent = data.Director;
      writer.textContent = data.Writer;
      actors.textContent = data.Actors;
      plot.textContent = data.Plot;
      language.textContent = data.Language;
      country.textContent = data.Country;
      award.textContent = data.Awards;
      type.textContent = data.Type;
      dvd.textContent = data.DVD;
      boxoffice.textContent = data.BoxOffice;
      imdb.textContent = data.Ratings[0].Value;
      rt.textContent = data.Ratings[1].Value;
      mc.textContent = data.Ratings[2].Value;
      ms.textContent = data.Metascore;
    });
  }
});
