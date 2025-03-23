<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
<meta property="og:site_name" content="AdonsKenya" /> <!-- website name -->
<meta property="og:site" content="AdonsKenya" /> <!-- website link -->
<meta property="og:title" content="AdonsKenya"/> <!-- title shown in the actual shared post -->
<meta property="og:description" content="AdonsKenya" /> <!-- description shown in the actual shared post -->
<meta property="og:image" content="AdonsKenya" /> <!-- image link, make sure it's jpg -->
<meta property="og:url" content="AdonsKenya" /> <!-- where do you want your post to link to -->
<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../media/images/logo.png">
    <title>TALK TO US ABOUT AN AD THAT MADE YOUR THEN DAYS</title>

    <!-- styles links -->
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/library.css">
</head>
<body>
    
    <div class="banner">
        <h1>All the content in this site is free of charge</h1>
    </div>

    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./library.php" >Library</a></li>
                <li><a href="./newsletter.php" >Newsletter</a></li>
                <li> <a href="./about.php" >About Adons</a></li>
                <li><a href="./contact.php" style="color: gray;">Contact us</a></li>       
            </ul>
        </nav>
    </header>
    <main>
        <section >
            <div class="video-div-header">
                <h1>Contact us</h1>
            </div>
            <div class="feedback">
                <form class="comment-form" method="POST" action="">
                    <input type="text" name="name" placeholder="Your name..." required>
                    <input type="email" name="email" placeholder="Your email..." required>
                    <textarea name="message" placeholder="Your message..." required></textarea>
                    <button type="submit" class="CTA-btn">Submit</button>
                </form>
            <?php
                $hs = "localhost";
                $username = "root";
                $password = "";
                $database = "adons_db";

                // Create connection
                $conn = new mysqli($hs, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $form_status = "";
                // Check if form data is submitted
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'],$_POST['message'])) {
                    $name = $conn->real_escape_string($_POST['name']);
                    $email = $conn->real_escape_string($_POST['email']);
                    $message = $conn->real_escape_string($_POST['message']);

                    // Insert data into the database
                    $sql = "INSERT INTO contact_table (name,email,message) VALUES ('$name','$email', '$message')";

                    if ($conn->query($sql) === TRUE) {
                        $form_status = "success";
                    } else {
                        $form_status = $conn->error; 
                    }
                } else {
                    $form_status = "error";
                }

                // Close connection
                $conn->close();
            ?>
            </div>
        </section>
    </main>

    <script>
        const formStatus = "<?php echo $form_status; ?>";
        if (formStatus === "success") {
            alert("Thank you for contacting us!");
        } else if (formStatus === "error") {
            alert("An error occurred. Please try again.");
        }
    </script>
</body>
</html>