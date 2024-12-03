<div id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModal" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content px-4" style="height: 100%;">
      <div class="rsvp-form show mt-2">
        <div class="my-5 text-center">
          <h4 class="font-latin">Galeri Pernikahan</h4>
          <h1 class="font-accent">Meila & Jabbar</h1>
        </div>

        <div class="text-center">
          <p class="font-cardo">Hai, kamu bisa meng-upload foto-foto di acara pernikahan Meila & Jabbar setelah
            countdown berikut selesai ya ^o^9</p>

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
            </div>
          </div>
        </div>

        {{-- <form id="uploadForm" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Nama Kamu</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="image">Select Image</label>
            <div class="file-upload-wrapper">
              <input type="file" id="image" name="image" class="form-control-file" required>
            </div>
          </div>

          <div class="form-group">
            <label for="caption">Tulis Caption</label>
            <textarea name="caption" id="caption" rows="2" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Upload</button>
          <div class="spinner-border text-primary" role="status" style="display: none;">
            <span class="sr-only">Loading...</span>
          </div>
        </form> --}}

        <div id="uploadedImage" class="my-3"></div>
        @foreach ($gallery as $g)
          <img src="{{ asset($g->image) }}" alt="Image" class="my-2" style="width: 100%; border-radius: 24px;">
        @endforeach

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
          $(document).ready(function() {
            var token = $('meta[name="csrf-token"]').attr('content');

            $('#uploadForm').on('submit', function(e) {
              e.preventDefault();

              var formData = new FormData(this);
              var $spinner = $('.spinner-border');

              $.ajax({
                url: '{{ route('gallery.upload') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                  'X-CSRF-TOKEN': token
                },
                beforeSend: function() {
                  $spinner.show();
                },
                success: function(response) {
                  console.log('Server response:', response);

                  if (response.image) {
                    $('#uploadedImage').append(`
              <div class="mt-2">
                <img src="${response.image}" alt="Uploaded Image" style="width: 100%;" class="img-fluid">
              </div>
            `);

                    $('#uploadForm')[0].reset();
                  } else {
                    alert('Failed to retrieve image URL.');
                  }
                },
                error: function(xhr) {
                  alert('Error uploading image: ' + xhr.responseText);
                },
                complete: function() {
                  $spinner.hide();
                }
              });
            });
          });
        </script>
      </div>

      <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>
</div>
