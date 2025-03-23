<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../media/images/logo.png">

     <!-- styles links -->
     <link rel="stylesheet" href="../css/home.css">
     <link rel="stylesheet" href="../css/header.css">
     <link rel="stylesheet" href="../css/footer.css">
     <link rel="stylesheet" href="../css/library.css">
     <link rel="stylesheet" href="../css/newsletter.css">
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
                <li><a href="./newsletter.php" style="color: gray;">Newsletter</a></li>
                <li> <a href="./about.php">About Adons</a></li>
                <li><a href="./contact.php">Contact us</a></li>       
            </ul>
        </nav>
    </header>

    <div class="spacer1"></div>
    <main>
        <section>
            
            <div class="screen">
                <div class="newsletter-card">
                    <h1 style="font-size: 56px;">Subscribe to our Newsletter</h1>
                    <!-- form -->
                    <form method="POST" action="">
                        <input type="email" name="email" placeholder="john@example.com" required>
                        <button type="submit" id="CTA-btn">Subscribe</button>
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

                // Check if form data is submitted
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
                    $email = $conn->real_escape_string($_POST['email']);

                    // Insert data into the database
                    $sql = "INSERT INTO newsletters_table (user_email) VALUES ('$email')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<h1>Thank you for subscribing to our Newsletter!</h1>";
                    } else {
                        echo "<h1>Error: " . $conn->error . "</h1>";
                    }
                } else {
                    echo "<h1>Subscribe to our Newsletter</h1>";
                }

                // Close connection
                $conn->close();
            ?>
                </div>
                <div class="newsletter-description">
                    <h1 style="font-size: 56px;">Adons Weekly Newsletter: Dive into Nostalgia! 🌟</h1>
    
                    <h1>Hey there, Adons fam! </h1>
                
                    <h1>Are you ready to dive into the nostalgia pool and relive those iconic ads from our past? We've got just the thing for you – our weekly newsletter delivered straight to your inbox! Here's what you can expect:</h1>
                
                    <h1>🤔 Users' Ad Thoughts</h1>
                    <h1>Hear what your fellow Gen Zers have to say about the ad that took over the conversation during the week. Get insights, opinions, and maybe even a dose of humor!</h1>
                
                    <h1>🎬 Ad Intro & Review</h1>
                    <h1>Each week, we'll introduce you to a blast from the past – an ad that's sure to tug at your heartstrings or tickle your funny bone. Plus, we'll provide a link to our in-depth review, where we break down the ad's impact and significance.</h1>
                
                    <h1>💭 General Summary & Feelings</h1>
                    <h1>Explore the ad's overall vibe and the emotions it evokes. Did it make you laugh, cry, or cringe? Share your thoughts and join the conversation!</h1>
                
                    <h1>📝 Feedback & Chat Space</h1>
                    <h1>Your opinions matter! We want to hear from you, so we've included a handy feedback form and chat space where you can leave comments, suggestions, or simply connect with other readers.</h1>
                
                    <h1>🔮 Sneak Peek</h1>
                    <h1>And because we love keeping you on your toes, we'll also tease a glitch of the upcoming week's ad. Get ready to guess what's in store for next week's trip down memory lane!</h1>
                </div>
            </div>
        </section>
        <div class="spacer2"></div>
        <section>
           
        </section>
    </main>
    <!-- <div class="spacer1"></div> -->
    <section>
        <footer> 
            <div class="icons">     
                <div class="linked-in" >  
                    <ion-icon name="logo-linkedin" ></ion-icon>
                </div> 
                <div class="twitter">
                    <ion-icon name="logo-twitter" ></ion-icon>
                </div>
                <div class="github">
                    <ion-icon name="logo-github" ></ion-icon>
                </div>
            </div> 
        </footer>

    </section>
    <div class="banner">
        <h1>&copy; 2024 Rodgers Wisdom. All Rights Reserved.</h1>
    </div>
<!-- ionicons links-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>