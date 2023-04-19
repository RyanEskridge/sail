<?php

// Check if the user has entered their username and password
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'mysql', '3306');


  // Escape the user input to protect against SQL injection
  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  // Construct the query
  $query = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";

  // Execute the query
  $result = $db->query($query);
  if (!$result) {
    // There was an error executing the query
    printf("Error: %s\n", $db->error);
  }

  // Check if the query returned any results
  if ($result->num_rows > 0) {
    // Login was successful, redirect the user to the homepage
    header('Location: homepage.php');
    exit;
  } else {
    // Login failed, display an error message
    echo "Invalid username or password";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <h1>Login</h1>
  <form action="login.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit"></br>
    <a href="signup.php">Need an account? Click Here</a>
  </form>
</body>

</html>