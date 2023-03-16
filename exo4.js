


const randomNumberContainer = document.getElementById('random-number-container');

function getRandomNumber() {
  fetch('exo4.php')
    .then(response => response.json())
    .then(data => {
      randomNumberContainer.textContent = data.random_number;
    })
    .catch(error => console.error(error));
}

// Appeler la fonction getRandomNumber toutes les 2 secondes
setInterval(getRandomNumber, 2000);