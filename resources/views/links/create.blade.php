<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Link</title>
  <link rel="icon" href="{{ asset('assets/img/icon/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
  <h2>Create New Link</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('links.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="prefix">Prefix:</label>
      <select class="form-control" id="prefix" name="prefix">
        <option value=""></option>
        <option value="Bapak">Bapak</option>
        <option value="Ibu">Ibu</option>
        <option value="Saudara">Saudara</option>
        <option value="Saudari">Saudari</option>
        <option value="Kak">Kak</option>
        <option value="Bang">Bang</option>
        <option value="Teman-teman">Teman-teman</option>
      </select>
    </div>
    <div class="form-group">
      <label for="name">Enter Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Generate Link</button>
    <a href="{{ route('links.index') }}" class="btn btn-secondary">Back</a>
  </form>

</body>

</html>
