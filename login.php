<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			background-color: #f2f2f2;
		}
		h2 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			background-color: purple;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: auto;
			width: 300px;
			padding: 20px;
			margin-top: 30px;
		}
		input[type=email], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		button {
			background-color: yellow;
			color: white;
			padding: 20px 40px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		button:hover {
			background-color: #45a049;
		}
		nav {
  background-color: #333;
  height: 50px;
  text-align: center;
  font-size: 20px;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav li a {
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 15px;
}

nav li a:hover {
  background-color: #555;
}

	</style>
</head>
<body>
<nav>
  <ul>
  <li><a href="home.php">home</a></li>
    <li><a href="index.php">index</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="signup.php">signup</a></li>
	<li><a href="contacts.php">contacts</a></li>
  </ul>
</nav>

	<h2>Login Form</h2>
	<form action="login.php" method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>

		<button type="submit">Login</button>
        <button><a href="signup.php">sign up</a></button>
	</form>
</body>
</html>

<?php
// Set database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "registration_form";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve the email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    
    // Check if there is a matching user in the database
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        // Login success
        header("Location: home.php");
        exit();
    } else {
        // Login failed
        echo "Invalid email or password.";
    }
    
    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>