<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin Login</h2>
  <!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{!!URL::to('admin/register')!!}">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="fullname">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
</div>

</body>
</html>