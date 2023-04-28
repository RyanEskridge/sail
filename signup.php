<?php

// Check if the user has entered their username and password
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'sail', '3306');

  // Escape the user input to protect against SQL injection
  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  $query = "SELECT * FROM users WHERE user_name = '$username'";

  // Execute the query
  $result = $db->query($query);
  if (!$result) {
    // There was an error executing the query
    printf("Error: %s\n", $db->error);
  }

  // Check if the query returned any results
  if ($result->num_rows > 0) {
    echo '<p>Username already Exists.</p>';
    $checkname = 1;
  } else {
    $checkname = 0;
  }

  if ($checkname != 1) {
    if ($_POST['password'] == $_POST['password-confirm']) {
      // If the passwords match, hash the password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      //Add user the db
      $query = "INSERT INTO users (user_name, password) VALUES ('$username', '$hashed_password')";

      $result = $db->query($query);
      if (!$result) {
        // There was an error inserting the user
        printf("Error: %s\n", $db->error);
      }
    } else {
      // The password and password-confirm inputs are not the same, so you should display an error message
      echo '<p>Error: The password and password-confirm inputs do not match.</p>';

    }
  }

}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>
</head>

<body>
  <h1>Sign Up</h1>
  <form action="signup.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:<br>
      <input type="password" id="password" name="password"><br>
      <label for="password-confirm">Confirm Password:</label><br>
      <input type="password" id="password-confirm" name="password-confirm"><br>
      <input type="submit" value="Sign Up"><br>
      <a href="login.php">Already have an account? Login here</a>
  </form>
</body>

</html>