<div id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4" style="height: 100%;">
      <div class="rsvp-form show">
        <div class="mb-4">
          <div class="font-accent h4 text-center">RSVP</div>
        </div>
        <form id="commentForm" class="pt-2">
          <div class="form-group">
            <input id="inputname" type="text" name="name" placeholder="Nama" required="required"
              class="form-control">
          </div>
          <div class="form-group">
            <select id="inputattendance" name="attendance" required="required" class="form-control">
              <option value="" selected="selected">Kehadiran</option>
              <option value="Hadir">Hadir</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
          </div>
          <div class="form-group">
            <textarea id="inputcomment" name="comment" rows="3" placeholder="Komentar atau Ucapan" required="required"
              class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-lg btn-primary rounded-pill btn-block mt-4 mb-2">
            <span>Kirim</span>
          </button>
        </form>

        <div class="comment border-top mt-4 py-4">
          @foreach ($comments as $comment)
            <div class="comment-item">
              <div class="d-flex">
                <img
                  src="https://ui-avatars.com/api/?size=40&background=random&color=random&name={{ urlencode($comment->name) }}"
                  alt="{{ $comment->name }}" loading="lazy" class="avatar rounded-circle"
                  style="height: 30px; width: 30px;">
                <div class="ml-2 text-left">
                  <p class="mb-0 font-weight-bold">{{ $comment->name }} <span
                      class="badge alert-info">{{ $comment->attendance }}</span></p>
                  <p class="mb-0">{{ $comment->comment }}</p>
                  <small>{{ $comment->created_at->format('d M Y H:i') }}</small>
                </div>
              </div>
            </div>
          @endforeach
        </div>
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
