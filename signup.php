<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <style>
    /* CSS styles */
    /* Style the form */
form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background color: gray;
}

/* Style the form header */
h1 {
  text-align: center;
  margin-bottom: 20px;
}

/* Style the form labels */
label {
  display: block;
  margin-bottom: 8px;
}

/* Style the form input fields */
input[type="text"],
input[type="email"],
input[type="password"],
input[type="tel"],
input[type="date"],
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  font-family: Arial, sans-serif;
}

/* Style the submit button */
input[type="submit"] {
  background-color: yellow;
  color: indigo;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

/* Style the form footer */
footer {
  text-align: center;
  margin-top: 20px;
  background color: gray;
}

ul{nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

nav li {
  float: left;
}

nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

nav li a:hover {
  background-color: #111;
}

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
  <style>
    ul{
      background color: purple;
      text align: center;
      text decoration: 
    }
  </style>
<nav>
  <ul>
    <li><a href="home.php">home</a></li>
    <li><a href="index.php">index</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="signup.php">signup</a></li>
    <li><a href="contacts.php">contacts</a></li>
  </ul>
</nav>

  <form action="signup.php" method="post">
    <h1>Sign Up</h1>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="repeat-password">Repeat Password:</label>
    <input type="password" id="repeat-password" name="repeat-password" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="tel">Telephone Number:</label>
    <input type="tel" id="tel" name="tel" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="">Please select...</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="country">Country:</label>
    <select id="country" name="country" required>
      <option value="">Please select...</option>
      <option value="usa">USA</option>
      <option value="canada">Canada</option>
      <option value="uk">UK</option>
      <option value="australia">Australia</option>
    </select>

    <input type="submit" value="SignUp">
    <button id="login-btn"><a href="login.php">Login</a></button>
  </form>

  <?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $tel = $_POST['tel'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // Save form data to the database
    $sql = "INSERT INTO users (name, email, password, dob, tel, gender, country) 
            VALUES ('$name', '$email', '$password', '$dob', '$tel', '$gender', '$country')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to thank you page
        header('Location: thankyou.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

</body>
</html>