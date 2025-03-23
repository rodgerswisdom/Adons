<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
      <!-- SEO Meta Tags -->
      <meta name="description" content="Adons - Re-Connect with memories">
      <meta name="author" content="Rodgers Wisdom">
    <!--  -->
<!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
<meta property="og:site_name" content="AdonsKenya" /> <!-- website name -->
<meta property="og:site" content="AdonsKenya" /> <!-- website link -->
<meta property="og:title" content="AdonsKenya"/> <!-- title shown in the actual shared post -->
<meta property="og:description" content="AdonsKenya" /> <!-- description shown in the actual shared post -->
<meta property="og:image" content="AdonsKenya" /> <!-- image link, make sure it's jpg -->
<meta property="og:url" content="AdonsKenya" /> <!-- where do you want your post to link to -->
<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->


    <title>RE-CONNECT WITH MEMORIES, MOST BORING AD OF ALL TIME</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="/media/images/logo.png">

    <!-- styles links -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/library.css">

    <!-- scripts links -->
    <script src="js/index.js"></script>


</head>
<body>
    <div class="banner">
        <h1>All the content in this site is free of charge</h1>
    </div>

    <header>
        <nav>
            <ul>
                <li><a style="color: gray;">Home</a></li>
                <li><a href="./pages/library.php">Library</a></li>
                <li><a href="./pages/newsletter.php">Newsletter</a></li>
                <li><a href="./pages/about.php">About Adons</a></li>
                <li><a href="./pages/contact.php">Contact us</a></li>       
            </ul>
        </nav>
    </header>

    <div class="spacer1"></div>

    <main>
        <section>
            <div class="landing">
                <h1>Adons,</h1>
                <h2>Re-Connect with memories</h2>
            </div>
            <div class="CTA">
            <a href="/pages/library.html"> <button id="CTA-btn">Go to Library</button></a>
            </div>
        </section>

        <div class="spacer1"></div>
        <div class="spacer1"></div>

        <section>
            <div class="glitch">
                <div class="glitch-header">
                    <h1>Most boring Ad of all time !!!</h1>
                </div>
                <div class="glitch-image">
                    <img src="media/images/juicyfruit-juicy.gif" alt="most broing ad of all time" class="g-image">
                </div>
                <div class="glitch-intro">
                    <h1> Crew! You've all seen that Juicy Fresh ad, right? 
                   This guy who's about as exciting as watching grass grow? Huh! 
                    <h1>The dude's face is probably plastered in your mind like yesterday's meme...</h1>
                    <h1 style="font-size: 56px;">😂😂😂</h1>
                </div>
                <div class="CTA">
                    <a href="/pages/library.html"><button id="CTA-btn">Let's dissect the Guy</button></a>
                </div>
                <div class="spacer2"></div>
            </div>
        </section>
        <section>
            <div class="video-div-header">
                <h1>Want to join the Adons Community?</h1>
            </div>
            <div class="feedback">
                <form class="comment-form" method="POST" action="">
                    <input type="text" name="name" placeholder="Your name..." required>
                    <input type="email" name="email" placeholder="Your email..." required>
                    <button type="submit" id="CTA-btn">Submit</button>
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
            </div>
        </section>
        <div class="spacer2"></div>
        <hr />
        <section>
            <div class="support">
                <h1 style="font-size: 56px;">Support</h1>
                    <div class="paypal">
                        <h2>Mpesa: +254 712 930 121</h2> 
                    </div>

                    <div class="paypal">
                        <ion-icon name="logo-paypal" size="large"></ion-icon>
                        <h2>PayPal: trulyhawona@gmail.com</h2>
                    </div>
                
            </div>
        </section>
        <hr />
       
    </main>
    
    <hr />
    <div class="spacer2"></div>
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

