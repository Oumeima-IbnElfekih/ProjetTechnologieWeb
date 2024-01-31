//Question 1
function validerDateMatch() {
    var dateMatchInput = document.getElementById("date_match");
    var dateMatchValeur = dateMatchInput.value;
    var minDate = "2023-09-01";
    var maxDate = "2023-12-30";
  
    if (dateMatchValeur < minDate || dateMatchValeur > maxDate) {
      alert(
        "La date du match doit être comprise entre le 1er septembre 2023 et le 30 décembre 2023."
      );
    } else {
      alert("La date est validé");
    }
  }
  
  //Question 2
  const form = document.getElementById("form");
  
  const nomInput = document.getElementById("nom");
  const prenomInput = document.getElementById("prenom");
  const telephoneInput = document.getElementById("telephone");
  const dateMatchInput = document.getElementById("date_match");
  
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    validerNom();
    validerPrenom();
    validerTelephone();
    validerDateMatch();
  });
  
  function validerNom() {
    const nomValeur = nomInput.value;
    const nomRegex = /^[A-Za-z]+$/;
    const erreurNom = document.getElementById("erreurNom");
  
    if (!nomValeur.match(nomRegex)) {
      erreurNom.innerHTML = "Veuillez entrer un nom valide (lettres uniquement)";
    } else {
      erreurNom.innerHTML = "<span style='color:green'> Correct </span>";
    }
  }
  
  function validerPrenom() {
    const prenomValeur = prenomInput.value;
    const prenomRegex = /^[A-Za-z]+$/;
    const erreurPrenom = document.getElementById("erreurPrenom");
  
    if (!prenomValeur.match(prenomRegex)) {
      erreurPrenom.innerHTML =
        "Veuillez entrer un prénom valide (lettres uniquement)";
    } else {
      erreurPrenom.innerHTML = "<span style='color:green'> Correct </span>";
    }
  }
  
  function validerTelephone() {
    const telephoneValeur = telephoneInput.value;
    const telephoneRegex = /^[0-9]{8}$/;
    const erreurTelephone = document.getElementById("erreurTelephone");
  
    if (!telephoneValeur.match(telephoneRegex)) {
      erreurTelephone.innerHTML =
        "Veuillez entrer un numéro de téléphone valide (8 chiffres)";
    } else {
      erreurTelephone.innerHTML = "<span style='color:green'> Correct </span>";
    }
  }
  
  function validerDateMatch() {
    const dateMatchValeur = dateMatchInput.value;
    const minDate = "2023-09-01";
    const maxDate = "2023-12-30";
    const erreurDateMatch = document.getElementById("erreurDateMatch");
  
    if (dateMatchValeur < minDate || dateMatchValeur > maxDate) {
      erreurDateMatch.innerHTML =
        "La date du match doit être comprise entre le 1er septembre 2023 et le 30 décembre 2023.";
    } else {
      erreurDateMatch.innerHTML = "<span style='color:green'> Correct </span>";
    }
  }
  
  //Question
  
  const emailInput = document.getElementById("email");
  const erreurEmail = document.getElementById("erreurEmail");
  
  emailInput.addEventListener("keyup", function () {
    validerEmail();
  });
  
  function validerEmail() {
    const emailValeur = emailInput.value.trim();
    const emailRegex = /^\S+@esprit.tn+$/;
  
    if (!emailValeur.match(emailRegex)) {
      erreurEmail.innerHTML = "Veuillez entrer une adresse email valide";
    } else {
      erreurEmail.innerHTML = "<span style='color:green'> Correct </span>";
    }
  }
  