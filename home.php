<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    h1{
    color:white;
text-align:center;
    }
    body{
        background-color: grey;
        
    }
    p{
        text-align: center;
        font-size: 35px;
        color: indigo;
		
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

    <h1>ALPHA PHARMACY PATIENTS RECORD SYSTEM</h1>
    
    <!DOCTYPE html>
<html>
<head>
	<title>Our System Home Page welcomes you!!</title>
	<style>
		body {
			background-color: violet;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: blue;;
			text-align: center
			padding: 5px;
			
		}
		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 20px;
		}
		.card {
			background-color: white;
			border-radius: 5px;
			box-shadow: 0px 2px 5px #ccc;
			padding: 20px;
			margin-bottom: 20px;
		}
		.card h2 {
			color: #333;
			font-size: 24px;
			margin-top: 0;
			margin-bottom: 10px;
		}
		.card p {
			color: #666;
			font-size: 16px;
			margin-top: 0;
			margin-bottom: 20px;
		}
		p{
			padding: 5px;
			text
		}/* Style for form container */
form {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: 0 auto;
  background color: violet;
}

/* Style for form labels */
label {
  margin-top: 10px;
  font-weight: bold;
}

/* Style for form input fields */
input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
  margin-bottom: 15px;
  font-size: 16px;
}

/* Style for select dropdown */
select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
  margin-bottom: 15px;
  font-size: 16px;
}

/* Style for form submit button */
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 20px;
}

/* Style for form submit button on hover */
input[type="submit"]:hover {
  background-color: #3e8e41;
}
	</style>
</head>
<body>
	<div class="container">
		<h1>Welcome to our System</h1>
   
		<div class="card">
			<h2>PATIENTS PERSONAL INFORMATION/DEMOGRAPHY:</h2>
			<p>
			<!DOCTYPE html>
<html>
<head>
	<title>Patient Demographic Information</title>
</head>
<body>
	<h1>Patient Demographic Information</h1>
	<form method="post" action="process_form.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required>

		<label for="age">Age:</label>
		<input type="number" name="age" id="age" required>

		<label for="gender">Gender:</label>
		<select name="gender" id="gender" required>
			<option value="">--Select--</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Other">Other</option>
		</select>

		<label for="phone">Phone:</label>
		<input type="tel" name="phone" id="phone" required>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>

		<label for="address">Address:</label>
		<input type="text" name="address" id="address" required>

		<label for="city">City:</label>
		<input type="text" name="city" id="city" required>

		<label for="state">State:</label>
		<input type="text" name="state" id="state" required>

		<label for="zipcode">Zip Code:</label>
		<input type="text" name="zipcode" id="zipcode" required>

		<input type="submit" value="Submit">
	</form>
	<p>Please fill in the form above accurately and completely for us <br> to easily care for you and maintain your health records</p>
</body>
</html>
</p>
		</div>
		<div class="card">
			<h2>PATIENT'S TEST RESULTS</h2>
			<p><!DOCTYPE html>
			<h2>Test results report</h2>
			<p><!DOCTYPE html>
<html>
<head>
	<title>Test Results Form</title>
	<style>
		form {
			max-width: 500px;
			margin: 0 auto;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: violet;
		}
	</style>
</head>
<body>
	<form action="#" method="post">
		<h2>Test Results Form</h2>
		<label for="patientName">Patient Name:</label>
		<input type="text" id="patientName" name="patientName" required>

		<label for="labResults">Laboratory Results:</label>
		<textarea id="labResults" name="labResults" rows="5" cols="50" required></textarea>

		<label for="xray">X-Ray:</label>
		<input type="file" id="xray" name="xray" accept=".jpg, .jpeg, .png" required>

		<label for="mri">MRI:</label>
		<input type="file" id="mri" name="mri" accept=".jpg, .jpeg, .png" required>

		<label for="ctscan">CT Scan:</label>
		<input type="file" id="ctscan" name="ctscan" accept=".jpg, .jpeg, .png" required>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
</p>
<html>
  
</html>
</p>
		</div>
		<div class="card">
			<h2>ASSESSMENT OF PATIENT:</h2>
			<p><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patient Assessment Form</title>
	<style>
		* {
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			margin-top: 20px;
		}

		form {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f2f2f2;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type=text],
		select,
		textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
		}

		button[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h1>Patient Assessment Form</h1>
	<form>
		<label for="patient-name">Patient Name:</label>
		<input type="text" id="patient-name" name="patient-name" required>

		<label for="age">Age:</label>
		<input type="text" id="age" name="age" required>

		<label for="gender">Gender:</label>
		<select id="gender" name="gender" required>
			<option value="">--Select Gender--</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>

		<label for="health-care-provider">Health Care Provider:</label>
		<select id="health-care-provider" name="health-care-provider" required>
			<option value="">--Select Health Care Provider--</option>
			<option value="doctor">Doctor</option>
			<option value="nurse">Nurse</option>
			<option value="therapist">Therapist</option>
			<option value="other">Other</option>
		</select>

		<label for="observation-assessment">Observation and Assessment of Patient:</label>
		<textarea id="observation-assessment" name="observation-assessment" rows="5" required></textarea>

		<label for="diagnosis">Diagnosis:</label>
		<textarea id="diagnosis" name="diagnosis" rows="5" required></textarea>

		<label for="treatment">Treatment:</label>
		<textarea id="treatment" name="treatment" rows="5" required></textarea>

		<label for="progress-notes">Progress Notes:</label>
		<textarea id="progress-notes" name="progress-notes" rows="5" required></textarea>

		<button type="submit">Submit Assessment</button>
	</form>
</body>
</html>
</p>
		</div>
	</div>
    
</body>
</html>

</body>
</html>