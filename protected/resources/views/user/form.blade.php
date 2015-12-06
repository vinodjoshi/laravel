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
  <h2>Vertical (basic) form</h2>
  <form role="form" method="post" action="{!!URL::to('/add')!!}">
    <div class="form-group">
      <label for="fullname">Fullname:</label>
      <input type="text" name="fullname" id="fullname" class="form-control"  placeholder="Fullname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="ordernumber">Order Number:</label>
      <input type="text" name="order_number" id="order_number" class="form-control" placeholder="Order Number" >
    </div>
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" name="product_id">
        <option value="1">Item 1</option>
        <option value="2">Item 2</option>
        <option value="3">Item 3</option>
        <option value="4">Item 4</option>
      </select>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>