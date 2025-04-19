<?php
    $insert = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "goa";

        // Create connection
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed due to " . mysqli_connect_error());
        }

        // Retrieve form data
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        // SQL query to insert data into the database
        $sql = "INSERT INTO trip (name, age, gender, email, phone, other, dt) 
                VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            $insert = true; // ✅ Data successfully inserted
        } else {
            echo "ERROR: $sql <br> $conn->error";
        }

        // Close the connection
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        /* ✅ Initially Hide Success Message */
        #successMessage {
            display: none;
            color: green;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Goa Trip Form</h2>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>

        <!-- ✅ Success Message (Hidden by Default) -->
        <p id="successMessage">
            Thanks for submitting your form. We are happy to see you!
        </p>

        <form action="Goa.php" method="post" id="tripForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" placeholder="Enter your name" name="name" id="name" required />
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" placeholder="Enter your age" name="age" id="age" required />
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" placeholder="Enter your gender" name="gender" id="gender" required />
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Enter your email" name="email" id="email" required />
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" placeholder="Enter your phone" name="phone" id="phone" required />
            </div>

            <div class="form-group">
                <label for="desc">Other:</label>
                <textarea name="desc" id="desc" rows="4" placeholder="Enter description here" required></textarea>
            </div>

            <div class="btn-group">
                <button type="submit" class="submitbtn">Submit</button>
                <button type="reset" class="resetbtn">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
<!-- http://localhost/phpmyadmin/index.php?route=/sql&db=goa&table=trip&pos=0 -->
<!-- http://localhost/cwh/Goa.php -->