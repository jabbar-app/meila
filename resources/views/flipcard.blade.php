<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Flip Card Game</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
      margin: 0;
    }

    .game-container,
    .leaderboard {
      display: grid;
      grid-template-columns: repeat(4, 150px);
      grid-gap: 10px;
    }

    .card {
      width: 150px;
      height: 150px;
      perspective: 1000px;
      cursor: pointer;
    }

    .card-inner {
      width: 100%;
      height: 100%;
      position: relative;
      transition: transform 0.5s;
      transform-style: preserve-3d;
    }

    .card.flipped .card-inner {
      transform: rotateY(180deg);
    }

    .card-front,
    .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2rem;
      color: white;
    }

    .card-front {
      background-color: #333;
    }

    .card-back {
      background-color: #007bff;
      transform: rotateY(180deg);
    }

    #leaderboard {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div id="game-container" class="game-container">
      <!-- Game Cards -->
      <div class="card" data-name="1">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">1</div>
        </div>
      </div>
      <div class="card" data-name="1">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">1</div>
        </div>
      </div>
      {{-- <div class="card" data-name="2">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">2</div>
        </div>
      </div>
      <div class="card" data-name="2">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">2</div>
        </div>
      </div>
      <div class="card" data-name="3">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">3</div>
        </div>
      </div>
      <div class="card" data-name="3">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">3</div>
        </div>
      </div>
      <div class="card" data-name="4">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">4</div>
        </div>
      </div>
      <div class="card" data-name="4">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">4</div>
        </div>
      </div>
      <div class="card" data-name="5">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">5</div>
        </div>
      </div>
      <div class="card" data-name="5">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">5</div>
        </div>
      </div>
      <div class="card" data-name="6">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">6</div>
        </div>
      </div>
      <div class="card" data-name="6">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">6</div>
        </div>
      </div>
      <div class="card" data-name="7">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">7</div>
        </div>
      </div>
      <div class="card" data-name="7">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">7</div>
        </div>
      </div>
      <div class="card" data-name="8">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">8</div>
        </div>
      </div>
      <div class="card" data-name="8">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">8</div>
        </div>
      </div>
      <div class="card" data-name="9">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">9</div>
        </div>
      </div>
      <div class="card" data-name="9">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">9</div>
        </div>
      </div>
      <div class="card" data-name="10">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">10</div>
        </div>
      </div>
      <div class="card" data-name="10">
        <div class="card-inner">
          <div class="card-front">?</div>
          <div class="card-back">10</div>
        </div>
      </div> --}}
    </div>

    <div id="leaderboard" class="leaderboard">
      <h3>Leaderboard</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Rank</th>
            <th>Score</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody id="leaderboard-body">
          <!-- Leaderboard entries will be injected here -->
        </tbody>
      </table>
      <button id="back-to-game" class="btn btn-primary">Back to Game</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let matchedPairs = 0;
    const totalPairs = 1;
    let attempts = 0;
    let startTime;
    let hasFlippedCard = false;
    let firstCard, secondCard;
    let lockBoard = false;
    let playerName = '';
    const cards = document.querySelectorAll('.card');

    function startGame() {
      startTime = new Date().getTime();
      attempts = 0;
      matchedPairs = 0; // Reset matched pairs at the start of a new game
      shuffleCards(); // Shuffle cards at the start of the game
    }

    function flipCard() {
      if (lockBoard) return;
      if (this === firstCard) return;

      this.classList.add('flipped');

      if (!hasFlippedCard) {
        hasFlippedCard = true;
        firstCard = this;
        return;
      }

      secondCard = this;
      attempts++;
      checkForMatch();
    }

    function checkForMatch() {
      const isMatch = firstCard.dataset.name === secondCard.dataset.name;

      if (isMatch) {
        matchedPairs++;
        disableCards();
      } else {
        unflipCards();
      }

      if (matchedPairs === totalPairs) {
        console.log('All cards matched, submitting attempts...');
        promptForName(); // Prompt for player name before submitting the score
      } else {
        console.log('matchedPairs: ' + matchedPairs + ' totalPairs: ' + totalPairs);
      }
    }

    function disableCards() {
      firstCard.removeEventListener('click', flipCard);
      secondCard.removeEventListener('click', flipCard);
      resetBoard();
    }

    function unflipCards() {
      lockBoard = true;

      setTimeout(() => {
        firstCard.classList.remove('flipped');
        secondCard.classList.remove('flipped');
        resetBoard();
      }, 1500);
    }

    function resetBoard() {
      [hasFlippedCard, lockBoard] = [false, false];
      [firstCard, secondCard] = [null, null];
    }

    function calculateScore() {
      // In this case, score is directly equivalent to the number of attempts
      return attempts;
    }

    function submitScore() {
      const score = calculateScore(); // Score is now the number of attempts

      fetch('/submit-score', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            score,
            player_name: playerName
          })
        })
        .then(response => response.json())
        .then(data => {
          Swal.fire({
            title: 'Congratulations!',
            text: `You solved the game in ${score} attempts!`,
            icon: 'success',
            confirmButtonText: 'View Leaderboard'
          }).then(() => {
            document.getElementById('game-container').style.display = 'none';
            document.getElementById('leaderboard').style.display = 'block';
            document.getElementById('leaderboard-body').innerHTML = data.leaderboard;
            document.getElementById('back-to-game').style.display = 'block';
          });
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    function promptForName() {
      Swal.fire({
        title: 'Congratulations!',
        text: `You solved the game in ${calculateScore()} attempts! Please enter your name:`,
        input: 'text',
        inputLabel: 'Name',
        inputPlaceholder: 'Enter your name',
        showCancelButton: true,
        confirmButtonText: 'Submit',
        cancelButtonText: 'Cancel',
        inputValidator: (value) => {
          if (!value) {
            return 'You need to enter a name!';
          }
        }
      }).then((result) => {
        if (result.isConfirmed) {
          playerName = result.value;
          submitScore(); // Submit the score with the entered player name
        }
      });
    }

    function shuffleCards() {
      const cardArray = Array.from(cards);
      cardArray.sort(() => Math.random() - 0.5);

      cardArray.forEach(card => {
        document.querySelector('.game-container').appendChild(card);
        card.classList.remove('flipped'); // Ensure all cards are face down
        card.addEventListener('click', flipCard); // Reattach event listener after shuffle
      });
    }

    document.getElementById('back-to-game').addEventListener('click', function() {
      document.getElementById('leaderboard').style.display = 'none';
      document.getElementById('game-container').style.display = 'grid';
      document.getElementById('back-to-game').style.display = 'none';
      startGame();
    });

    window.onload = startGame;
  </script>



</body>

</html>
