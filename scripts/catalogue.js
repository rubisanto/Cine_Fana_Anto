// Selecteur
let searchbar = document.querySelector("#searchbar");
let btnsearch = document.querySelector("#btnsearchbar");
let main = document.querySelector("main");
let remove = false;

// creation ligne
let rowdiv = document.createElement("div");
rowdiv.classList.add(
  "row",
  "row-cols-1",
  "row-cols-md-2",
  "row-cols-lg-2",
  "row-cols-xl-2",
  "mt-5"
);
main.appendChild(rowdiv);

// Evenement au click sur la page catalogue
btnsearch.addEventListener("click", (e) => {
  e.preventDefault();
  fetch("https://www.omdbapi.com/?apikey=cdaca34c&s=" + searchbar.value).then(
    (res) => {
      if (res.ok) {
        res.json().then((data) => {
          data.Search.forEach((element) => {
            // Creation des elements
            let coldiv = document.createElement("div");
            let card = document.createElement("div");
            let cardimg = document.createElement("img");
            let cardbody = document.createElement("div");
            let cardtitle = document.createElement("h5");
            let cardtext = document.createElement("p");
            let cardbtn = document.createElement("a");
            // Ajout des class aux elements
            coldiv.setAttribute("name", "divmovie");
            coldiv.classList.add("col", "mb-4");
            card.classList.add("card");
            cardimg.classList.add("card-img-top");
            cardbody.classList.add("card-body");
            cardtitle.classList.add("card-title");
            cardtext.classList.add("card-text");
            cardbtn.classList.add("btn", "btn-warning");
            // Remplissage des elements
            cardimg.src = element.Poster;
            cardtitle.textContent = element.Title;
            cardtext.textContent = element.Year;
            cardbtn.textContent = "Plus d'info";
            cardbtn.href = "?movie=" + element.imdbID;
            // Affiche les elements
            rowdiv.appendChild(coldiv);
            coldiv.appendChild(card);
            card.appendChild(cardimg);
            card.appendChild(cardbody);
            cardbody.appendChild(cardtitle);
            cardbody.appendChild(cardtext);
            cardbody.appendChild(cardbtn);
          });
        });
      } else {
        console.log("ERROR");
      }
      // Si des films sont deja affiches, les supprime pour afficher les nouveaux
      if (remove == true) {
        removediv();
      } else {
        remove = true;
      }
      // Change dynamiquement le footer
      let footer = document.querySelector("footer");
      footer.style.position = "relative";
    }
  );
});

// Function qui supprime les films deja affiches
function removediv() {
  let div = document.getElementsByName("divmovie");
  while (div.length > 0) {
    div[0].parentNode.removeChild(div[0]);
  }
}
