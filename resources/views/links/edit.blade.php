<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Link</title>
  <link rel="icon" href="{{ asset('assets/img/icon/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
  <h2>Edit Link</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('links.update', $link->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="prefix">Edit Prefix:</label>
      <select class="form-control" id="prefix" name="prefix">
        <option value="" {{ $link->prefix == '' ? 'selected' : '' }}></option>
        <option value="Bapak" {{ $link->prefix == 'Bapak' ? 'selected' : '' }}>Bapak</option>
        <option value="Ibu" {{ $link->prefix == 'Ibu' ? 'selected' : '' }}>Ibu</option>
        <option value="Saudara" {{ $link->prefix == 'Saudara' ? 'selected' : '' }}>Saudara</option>
        <option value="Saudari" {{ $link->prefix == 'Saudari' ? 'selected' : '' }}>Saudari</option>
        <option value="Kak" {{ $link->prefix == 'Kak' ? 'selected' : '' }}>Kak</option>
        <option value="Bang" {{ $link->prefix == 'Bang' ? 'selected' : '' }}>Bang</option>
        <option value="Teman-teman" {{ $link->prefix == 'Teman-teman' ? 'selected' : '' }}>Teman-teman</option>
      </select>
    </div>
    <div class="form-group">
      <label for="name">Edit Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $link->name }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Link</button>
    <a href="{{ route('links.index') }}" class="btn btn-secondary">Back</a>
  </form>

</body>

</html>
