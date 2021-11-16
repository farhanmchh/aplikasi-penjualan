<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">
  <title>Signin Template · Bootstrap v5.1</title>

  {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form action="/" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y') ?></p>
    </form>
  </main>



</body>

</html>
