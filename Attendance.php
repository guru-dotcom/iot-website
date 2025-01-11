<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Attendance System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Reports</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Users</a></li>
              <li><a class="dropdown-item" href="#">Camera Settings</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2>Attendance</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Today's Lectures</h3>
        <ul class="list-group">
          <?php
          // Replace this with logic to fetch lectures from a database or other source
          $lectures = array(
            array("name" => "Lecture 1", "time" => "9:00 AM - 10:00 AM"),
            array("name" => "Lecture 2", "time" => "10:00 AM - 11:00 AM"),
            // ... add more lectures
          );
          foreach ($lectures as $lecture) {
            echo "<li class='list-group-item'>{$lecture['name']} - {$lecture['time']}</li>";
          }
          ?>
        </ul>
      </div>
      <div class="col-md-6">
        <h3>Mark Attendance</h3>
        <form id="attendanceForm" method="post">
          <div class="mb-3">
            <label for="userName" class="form-label">Student Name:</label>
            <input type="text" class="form-control" id="userName" name="userName" required>
          </div>
          <div class="mb-3">
            <label for="lecture" class="form-label">Select Lecture:</label>
            <select class="form-select" id="lecture" name="lecture">
              <?php
              foreach ($lectures as $lecture) {
                echo "<option value='{$lecture['name']}'>{$lecture['name']}</option>";
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Mark Attendance</button>
        </form>
      </div>
    </div>

    <div class="mt-5">
      <h3>Attendance Records</h3>