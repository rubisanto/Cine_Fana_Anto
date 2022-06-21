// Sélecteurs
let traducteur = document.querySelector("#mode");
let span = document.querySelector("#span");
let about = document.querySelector("#about");
let bonjour = document.querySelector("#bonjour");
let missionTitre = document.querySelector("#mission-titre");
let missionContenu = document.querySelector("#mission-contenu");
let historiqueTitre = document.querySelector("#historique-titre");
let historiqueContenu = document.querySelector("#historique-contenu");
let valeursTitre = document.querySelector("#valeurs-titre");
let valeursContenu = document.querySelector("#valeurs-contenu");

// AddeventListener
traducteur.addEventListener("click", (e) => {
  e.preventDefault();
  if (span.textContent == "Anglais") {
    translateEnglish();
  } else {
    translateFrench();
  }
});

function translateEnglish() {
  span.textContent = "Francais";
  about.textContent = "About Ciné Fana";
  bonjour.textContent = "Hello and welcome on Ciné Fana";
  missionTitre.textContent = "Our Mission";
  missionContenu.textContent =
    "To provide to moviefans a quick and useful source of informations about cinema, to facilitate the access to theaters, it's the mission of CineFana. CineFana is available to you 24/24 and 7/7 by phone at 0.892.842.692, on the web site at http://www.cinefana.fr or your smartphone and tablet. For more informations or questions, please visit the contact page at http://www.cinefana.fr/contact";
  historiqueTitre.textContent = "Historical Context";
  historiqueContenu.textContent =
    "Starting from the basis of a simple project designed by 3 students in training  web and mobile web developer, CineFana has become a project followed by many film lovers from the French-speaking world.CinéFana is an opportunity for you to learn more about the latestreleased films, to be able to rent your favorite films or to discuss masterpieces on our forum";
  valeursTitre.textContent = "Ours Values";
  valeursContenu.textContent =
    "Having started from the base of a team of 3 people, the Ciné Fana site gives itself the main mission of providing information and thrills to all cinema fans.";
}

function translateFrench() {
  span.textContent = "Anglais";
  about.textContent = "A PROPOS DE CINEFANA";
  bonjour.textContent = "Bonjour et bienvenu sur CineFana !";
  missionTitre.textContent = "Notre Mission";
  missionContenu.textContent =
    "Offrir aux cinéphiles une source pratique et rapide d'informations sur lecinéma, tout en facilitant l'accès aux salles, c'est la mission deCinéFana. CinéFana peut être joint 24h/24 en quelques secondes partéléphone au 0.892.842.692 , sur Internet (www.cinefana.fr) ou votre smartphone et votre tablette. Pour toutes autres questions ou remarquesconsultez la rubrique contact</a>. <br />* 0,34euros la minute";
  historiqueTitre.textContent = "Historique";
  historiqueContenu.textContent =
    "Partant à la base d'un simple projet concu par 3 étudiants en formation dedéveloppeur web et web mobile, CineFana est devenu un projet suivi par de nombreux cinéphiles du monde francophone. CinéFana c'est l'occasion pour vous d'en apprendre plus sur les derniersfilms sortis, de pouvoir louer vos films préférés ou encore de discuter dechefs d'oeuvres sur notre forum";
  valeursTitre.textContent = "Nos valeurs";
  valeursContenu.textContent =
    "Having started from the base of a team of 3 people, the Ciné Fana site gives itself the main mission of providing information and thrills to all cinema fans.";
}

// tests
console.log(traducteur.textContent);
