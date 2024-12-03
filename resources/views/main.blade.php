<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="color-scheme" content="light only">
  <meta name="format-detection" content="telephone=no">
  <meta name="google" content="notranslate">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Meila & Jabbar - Wedding Invitation</title>
  <meta name="title" content="Meila & Jabbar - Wedding Invitation">
  <meta name="description" content="Tiada kesan tanpa kehadiranmu~">
  <meta itemprop="image" content="{{ asset('assets/img/photos/meila-jabbar.webp') }}">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://meila.jabbar.id/">
  <meta property="og:title" content="Meila & Jabbar - Wedding Invitation">
  <meta property="og:description" content="Tiada kesan tanpa kehadiranmu~">
  <meta property="og:image" content="{{ asset('assets/img/photos/meila-jabbar.webp') }}">

  <link rel="icon" href="{{ asset('assets/img/bg/favicon.png') }}" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

  <!-- css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/themesv2.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-style.css') }}">
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Function to get URL parameter by name
      // Function to get query parameter by name
      function getParameterByName(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
      }

      // Get the invite parameter from the URL
      const inviteName = getParameterByName('invite');

      // If the invite parameter exists, update the content of the guestNameSlot
      if (inviteName) {
        const guestNameSlot = document.getElementById('guestNameSlot');
        const inputNameField = document.getElementById('inputname');

        // Decode the inviteName and ensure it's without the prefix
        const nameOnly = decodeURIComponent(inviteName).replace(/^(Bapak|Ibu|Saudara|Saudari|Kak|Bang|Teman-teman)\s*/,
          ''); // Remove prefix if present

        guestNameSlot.textContent = nameOnly;
        inputNameField.value = nameOnly;
      }
    });
  </script>
  <style>
    .game-container,
    .leaderboard {
      display: grid;
      grid-template-columns: repeat(4, 60px);
      grid-gap: 10px;
    }

    .card {
      width: 60px;
      height: 60px;
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
      background-color: #bc6872;
    }

    .card-back {
      background-color: #bc6872;
      transform: rotateY(180deg);
    }

    .image-container {
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #leaderboard {
      display: none;
    }

    .table-container {
      max-height: 300px;
      overflow-y: auto;
    }
  </style>
</head>

<body>
  <main id="app">
    <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
    <div id="loader" class="loader-wrapper" style="display: none;">
      <span class="loader">
        <span class="loader-inner"></span>
      </span>
    </div>
    <audio id="music" loop="loop" autoplay="autoplay">
      <source src="{{ asset('assets/audio.mp3') }}">
    </audio>

    @yield('content')

    @include('components.lightbox')
    @include('modal.qr')
    @include('modal.photo')
    @include('modal.gallery')
    @include('modal.rsvp')
    @include('modal.pov')
  </main>

  <!-- not support modal -->
  <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: .8rem;">
        <div class="modal-body text-center justify-content-center align-items-center">
          <h2>Pemberitahuan</h2>
          <p>Browser yang kamu gunakan mungkin kurang kompatibel. Beberapa fungsi undangan ini mungkin tidak dapat
            berjalan dengan baik. Kami merekomendasikan Chrome.</p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-outline-secondary btn-block rounded-pill"
            onclick="if (!window.__cfRLUnblockHandlers) return false; closeModal(notSupport)">Tetap Akses</button>
        </div>
      </div>
    </div>
  </div>
  <!-- not support modal -->

  <!-- start script -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script> --}}
  <script src="{{ asset('assets/js/themesv2.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    // Function to show modal
    function showModal(modalId) {
      $(modalId).modal('show');
    }

    // Function to close modal
    function closeModal(modalId) {
      $(modalId).modal('hide');
    }

    // Show QR Modal when the QR button is clicked
    document.getElementById('btnQrModal').addEventListener('click', function() {
      showModal('#qrModal');
    });

    // Close the QR modal when the close button is clicked
    document.querySelector('.btn-close').addEventListener('click', function() {
      closeModal('#qrModal');
    });

    // When the 'Open Invitation' button is clicked, show the floating action buttons
    document.querySelector('.btn-open-invitation').addEventListener('click', function() {
      var btnOpenInvitation = document.getElementById('btnOpenInvitation');
      var qrButtonGroup = document.getElementById('btn-music-group');
      var btnAutoplay = document.getElementById('btnAutoplay');
      qrButtonGroup.style.display = 'flex'; // Show the floating action buttons
      btnAutoplay.style.display = 'none';
      btnOpenInvitation.style.display = 'none';
    });

    var notSupport = document.getElementById('notSupport');

    function checkBrowser() {
      if (navigator.userAgent.indexOf("UCBrowser") != -1 || navigator.userAgent.indexOf("MiuiBrowser") != -1 || navigator
        .userAgent.indexOf("OppoBrowser") != -1) {
        showModal(notSupport);
        if (loader) {
          loader.style.display = "none";
        }
      }
    }
    checkBrowser()
  </script>
  {{-- <script src="{{ asset('assets/js/beacon.min.js') }}"></script> --}}
  <script>
    $(document).ready(function() {
      $('#commentForm').on('submit', function(e) {
        e.preventDefault();

        let name = $('#inputname').val();
        let attendance = $('#inputattendance').val();
        let comment = $('#inputcomment').val();

        $.ajax({
          url: '{{ route('comments.store') }}', // Make sure this route points to your CommentController@store
          method: 'POST',
          data: {
            _token: '{{ csrf_token() }}',
            name: name,
            attendance: attendance,
            comment: comment
          },
          success: function(response) {
            // Clear the form fields
            $('#inputname').val('');
            $('#inputattendance').val('');
            $('#inputcomment').val('');

            // Append the new comment to the comment list
            $('.comment').append(
              '<div class="comment-item">' +
              '<div class="d-flex">' +
              '<img src="https://ui-avatars.com/api/?size=40&background=random&color=random&name=' +
              response.name + '" alt="' + response.name +
              '" loading="lazy" class="avatar rounded-circle" style="height: 30px; width: 30px;">' +
              '<div class="ml-2 text-left">' +
              '<p class="mb-0 font-weight-bold">' + response.name + ' <span class="badge alert-info">' +
              response.attendance + '</span></p>' +
              '<p class="mb-0">' + response.comment + '</p>' +
              '<small>' + response.created_at + '</small>' +
              '</div>' +
              '</div>' +
              '</div>'
            );
          },
          error: function(xhr) {
            console.log(xhr.responseText); // Handle error response
          }
        });
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let matchedPairs = 0;
    const totalPairs = 10;
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

    function getDeviceIdentifier() {
      let deviceIdentifier = localStorage.getItem('deviceIdentifier');
      if (!deviceIdentifier) {
        deviceIdentifier = 'device-' + Date.now() + Math.random().toString(36).substr(2, 9);
        localStorage.setItem('deviceIdentifier', deviceIdentifier);
      }
      return deviceIdentifier;
    }

    function submitScore() {
      const score = calculateScore(); // Score is now the number of attempts
      const deviceIdentifier = getDeviceIdentifier(); // Score is now the number of attempts

      fetch('/submit-score', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            score,
            player_name: playerName,
            device_identifier: deviceIdentifier,
          })
        })
        .then(response => response.json())
        .then(data => {
          Swal.fire({
            title: 'おめでとう!',
            text: `${playerName} menyelesaikan permainan dalam ${score} percobaan!`,
            icon: 'success',
            confirmButtonText: 'Buka Leaderboard'
          }).then(() => {
            document.getElementById('game-container').style.display = 'none';
            document.getElementById('leaderboard').style.display = 'block';
            document.getElementById('leaderboard-body').innerHTML = data.leaderboard;
            document.getElementById('open-gallery').style.display = 'block';
          });
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    function promptForName() {
      Swal.fire({
        title: 'おめでとう!',
        text: `Selamat, kamu berhasil menyelesaikan permainan dalam ${calculateScore()} percobaan!`,
        input: 'text',
        inputLabel: 'Silakan input nama kamu:',
        inputPlaceholder: 'Nama Lengkap',
        showCancelButton: true,
        confirmButtonText: 'Lanjut',
        cancelButtonText: 'Cancel',
        inputValidator: (value) => {
          if (!value) {
            return 'Kamu harus memasukkan nama!';
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

    function checkDeviceStatus() {
      const deviceIdentifier = getDeviceIdentifier();

      fetch('/check-device', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            device_identifier: deviceIdentifier
          })
        })
        .then(response => response.json())
        .then(data => {
          if (data.exists) {
            // Device identifier found; user has already played
            document.getElementById('game-container').style.display = 'none';
            document.getElementById('leaderboard').style.display = 'block';
            document.getElementById('open-gallery').style.display = 'block';

            // Optionally, you may want to load the leaderboard here
            loadLeaderboard();
          } else {
            // New user; show game cards
            document.getElementById('game-container').style.display = 'grid';
            document.getElementById('leaderboard').style.display = 'none';
            document.getElementById('open-gallery').style.display = 'none';
            startGame();
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    function loadLeaderboard() {
      fetch('/get-leaderboard', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })
        .then(response => response.json())
        .then(data => {
          document.getElementById('leaderboard-body').innerHTML = data.leaderboard;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    window.onload = checkDeviceStatus;
  </script>

</body>

</html>
