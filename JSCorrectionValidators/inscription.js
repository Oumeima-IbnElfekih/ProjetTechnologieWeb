//Question 1
function validerDateOfBirth() {
    var dateNaissanceInput = document.getElementById("date_naissance");
    var dateNaissanceValeur = new Date(dateNaissanceInput.value);
    var aujourdhui = new Date();
  
    if (dateNaissanceValeur >= aujourdhui) {
      alert("La date de naissance doit être antérieure à la date d'aujourd'hui.");
    } else {
      alert("La date de naissance est valide.");
    }
}

  
  //Question 2
  const form = document.getElementById("form");
  
  const nomInput = document.getElementById("nom");
  const prenomInput = document.getElementById("prenom");
  const telephoneInput = document.getElementById("telephone");
  const dateOfBirthInput = document.getElementById("date_naissance");
  const password = document.getElementById("password");
  
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    validerNom();
    validerPrenom();
    validerTelephone();
    validerDateOfBirth();
    validerPassword()
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
    const erreurPrenom = document.getElementById("errorPrenom");
  
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
  
  function validerDateOfBirth() {
    
    var dateNaissanceValeur = new Date(dateOfBirthInput.value);
    console.log(dateNaissanceValeur);
    var aujourdhui = new Date();
    const erreurDOB = document.getElementById("errorDate_naissance");
  
    if (dateNaissanceValeur >= aujourdhui || dateNaissanceValeur =="Invalid Date") {
      erreurDOB.innerHTML = "La date de naissance doit être antérieure à la date d'aujourd'hui."
    
    } else {
      erreurDOB.innerHTML = "<span style='color:green'> Correct </span>";
    }
}
function validerPassword() {
  const passwordValeur = password.value;
    const passwordRegex =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/ ;
    const erreurPassword = document.getElementById("errorDate_password");
  
    if (!passwordValeur.match(passwordRegex)) {
      erreurPassword.innerHTML =
        "Veuillez entrer un mot de passe valide (Le mot de passe doit contenir au moins 8 caractères, incluant au moins un chiffre, une lettre minuscule et une lettre majuscule)";
    } else {
      erreurPassword.innerHTML = "<span style='color:green'> Correct </span>";
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
  