<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Church</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="vh-100 d-flex align-items-center justify-content-center">
  <div class="card w-25">
    <div class="card-body">
      <form class="p-4">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>

          <input class="form-control" name="username" id="username" required />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>

          <input class="form-control" name="password" id="password" type="password" required />
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
