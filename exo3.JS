const getRandomNumberButton = document.getElementById('get-random-number');
const randomNumberContainer = document.getElementById('random-number-container');

getRandomNumberButton.addEventListener('click', () => {
  fetch('exo3.php')
    .then(response => response.json())
    .then(data => {
      randomNumberContainer.textContent = data.random_number;
    })
    .catch(error => console.error(error));
});