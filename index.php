<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    #header {
      background-color:red;
      color: blue;
      text-align: center;
      padding: 20px;
    }

    #main {
      margin: 20px auto;
      width: 80%;
      text-align: center;
    }

    h1 {
      font-size: 3em;
    }

    button {
      background-color: red;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 1.2em;
      border-radius: 4px;
      margin: 10px;
      cursor: pointer;
    }

    button:hover {
      background-color: brown;
    }
    a{
        text-decoration: none;
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
  text-decoration: color: yellow;
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

  <div id="header">
    <h1>WELCOME TO ALPHA PHARMACY PATIENTS RECORD WEB PAGE</h1>
  </div>

  <div id="main">
    <p>Please log in or sign up to continue.</p>
    <button><a href="login.php">Login</a> </button>

    <button><a href="signup.php">sign up</a></button>
  </div>

</body>
</html>
