<?php
include 'includes/db.php';
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Registered Students</h2>
  <table class="table table-bordered">
    <tr><th>Name</th><th>Email</th><th>Course</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr><td><?= $row['name'] ?></td><td><?= $row['email'] ?></td><td><?= $row['course'] ?></td></tr>
    <?php endwhile; ?>
  </table>
  <a class="btn btn-secondary" href="index.php">Back to Form</a>
</body>
</html>