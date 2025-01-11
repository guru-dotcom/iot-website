<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password">
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button> 
          </div>
        </form>

        <?php

                    // Database credentials
          $servername = "localhost"; // Or your server address
          $username = "root";
          $password = "";
          $dbname = "your_database_name";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Example: Fetch data from a table
          $sql = "SELECT id, name FROM users"; 
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
            }
          } else {
            echo "0 results";
          }

          // Example: Insert data into a table
          $sql = "INSERT INTO users (name) VALUES ('John Doe')";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          // Close connection
          $conn->close();

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get username and password from form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // ** Replace this part with your login validation logic **
            // Here's an example (replace with your actual database connection and authentication)
            if ($username == "admin" && $password == "secret") {
              echo "Login successful!";
            } else {
              echo "Invalid username or password.";
            }
          }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>