# Multi-Page Website Project

## Objective:
The objective of this assignment is to create a multi-page website using HTML and CSS that focuses on a specific area of interest. Students will be required to incorporate various media elements, such as images, videos, and audio, using appropriate HTML tags.

## Instructions:

### Choose Your Area of Interest:
Select a specific area of interest for your website. It could be anything from agriculture, medicine, tourism, technology, sports, or any other field you are passionate about.

### Create a Five-Page Website:
Develop a website consisting of five pages. Each page should represent a different aspect or sub-topic related to your chosen area of interest. Examples include: Home, About Us, Services, Gallery, Contact.

### HTML Structure:
Ensure that each page has a clear HTML structure with proper use of tags, including `<html>`, `<head>`, `<title>`, `<body>`, `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`, etc.

### CSS Styling:
Apply CSS styling to enhance the visual appeal of your website. Use external CSS files to keep your code organized. Consider font styles, colors, margins, padding, and other design elements.

### Images:
Include relevant images on each page. Utilize the `<img>` tag to display images. Ensure that the images are appropriately sized and enhance the overall aesthetic of your website.

### Videos:
Embed at least one video related to your area of interest. You can use the `<video>` tag to embed a local video file or `<iframe>` for embedding a video from platforms like YouTube or Vimeo.

### Audio:
Integrate at least one audio element. This could be a background music track, an interview related to your topic, or any other relevant audio content. Use the `<audio>` tag for this purpose.

### Navigation:
Implement a navigation menu that allows users to easily move between the different pages. Use the `<nav>` tag and consider styling it with CSS to make it visually appealing.

### Responsive Design:
Ensure that your website is responsive. Use media queries in your CSS to adapt the layout for different screen sizes, such as mobile phones, tablets, and desktops.

## Project Structure:
- `index.html`: Home page
- `about.html`: About Us page
- `services.html`: Services page
- `gallery.html`: Gallery page
- `contact.html`: Contact page
- `css/`: Directory for CSS files
  - `styles.css`: Main CSS file
- `images/`: Directory for images
- `videos/`: Directory for videos
- `audio/`: Directory for audio files

## Setup Instructions:
1. Clone this repository.
2. Open the project directory in your preferred code editor.
3. Customize the HTML and CSS files according to your area of interest.
4. Add images, videos, and audio files to their respective directories.
5. Test your website to ensure proper functionality and responsiveness.

To view the demo site, click [here](https://rodgerswisdom.github.io/Adons/).

Happy coding! 🚀

http://localhost/Adons/public/


adons_project/
│── public/                 # Public-facing assets
│   ├── css/                # Stylesheets
│   │   ├── styles.css      # Main CSS file
│   ├── js/                 # JavaScript files
│   │   ├── main.js         # Main JavaScript logic
│   ├── images/             # Stores ad images
│   ├── uploads/            # Uploaded ad images/videos
│   ├── index.php           # Homepage (Displays ads)
│   ├── ad.php              # Individual ad page
│   ├── subscribe.php       # Subscription page
│   ├── contact.php         # Contact form page
│
│── src/                    # Source code
│   ├── db/                 # Database interactions
│   │   ├── config.php      # Database connection
│   │   ├── ads.php         # Ads-related DB operations
│   │   ├── comments.php    # Comments-related DB operations
│   │   ├── subscribers.php # Subscription logic
│   │   ├── contact.php     # Contact form processing
│   │
│   ├── api/                # API endpoints
│   │   ├── upload_ad.php   # Upload an ad
│   │   ├── fetch_ads.php   # Fetch all ads
│   │   ├── fetch_comments.php # Get comments for an ad
│   │   ├── add_comment.php # Add a comment
│   │   ├── subscribe.php   # Subscribe a user
│   │   ├── contact.php     # Process contact messages
│
│── scripts/                # Python scripts (Optional)
│   ├── email_newsletter.py # Automates subscriber emails
│   ├── analytics.py        # Data analysis on ads & comments
│
│── db/                     # Database setup
│   ├── schema.sql          # SQL file to set up database tables
│
│── assets/                 # External libraries or fonts
│
│── .env                    # Environment variables (DB credentials, API keys)
│── README.md               # Documentation
