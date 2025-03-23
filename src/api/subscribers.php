<?php
                $hs = "localhost";
                $username = "root";
                $password = " ";
                $database = "adons_db";

                // Create connection
                $conn = new mysqli($hs, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Check if form data is submitted
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'])) {
                    $name = $conn->real_escape_string($_POST['name']);
                    $email = $conn->real_escape_string($_POST['email']);

                    // Insert data into the database
                    $sql = "INSERT INTO subscribers_table (name, email) VALUES ('$name', '$email')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<h1>Thank you for joining the Adons Community!</h1>";
                    } else {
                        echo "<h1>Error: " . $conn->error . "</h1>";
                    }
                } else {
                    echo "<h1>Join the Adons Community today!</h1>";
                }

                // Close connection
                $conn->close();
            ?>