function getRandomNumber() {
    // Envoyer une requête à l'API
    fetch('api.php')
      .then(response => response.json())
      .then(data => {
        // Récupérer le nombre aléatoire à partir des données JSON
        const randomNumber = data.randomNumber;
  
        // Afficher le nombre aléatoire dans la balise DIV
        const randomNumberElement = document.getElementById('randomNumber');
        randomNumberElement.innerHTML = 'Le nombre aléatoire est : ' + randomNumber;
      });
  }

  getRandomNumber();