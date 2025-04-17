<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Register Student</h2>
  <form action="register.php" method="POST">
    <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
    <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
    <input class="form-control mb-2" type="text" name="course" placeholder="Course" required>
    <button class="btn btn-success" type="submit">Register</button>
  </form>
  <a class="btn btn-primary mt-3" href="view.php">View All Students</a>
</body>
</html>