<?php

// Check if the user has entered their username and password
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'sail', '3306');

  // Escape the user input to protect against SQL injection
  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  // Construct the query to select the user based on their username
  $query = "SELECT * FROM users WHERE username = '$username'";

  // Execute the query
  $result = $db->query($query);
  if (!$result) {
    // There was an error executing the query
    printf("Error: %s\n", $db->error);
  }

  // Check if the query returned any results
  if ($result->num_rows > 0) {
    // Get the user data from the query result
    $user = $result->fetch_assoc();

    // Retrieve the hashed password from the user data
    $hashed_password = $user['password'];

    // Use password_verify() to check if the input password matches the hashed password from the database
    if (password_verify($password, $hashed_password)) {
      // Password is correct, login was successful, redirect the user to the homepage
      header('Location: homepage.php');
      exit;
    } else {
      // Password is incorrect, display an error message
      echo "Invalid username or password";
    }
  } else {
    // Username not found, display an error message
    echo "Invalid username or password";
  }
}

?>
