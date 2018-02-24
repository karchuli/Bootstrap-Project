<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Enter Your Giveaway</h2>
  <form action="/action_page.php">
    
<div class="form-group">
      <label for="First letter">First Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Your First Name" name="Name">
    </div>
<div class="form-group">
      <label for="Surname">Surname:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Your Last Name" name="Name">
    </div>
    <div class="form-group">
      <label for="loc">Location:</label>
      <input type="text" class="form-control" id="loc" placeholder="Enter Location" name="loc">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
