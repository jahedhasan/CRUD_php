<?php
if (isset($_POST['name'])&&isset($_POST['email'])) {
  $name= $_POST['name'];
  $email= $_POST['email'];

  $con = mysqli_connect('localhost','root','','school');
  $con->query("INSERT INTO  teachers (name,email) VALUES('$name','$email')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body class="bg-info">
  <div class="container">
    <?php require 'nav.php'; ?>
    <div class="card mt-5">
      <div class="card-header">
        <h2>Add teacher information</h2>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-outline-info" type="submit">add teacher info</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</body>
</html>