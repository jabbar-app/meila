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

  <link rel="icon" href="{{ asset('assets/img/icon/favicon.svg') }}" type="image/x-icon">

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
        const nameOnly = decodeURIComponent(inviteName).replace(
          /^(Bapak|Ibu|Saudara|Saudari|Kak|Bang|Teman-teman)\s*/,
          ''); // Remove prefix if present

        guestNameSlot.textContent = inviteName;
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

    <div id="workspace-container" class="position-fixed h-100 w-100" style="overflow: hidden;">
      <div id="panZoom" class="position-fixed h-100 w-100"
        style="inset: 0px; transform-origin: 50% 50%; transform: scale(0.942029) translate(0px, 0px);">
        <div class="h-100 w-100 d-flex align-items-center justify-content-center">
          <div class="canvas not-open" style="height: 895.938px;">
            <div id="pmvjap" data-guest="Tamu Undangan" data-group="VIP" style="height: 895.938px;">
              <div class="pmvjap_track">
                <ul class="pmvjap_list">
                  <li class="pmvjap_slide pmvjap_cover">
                    <div class="container-mobile cover" style="background-image: url('assets/img/bg/background.jpg')">
                      <div class="frame">
                        <img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <div style="width: 100%;">
                          <div class="text-center editable animate__animated animate__fadeInDown animate__slower mb-1"
                            style="font-size: 14px;">The Wedding of</div>
                          <div
                            class="mb-4 d-flex flex-column justify-content-center animate__animated animate__zoomIn animate__slower image-editable"
                            style="width: 280px; height: 280px; margin: auto; overflow: hidden; background-image: url('assets/img/circle.png'); background-size: 100%;">
                            <div class="text-center">
                              <div class="text-center">
                                <div class="editable color-accent mb-0 font-accent"
                                  style="font-size: 42px; line-height: 1; margin-left: -20px;">Meila</div>
                                <div class="editable font-accent color-accent"
                                  style="margin-left: 120px; transform: rotate(-10deg); display: inline-block;">&
                                </div>
                                <div class="editable color-accent mb-0 font-accent"
                                  style="font-size: 42px; line-height: 1; margin-left: 48px;">Jabbar</div>
                              </div>
                            </div>
                          </div>
                          <div class="text-center mx-auto" style="max-width: 300px;">

                            <div data-datetime="2025-09-30T16:00"
                              class="countdown-wrapper mx-auto mb-2 d-flex flex-column animate__animated animate__fadeInUp animate__slower"
                              style="max-width: 280px; font-size: 14px;">
                              <div class="countdown text-center">
                                <div class="countdown-item day bg-white"
                                  style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                  <div class="number" style="font-size: 1rem;">415</div>
                                  <div class="text editable">Hari</div>
                                </div>
                                <div class="countdown-item hour bg-white"
                                  style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                  <div class="number" style="font-size: 1rem;">16</div>
                                  <div class="text editable">Jam</div>
                                </div>
                                <div class="countdown-item minute bg-white"
                                  style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                  <div class="number" style="font-size: 1rem;">18</div>
                                  <div class="text editable">Menit</div>
                                </div>
                                <div class="countdown-item second bg-white"
                                  style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                  <div class="number" style="font-size: 1rem;">51</div>
                                  <div class="text editable">Detik</div>
                                </div>
                              </div> <button class="btn-countdown btn btn-sm btn-pilled btn-accent mt-2">Atur
                                Countdown</button>
                            </div>
                            <div class="text-center mb-3 p-2 animate__animated animate__zoomIn animate__slower"
                              style="border-radius: 0.5rem;">
                              <div class="editable mb-1 animate__animated animate__fadeInUp animate__slower"
                                style="font-size: 14px;">Kepada Yth.</div>
                              <div id="guestNameSlot"
                                class="editable color-accent h5 font-weight-bold mb-1 animate__animated animate__fadeInUp animate__slower"
                                style="font-size: 18px;">Tamu Undangan</div>
                            </div>
                            <button
                              class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow"
                              id="btnOpenInvitation" style="font-size: 14px;">Open Invitation</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex px-3 justify-content-center align-items-center" style="height: 100%;">
                        <div style="width: 100%;">
                          <div
                            class="image-editable mb-4 mx-auto animate__animated animate__fadeInDown animate__slower"
                            style="width: 75%; overflow: hidden; margin-top: auto; border: 3px solid var(--inv-border); border-radius: 250px 250px 0px 0px; padding: 10px;">
                            <img src="{{ asset('assets/img/photos/mei-jab.jpg') }}"
                              style="width: 100%; height: 100%; object-fit: cover; border-radius: 250px 250px 0px 0px;">
                          </div>
                          <div class="text-center animate__animated animate__fadeInUp animate__slower">
                            <div class="editable quotes mb-3" style="font-size: 14.4px;">
                              وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنفُسِكُمْ أَزْوَاجًا لِّتَسْكُنُوا إِلَيْهَا
                              وَجَعَلَ بَيْنَكُمْ مَوَدَّةً وَرَحْمَةً ۗ إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِّقَوْمٍ
                              يَتَفَكَّرُونَ
                              <br> <br>
                              <em>"... agar kalian cenderung dan merasa tenteram kepada satu sama lain, dan Dia
                                menjadikan di antara
                                kalian rasa kasih dan sayang ..."</em>
                            </div>
                            <div class="editable font-italic" style="font-size: 14.4px;">Q.S. Ar-Rum: 21</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex px-3 flex-column justify-content-center" style="height: 100%;">
                        <div class="editable text-center animate__animated animate__fadeInDown animate__slower"
                          style="font-size: 14.4px;">بارك الله لكما وبارك عليكماوجمع بينكما في خير: <br><br>
                          Semoga berkah dan rahmat Allah senantiasa mengiringi pernikahan Putra-Putri kami:
                          <br><br>
                        </div>
                        <div class="my-3 text-center animate__animated animate__fadeInDown animate__slower">
                          <div class="editable color-accent mb-2 font-latin" style="font-size: 28px; line-height: 1;">
                            Putri <span class="font-accent">Meila</span> Vista</div>
                          <div class="editable text-center animate__animated animate__fadeInDown animate__slower"
                            style="font-size: 14.4px;">
                            Putri kedua dari pasangan<br>Bapak
                            <b>Elzan Albar</b> & Ibu <b>Etty Suryanti Harahap</b>
                          </div>
                        </div>
                        <div class="editable text-center animate__animated animate__fadeInDown animate__slower"
                          style="font-size: 14.4px;">~ & ~</div>
                        <div class="my-3 text-center animate__animated animate__fadeInDown animate__slower">
                          <div class="editable color-accent mb-2 font-latin" style="font-size: 28px; line-height: 1;">
                            <span class="font-accent">Jabbar</span> Ali Panggabean
                          </div>
                          <div class="editable text-center animate__animated animate__fadeInDown animate__slower"
                            style="font-size: 14.4px;">
                            Putra keempat dari
                            pasangan<br>Alm. Bapak <b>Arben Panggabean</b> & Ibu <b>Zakiah Isnani</b>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center align-items-center"
                        style="height: 100%;">
                        <div class="position-relative w-100">
                          <div class="text-center animate__animated animate__fadeInLeft animate__slower"
                            style="position: absolute; bottom: 0px; left: 0px;">
                            <div class="editable color-accent font-latin"
                              style="position: absolute; bottom: -67px; font-size: 44px; margin-left: 0px; transform-origin: 0px 0px; transform: rotate(270deg); white-space: nowrap;">
                              THE BRIDE</div>
                          </div>
                          <div class="image-editable animate__animated animate__fadeInRight animate__slower"
                            style="width: 230px; height: 360px; overflow: hidden; margin-left: auto; position: relative; border-radius: 10rem 10rem 0px 0px;">
                            <img src="{{ asset('assets/img/photos/meila-vertical.webp') }}" alt="Putri Meila Vista"
                              style="width: 100%; height: 100%; object-fit: cover;">
                          </div>
                        </div>
                        <div class="w-100 text-right mr-4">
                          <div class="mt-4 animate__animated animate__fadeInUp animate__slower">
                            <div class="editable color-accent font-latin mb-2"
                              style="font-size: 30px; line-height: 1;">
                              Putri Meila Vista
                            </div>
                            <div class="editable quotes" style="font-size: 14.4px;">
                              Gen-Z. ARMY. Coding Teacher. Cita-cita: Menjadi istri sholeha.
                            </div>
                          </div><a href="https://instagram.com/meilav" target="_blank" rel="noreferrer noopener"
                            class="link btn btn-primary rounded-pill my-3 animate__animated animate__fadeInUp animate__slower">@meilav</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center align-items-center"
                        style="height: 100%;">
                        <div class="position-relative w-100">
                          <div class="image-editable animate__animated animate__fadeInLeft animate__slower"
                            style="width: 230px; height: 360px; overflow: hidden; margin-right: auto; position: relative; border-radius: 10rem 10rem 0px 0px;">
                            <img src="{{ asset('assets/img/photos/jabbar-vertical.webp') }}"
                              alt="Jabbar Ali Panggabean" style="width: 100%; height: 100%; object-fit: cover;">
                          </div>
                          <div class="text-center animate__animated animate__fadeInRight animate__slower"
                            style="position: absolute; bottom: 0px; right: 64px;">
                            <div class="editable color-accent font-latin"
                              style="position: absolute; bottom: -67px; font-size: 44px; margin-right: 0px; transform-origin: 0px 0px; transform: rotate(270deg); white-space: nowrap;">
                              THE GROOM</div>
                          </div>
                        </div>
                        <div class="w-100 text-left">
                          <div class="mt-4 animate__animated animate__fadeInUp animate__slower">
                            <div class="editable color-accent font-latin mb-2"
                              style="font-size: 30px; line-height: 1;">
                              Jabbar Ali Panggabean</div>
                            <div class="editable quotes" style="font-size: 14.4px;">
                              Gen-Y. Gooners. Software Engineer. Cita-cita: Bahagia bersama Meila dunia dan akhirat.
                            </div>
                          </div><a href="https://instagram.com/jabbarp_" target="_blank" rel="noreferrer noopener"
                            class="link btn btn-primary rounded-pill my-3 animate__animated animate__fadeInUp animate__slower">@jabbarp_</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex px-3 justify-content-center align-items-center" style="height: 100%;">
                        <div style="width: 100%;">
                          <div class="animate__animated animate__fadeInDown animate__slower"></div>
                          <div class="text-center mb-3">
                            <div
                              class="editable color-accent h4 mb-2 animate__animated animate__fadeInDown animate__slower font-accent"
                              style="font-size: 30px;">Akad Nikah</div>
                            <div
                              class="my-3 d-flex flex-column align-items-center animate__animated animate__zoomIn animate__slower">
                              <div class="editable" style="font-size: 14.4px;">Ahad</div>
                              <div class="px-3"
                                style="border-top: 1px solid var(--inv-accent); border-bottom: 1px solid var(--inv-accent); padding-top: 10px;">
                                <div class="editable color-accent font-latin"
                                  style="font-size: 40px; line-height: 1;">
                                  15</div>
                              </div>
                              <div class="editable" style="font-size: 14.4px;">September 2024</div>
                            </div>
                            <div class="editable animate__animated animate__fadeInDown animate__slower"
                              style="font-size: 14.4px;">At 09.00 WIB</div>
                          </div>
                          <div class="text-center">
                            <div class="editable font-weight-bold animate__animated animate__fadeInUp animate__slower"
                              style="font-size: 14.4px;">Masjid Agung Sultan Thaf Sinar Basarsyah</div>
                            <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower"
                              style="font-size: 14.4px;">Jl. Negara, Tj. Garbus Satu
                              Lubuk Pakam</div><a href="https://maps.app.goo.gl/CJ8vkUoWG4sm97DK6" target="_blank"
                              rel="noreferrer noopener"
                              class="link btn btn-primary btn-sm rounded-pill animate__animated animate__fadeInUp animate__slower">
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round">
                              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                              <circle cx="12" cy="10" r="3"></circle>
                            </svg> --}}
                              Link Google Maps
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex px-3 justify-content-center align-items-center" style="height: 100%;">
                        <div style="width: 100%;">
                          <div class="animate__animated animate__fadeInDown animate__slower"></div>
                          <div class="text-center mb-3">
                            <div
                              class="editable color-accent h4 mb-2 animate__animated animate__fadeInDown animate__slower font-accent"
                              style="font-size: 30px;">Ngunduh Mantu</div>
                            <div
                              class="my-3 d-flex flex-column align-items-center animate__animated animate__zoomIn animate__slower">
                              <div class="editable" style="font-size: 14.4px;">Sabtu</div>
                              <div class="px-3"
                                style="border-top: 1px solid var(--inv-accent); border-bottom: 1px solid var(--inv-accent); padding-top: 10px;">
                                <div class="editable color-accent font-latin"
                                  style="font-size: 40px; line-height: 1;">
                                  07
                                </div>
                              </div>
                              <div class="editable" style="font-size: 14.4px;">Desember 2024</div>
                            </div>
                            <div class="editable animate__animated animate__fadeInDown animate__slower"
                              style="font-size: 14.4px;">At 09.00 - 18.00 WIB</div>
                          </div>
                          <div class="text-center">
                            <div class="editable font-weight-bold animate__animated animate__fadeInUp animate__slower"
                              style="font-size: 14.4px;">
                              Rumah Ibu Zakiah Isnani
                            </div>
                            <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower"
                              style="font-size: 14.4px;">
                              Jln. Besitang Lk. V Alur Dua, Pangkalan Brandan
                            </div>

                            <a href="https://calendar.google.com/calendar/u/0/r/eventedit?text=Ngunduh+Mantu+Meila+dan+Jabbar&dates=20241207T110000Z/20241207T200000Z&details=Acara+Ngunduh+Mantu+di+Zeky's+International+Building%2C+Jln.+Besitang+Lk.+V+Alur+Dua%2C+Republik+Brandan+Serikat&location=Zeky's+International+Building%2C+Jln.+Besitang+Lk.+V+Alur+Dua%2C+Republik+Brandan+Serikat&sf=true"
                              target="_blank" rel="noreferrer noopener"
                              class="link btn btn-primary btn-sm mb-3 rounded-pill animate__animated animate__fadeInUp animate__slower">
                              Simpan ke Google Calendar
                            </a>
                            <br>
                            <a href="https://maps.app.goo.gl/ibvcbZ1wn13SweiJ9" target="_blank"
                              rel="noreferrer noopener"
                              class="link btn btn-primary btn-sm rounded-pill animate__animated animate__fadeInUp animate__slower">
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round">
                              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                              <circle cx="12" cy="10" r="3"></circle>
                            </svg> --}}
                              Link Google Maps
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="px-4 d-flex justify-content-center align-items-center" style="height: 100%;">
                        <div style="width: 100%;">
                          <div>
                            <div class="animate__animated animate__fadeInDown animate__slow"
                              style="width: 100%; margin: auto auto 20px; border-radius: 10px; overflow: hidden; padding-bottom: 100%; position: relative;">
                              <iframe width="100%" height="100%" allowfullscreen="allowfullscreen"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1780.9567683041234!2d98.87123661595943!3d3.5599978294980836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031485d0d6a9e6b%3A0xa246982dc603744a!2sJl.%20P.%20Diponegoro%20No.72%2C%20Petapahan%2C%20Kec.%20Lubuk%20Pakam%2C%20Kabupaten%20Deli%20Serdang%2C%20Sumatera%20Utara%2020518!5e0!3m2!1sen!2sid!4v1725497434941!5m2!1sen!2sid"
                                class="maps-embed" style="border: 0px; position: absolute;"></iframe>
                            </div> <button class="btn-maps btn btn-sm btn-pilled btn-block btn-accent mt-1 mb-4">Edit
                              Denah
                              Lokasi</button>
                            <div class="text-center animate__animated animate__fadeInUp animate__slow">
                              <div class="editable font-weight-bold" style="font-size: 14px;">Zeky's International
                                Building</div>
                              <div class="editable mb-3" style="font-size: 14px;">Jln. Besitang Lk. V Alur Dua,
                                Pangkalan Brandan</div>
                              <a href="https://maps.app.goo.gl/ibvcbZ1wn13SweiJ9" target="_blank"
                                rel="noreferrer noopener"
                                class="btn-maps-link d-flex align-items-center mx-auto btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow"
                                style="gap: 8px; max-width: 200px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                  <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                Link Google Maps
                              </a>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <div style="width: 100%;">
                          <div
                            class="text-center color-accent h4 mb-4 editable animate__animated animate__fadeInDown animate__slow font-latin"
                            style="font-size: 28px;">Reservasi <span class="font-cardo">/</span> <br> Tinggalkan Pesan
                          </div>
                          <div data-datetime="2025-09-30T16:00"
                            class="countdown-wrapper mx-auto mb-5 d-flex flex-column animate__animated animate__fadeInUp animate__slower"
                            style="max-width: 280px;">
                            <div class="countdown text-center">
                              <div class="countdown-item day bg-white"
                                style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                <div class="number">415</div>
                                <div class="text editable">Hari</div>
                              </div>
                              <div class="countdown-item hour bg-white"
                                style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                <div class="number">16</div>
                                <div class="text editable">Jam</div>
                              </div>
                              <div class="countdown-item minute bg-white"
                                style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                <div class="number">18</div>
                                <div class="text editable">Menit</div>
                              </div>
                              <div class="countdown-item second bg-white"
                                style="color: var(--inv-accent); border: 1px solid var(--inv-accent);">
                                <div class="number">51</div>
                                <div class="text editable">Detik</div>
                              </div>
                            </div> <button class="btn-countdown btn btn-sm btn-pilled btn-accent mt-2">Atur
                              Countdown</button>
                          </div>
                          <div>
                            <div class="text-center">
                              <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower"
                                style="font-size: 12px;">Klik tombol di bawah untuk konfirmasi kehadiran atau sekadar
                                menitipkan pesan kepada kami.</div>
                              <button type="button"
                                class="btn btn-primary mx-auto rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow"
                                data-toggle="modal" data-target="#rsvpModal" style="gap: 8px; font-size: 14px;">Make
                                a Wish &amp; RSVP</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="d-flex px-4 justify-content-center align-items-center" style="height: 100%;">
                        <div style="width: 100%;">
                          <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                            <div class="color-accent h4 mb-2 editable font-latin" style="font-size: 28px;">A glimpse
                              of<br>our Journey to Forever</div>
                            <button type="button" id="open-gallery"
                              class="btn btn-primary rounded-pill mx-auto animate__animated animate__fadeInDown animate__slow"
                              data-toggle="modal" data-target="#galleryModal" style="display: none;">
                              Lihat Galeri
                            </button>
                          </div>
                          <div>
                            <div class="container">
                              <div id="game-container" class="game-container">
                                <!-- Game cards -->
                                @include('components.game-card')
                              </div>
                              <div id="leaderboard" class="leaderboard">
                                <h3
                                  class="font-accent text-center mb-2 animate__animated animate__fadeInDown animate__slow">
                                  Klasemen</h3>
                                <div class="table-container animate__animated animate__fadeInUp animate__slow"
                                  id="scrollable-table">
                                  <table class="table" style="font-size: 12px;">
                                    <thead>
                                      <tr>
                                        <th>Tamu Undangan</th>
                                        <th class="text-center">Jumlah Percobaan</th>
                                      </tr>
                                    </thead>
                                    <tbody id="leaderboard-body">
                                      <!-- Leaderboard entries will be injected here -->
                                    </tbody>
                                  </table>
                                </div>
                              </div>

                              <script>
                                // Function to prevent scrolling outside the table container
                                const tableContainer = document.getElementById('scrollable-table');

                                tableContainer.addEventListener('touchmove', function(event) {
                                  const scrollTop = tableContainer.scrollTop;
                                  const scrollHeight = tableContainer.scrollHeight;
                                  const offsetHeight = tableContainer.offsetHeight;
                                  const contentHeight = scrollHeight - offsetHeight;

                                  // Prevent scrolling beyond the top or bottom of the table
                                  if (scrollTop <= 0 && event.deltaY < 0) {
                                    event.preventDefault();
                                  } else if (scrollTop >= contentHeight && event.deltaY > 0) {
                                    event.preventDefault();
                                  }
                                });

                                // Prevent scroll propagation (for mobile pull-to-refresh issues)
                                tableContainer.addEventListener('touchstart', function(event) {
                                  event.stopPropagation();
                                });

                                tableContainer.addEventListener('touchend', function(event) {
                                  event.stopPropagation();
                                });
                              </script>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="px-2 d-flex justify-content-center align-items-center" style="height: 100%;">
                        <div class="text-center" style="width: 100%;">
                          <div
                            class="font-latin color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slower"
                            style="font-size: 28.8px;">Tanda Kasih</div>
                          <div class="editable mb-4 animate__animated animate__fadeInDown animate__slower"
                            style="font-size: 14.4px;">Terima kasih telah menambah semangat <br> kegembiraan pernikahan
                            kami
                            dengan kehadiran dan hadiah indah Anda.</div>
                          <div style="display: flex; gap: 8px;"><button
                              class="btn-gift btn btn-block btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow"
                              style="max-width: 150px; margin: auto; font-size: 14.4px;">Kirim hadiah</button></div>
                          <div class="gift-container mt-3 p-4 rounded animate__animated animate__zoomIn animate__slow"
                            style="display: none;">
                            <div class="d-flex">
                              <div class="mx-auto">
                                <div class="d-flex align-items-center mb-3">
                                  <div class="image-editable" style="width: 80px; overflow: hidden;"><img
                                      src="{{ asset('assets/img/bsi.svg') }}" alt="BSI"
                                      style="width: 100%; height: 100%; object-fit: contain;">
                                  </div>
                                  <div class="text-left pl-2">
                                    <div class="editable account-number font-weight-bold h5 mb-0"
                                      style="display: inline;">7203114642</div>
                                    <div class="editable" style="font-size: 14.4px;">
                                      a.n. Putri Meila Vista
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex align-items-center">
                                  <div class="image-editable" style="width: 80px; overflow: hidden;"><img
                                      src="{{ asset('assets/img/bni.png') }}" alt="BNI"
                                      style="width: 90%; height: 100%; object-fit: contain;" class="float-left">
                                  </div>
                                  <div class="text-left pl-2">
                                    <div class="editable account-number font-weight-bold h5 mb-0"
                                      style="display: inline;">1808960488</div>
                                    <div class="editable" style="font-size: 14.4px;">a.n. Jabbar Ali Panggabean</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="px-2 d-flex justify-content-center align-items-center"
                        style="height: 100%; width: 100%;">
                        <div>
                          <div class="text-center">
                            <h1
                              class="font-latin color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slow">
                              Our Story</h1>
                            <div class="editable mb-4 animate__animated animate__fadeInDown animate__slower"
                              style="font-size: 14.4px;">بَارَكَ اللَّهُ لَكُمْ وَبَارَكَ عَلَيْكُمْ وَجَمَعَ
                              بَيْنَكُمْ فِي خَيْرٍ</div>
                          </div>
                          <div class="d-flex justify-content-center text-center">
                            <div class="p-4 animate__animated animate__fadeInLeft animate__slow delay-4"
                              style="width: 50%;">
                              <img src="{{ asset('assets/img/photos/meila-md.webp') }}" alt="Meila"
                                class="img-story">
                              <div class="font-latin mt-4" style="font-size: 14px;">Sudut Pandang</div>
                              <h2 class="font-accent mb-4">Meila</h2>
                              <button class="btn btn-primary rounded-pill font-latin" style="font-size: 16px;"
                                data-toggle="modal" data-target="#povMeila">
                                <svg width="24" height="24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path opacity=".4"
                                    d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2"
                                    fill="currentColor"></path>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z"
                                    fill="currentColor"></path>
                                </svg>
                                Baca</button>
                            </div>
                            <div class="p-4 animate__animated animate__fadeInRight animate__slow delay-4"
                              style="width: 50%;">
                              <img src="{{ asset('assets/img/photos/jabbar-md.webp') }}" alt="Meila"
                                class="img-story">
                              <div class="font-latin mt-4" style="font-size: 14px;">Sudut Pandang</div>
                              <h2 class="font-accent mb-4">Jabbar</h2>

                              <button type="button" class="btn btn-primary rounded-pill font-latin"
                                style="font-size: 16px;" data-toggle="modal" data-target="#povJabbar">
                                <svg width="24" height="24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path opacity=".4"
                                    d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2"
                                    fill="currentColor"></path>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z"
                                    fill="currentColor"></path>
                                </svg>
                                Baca
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="pmvjap_slide" style="display: none;">
                    <div class="container-mobile" style="background-image: url('assets/img/bg/background.jpg');">
                      <div class="frame"><img src="{{ asset('assets/img/frame/tl.png') }}" alt="frame"
                          class="frame-tl animate__animated animate__fadeInTopLeft animate__slower">
                        <img src="{{ asset('assets/img/frame/tr.png') }}" alt="frame"
                          class="frame-tr animate__animated animate__fadeInTopRight animate__slower"> <img
                          src="{{ asset('assets/img/frame/bl.png') }}" alt="frame"
                          class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower"> <img
                          src="{{ asset('assets/img/frame/br.png') }}" alt="frame"
                          class="frame-br animate__animated animate__fadeInBottomRight animate__slower">
                      </div>
                      <div class="watermark d-flex flex-column px-2" style="height: 100%;">
                        <div class="mt-auto px-3" style="width: 100%;">
                          <div class="text-center">
                            <div
                              class="editable mb-3 animate__animated animate__fadeInDown animate__slower font-accent"
                              style="font-size: 40px; line-height: 1;">it's our hope and pleasure to have you on our
                              big day</div>
                            <div class="editable font-italic mt-5 animate__animated animate__fadeInDown animate__slow"
                              style="font-size: 14px;">Kind Regards,</div>
                            <div
                              class="editable h4 color-accent animate__animated animate__fadeInDown animate__slow font-accent"
                              style="font-size: 30px;">Meila &amp; Jabbar</div>
                          </div>
                        </div>
                        <div class="watermark-placeholder text-center mb-auto mb-5 pb-5"></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            @include('components.navigation')
          </div>
        </div>
      </div>
    </div>

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
  <script src="{{ asset('assets/js/shield.js') }}"></script>
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
