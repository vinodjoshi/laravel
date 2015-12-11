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
  <h2>Manage Registration</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Full name</th>
        <th>Email</th>
        <th>Order</th>
        <th>Product</th>
        <th>Notes</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $index => $value)
      <tr>
        <td>{!! $value->fullname !!}</td>
        <td>{!! $value->email !!}</td>
        <td>{!! $value->order_number !!}</td>
        <td>{!! $value->product_id !!}</td>
        <td>Notes</td>
        <td><a href="{!!URL::to('admin/deleteuser/'.$value->id)!!}">Delete</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>