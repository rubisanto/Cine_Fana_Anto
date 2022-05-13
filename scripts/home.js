// Selecteurs
let linkimg1 = document.querySelector("#linkimg1");
let linkimg2 = document.querySelector("#linkimg2");
let linkimg3 = document.querySelector("#linkimg3");
let img1 = document.querySelector("#img1");
let img2 = document.querySelector("#img2");
let img3 = document.querySelector("#img3");
let firsttitle = document.querySelector("#firsttitle");
let secondtitle = document.querySelector("#secondtitle");
let thirdtitle = document.querySelector("#thirdtitle");
let firsttext = document.querySelector("#firsttext");
let secondtext = document.querySelector("#secondtext");
let thirdtext = document.querySelector("#thirdtext");

// Requete pour afficher l'affiche de Batman
fetch("https://www.omdbapi.com/?apikey=cdaca34c&t=batman&y=2022").then(
  (res) => {
    if (res.ok) {
      res.json().then((data) => {
        linkimg1.href = data.Poster;
        img1.src = data.Poster;
        firsttitle.textContent = data.Title;
        firsttext.textContent = data.Year;
      });
    }
  }
);

// Requete pour afficher l'affiche de ... bon dieu
fetch(
  "https://www.omdbapi.com/?apikey=cdaca34c&t=Qu'est-ce+qu'on+a+tous+fait+au+bon+dieu"
).then((res) => {
  if (res.ok) {
    res.json().then((data) => {
      linkimg2.href = data.Poster;
      img2.src = data.Poster;
      secondtitle.textContent = data.Title;
      secondtext.textContent = data.Year;
    });
  }
});

// Requete pour afficher l'affiche des Animaux fantastiques
fetch(
  "https://www.omdbapi.com/?apikey=cdaca34c&t=Fantastic+Beasts&y=2022"
).then((res) => {
  if (res.ok) {
    res.json().then((data) => {
      linkimg3.href = data.Poster;
      img3.src = data.Poster;
      thirdtitle.textContent = data.Title;
      thirdtext.textContent = data.Year;
    });
  }
});
