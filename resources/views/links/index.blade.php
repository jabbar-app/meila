<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generated Links</title>
  <link rel="icon" href="{{ asset('assets/img/icon/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    table thead {
      background-color: #bc6872;
      color: white;
    }

    table {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 0.5rem;
      overflow: hidden;
    }

    table input {
      background-color: #e9ecef;
      border: none;
      color: #495057;
    }

    table .btn {
      margin: 2px;
    }

    h2 {
      color: #bc6872;
    }

    .btn-primary {
      background-color: #bc6872;
      border: none;
      margin-bottom: 1rem;
    }

    .btn-primary:hover {
      background-color: #9a5059;
    }

    /* Adjust button size for mobile */
    @media (max-width: 576px) {
      .btn {
        padding: 10px;
        /* font-size: 12px; */
      }

      .btn svg {
        width: 14px;
        height: 14px;
      }
    }
  </style>
</head>

<body class="container my-5">
  <div class="d-flex justify-content-between">
    <h2>Generated Links ({{ $links->count() }})</h2>
    <a href="{{ route('links.create') }}" class="btn btn-primary mb-3">Create New Link</a>
  </div>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <!-- Add table-responsive for mobile -->
  <div class="table-responsive">
    <table id="linksTable" class="table table-hover">
      <thead>
        <tr>
          <th style="background: none !important;">#</th>
          <th>Prefix</th>
          <th>Name</th>
          <th>Link</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($links as $link)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $link->prefix }}</td>
            <td>{{ $link->name }}</td>
            <td>
              <input type="text" class="form-control" id="link-{{ $link->id }}" value="{{ $link->link }}"
                readonly>
            </td>
            <td>
              <!-- Delete Button -->
              <form action="{{ route('links.destroy', $link->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7l16 0" />
                    <path d="M10 11l0 6" />
                    <path d="M14 11l0 6" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                  </svg>
                </button>
              </form>

              <!-- Edit Button -->
              <a href="{{ route('links.edit', $link->id) }}" class="btn btn-info btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-minus">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                  <path d="M13.5 6.5l4 4" />
                  <path d="M16 19h6" />
                </svg>
              </a>

              <!-- Copy Button -->
              <button class="btn btn-success btn-sm px-3"
                onclick="copyInvite('{{ $link->id }}', '{{ $link->prefix }}', '{{ $link->name }}', '{{ $link->link }}')">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                  <path
                    d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                </svg>
                Copy
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(function() {
      $('#linksTable').DataTable({
        "pageLength": 50,
        "language": {
          "search": "Search links:",
          "lengthMenu": "Show _MENU_ entries",
          "zeroRecords": "No matching records found",
          "info": "Showing _START_ to _END_ of _TOTAL_ entries",
          "infoEmpty": "No entries available",
        },
      });
    });

    function copyInvite(id, prefix, name, link) {
      var inviteText = `السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ\n\n_Bismillāhirraḥmānirraḥīm_\n\n` +
        `Dengan memohon rahmat Allah SWT, izinkan kami untuk mengundang ${prefix} ${name} dalam acara ngunduh mantu,\n\n` +
        `*Jabbar Ali Panggabean & Putri Meila Vista*\n\n` +
        `*Akad Pernikahan*\n` +
        `_Ahad, 15 September 2024, Pukul 09.00 WIB, di Masjid Agung Sultan Thaf Sinar Basarsyah - Jl. Negara, Tj. Garbus Satu, Lubuk Pakam_\n\n` +
        `*Ngundu Mantu*\n` +
        `_Sabtu, 07 Desember 2024, Pukul 09:00 - 18.00 WIB, di Rumah Ibu Zakiah Isnani, Jln. Bestitang Lk. V Alur Dua, Pangkalan Brandan_\n\n` +
        `Undangan dapat diakses melalui:\n${link}\n\n` +
        `Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila ${prefix} ${name} berkenan hadir memberikan doa & restu, serta kami ucapkan terima kasih.\n\n` +
        // `_Jalan-jalan ke Lubuk Pakam_\n_Dalam senyumnya aku tenggelam_\n_Sebelum kami menutup kalam_\n_Izinkan kembali, kami mengucap salam_\n\n` +
        `وَ السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ`;

      // Create a temporary textarea to hold the text
      var tempTextArea = document.createElement("textarea");
      tempTextArea.value = inviteText;
      document.body.appendChild(tempTextArea);

      // Select the text in the textarea
      tempTextArea.select();
      document.execCommand("copy");

      // Remove the temporary textarea
      document.body.removeChild(tempTextArea);

      Swal.fire({
        icon: 'success',
        title: 'Copied!',
        text: 'Invitation has been copied to clipboard.'
      });
    }
  </script>

</body>

</html>
