<div id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModal" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4" style="height: 100%;">
      <div class="rsvp-form show">
        <div class="mb-5 text-center">
          <h4 class="font-latin">Galeri</h4>
          <h1 class="font-accent">Meila & Jabbar</h1>
        </div>

        <style>
          .img-gallery {
            border-radius: 25px;
            width: 100%;
            height: 300px;
            object-fit: cover;
          }

          .img-avatar {
            margin-top: 25px;
            width: 30px;
            height: 30px;
            border-radius: 25px;
          }

          .container-caption-left {
            height: 50px;
            width: 94%;
          }

          .container-caption-right {
            height: 50px;
            margin-top: -5px !important;
            width: 92%;
            float: right;
          }

          .btn-caption-left {
            background-color: #a557bc;
            border-radius: 25px 25px 25px 0px;
            padding: 10px 16px;
            /* width: 92%; */
            height: 35px;
            margin-left: 3px;
            text-align: left;
            color: white;
            font-size: 9px;
          }

          .btn-caption-right {
            background-color: #bc6872;
            border-radius: 25px 25px 0px 25px;
            padding: 10px 16px;
            /* width: 92%; */
            height: 35px;
            margin-right: 3px;
            text-align: right;
            color: white;
            font-size: 9px;
          }
        </style>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="1" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">Otsukare lunch</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Anak magang inisiatip beli makanan</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/2.jpg') }}" alt="2" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">Best convenience-store oat-coffee, approved 👍</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Minum kopi di pantai milo~</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/3.jpg') }}" alt="3" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar" style="margin-top: 35px;">
            <div class="btn-caption-left" style="height: 48px;"><s>Michael Jackson</s> Menuju Jannah cafe (?) Best for privacy 👍✨</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right" style="margin-top: 13px !important;">
            <div class="btn-caption-right">Hoo, kirain MJ itu Meila Jabbar</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/4.jpg') }}" alt="4" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">안녕 Nara-san</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Maafkan daku tidak peka wkwk T^T</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/5.jpg') }}" alt="5" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">Exploring Takoyaki (3.5⭐)</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Hmm, shall we explore more, then?</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/6.jpg') }}" alt="6" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">Mellow Rainy Night</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Some OST is playing in my head rn</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/7.jpg') }}" alt="7" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">A Journey to Forever~</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Bismillah, insya Allah sampai jannah bersama~</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/8.jpg') }}" alt="8" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">SaraSehanSeSerahan</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Yoroshiku for entire of my life onegaishimasu!</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/9.jpg') }}" alt="9" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">Enak banget aseli, mau lagi boleh? T-T</div>
          </div>
          <div class="d-flex justify-content-end mt-2 container-caption-right" style="margin-bottom: 4rem !important;">
            <div class="btn-caption-right" style="height: 48px; width: 80%;">Sangkyuu, I cooked that, walaupun cuman bagian ngaduk-ngaduk doang 🤣🤣</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar" style="margin-top: 40px;">
          </div>
        </div>

        <div class="mb-4">
          <img src="{{ asset('assets/img/gallery/10.jpg') }}" alt="10" class="img-gallery">
          <div class="d-flex mt-2 container-caption-left">
            <img src="{{ asset('assets/img/photos/meila.webp') }}" alt="Meila" class="img-avatar">
            <div class="btn-caption-left">Tokubetsuna resutoran~</div>
          </div>
          <div class="d-flex justify-content-end mt-2 mb-5 container-caption-right">
            <div class="btn-caption-right">Hai, soko ni kimi ga iru kara~ 💖</div>
            <img src="{{ asset('assets/img/photos/jabbar.webp') }}" alt="Jabbar" class="img-avatar">
          </div>
        </div>
      </div>

      <div style="height: 500px; background: white;"></div>

      <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12">
          </path>
        </svg>
      </button>
    </div>
  </div>
</div>
