<?php 
$con = mysqli_connect('localhost', 'root', '', 'school');
$teachers = $con->query("select * from teachers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>all teachers</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <?php require 'nav.php'; ?>
    <h1>View All teachers</h1>
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>Action</th>
      </tr>
      <?php while($teacher = $teachers->fetch_object()): ?>
        <tr>
          <td><?php echo $teacher->id ?></td>
          <td><?php echo $teacher->name ?></td>
          <td><?php echo $teacher->email ?></td>
          <td>
            <a href="edit.php?id=<?php echo $teacher->id ?>" class="btn btn-success">edit</a> |
            <a class="btn btn-danger" href="delete.php?id=<?php echo $teacher->id ?>">Delete</a></td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>
