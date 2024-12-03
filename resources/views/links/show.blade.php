<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Link</title>
  <link rel="icon" href="{{ asset('assets/img/icon/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
  <h2>Show Link</h2>

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" value="{{ $link->name }}" readonly>
  </div>

  <div class="form-group">
    <label for="link">Link:</label>
    <input type="text" class="form-control" id="link" value="{{ $link->link }}" readonly>
  </div>

  <a href="{{ route('links.index') }}" class="btn btn-secondary">Back</a>
</body>

</html>
