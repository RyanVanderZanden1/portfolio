<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <meta name="description">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/portfolio.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<!-- navigation php header -->
<div class="header">
    <div class="inner_header">
    <?php include 'includes/header.inc.html.php'; ?>
    </div>
</div>
<div id="wrapper">
    <main>
        <h2>About</h2>

        <p>My name is Ryan VanderZanden. I am currently a student at Portland Community College.
            I recently completed my Website Development and Design Associates of Applied Science. I am looking for a front end developer position in the industry.</p>

        <h2>Skills</h2>

        <p>Over my time at PCC, I have learned how to use HTML, CSS, PHP, Javascript and jQuery. Through learning these I have done projects from my classes taken
            at pcc. From the courses I have taken at PCC, I have made projects involving my skills in Website Development.</p>

        <h2>Projects</h2>

        <p>These are some projects that I have worked on at PCC. Some of these projects involve PHP, Javascript and jQuery.</p>

        <h3>Ace in the Hole</h3>
        
        <!-- image overlay -->
        <div class="container">
        <img src="./img/ace.JPG" class="projects" alt="aceinthehole">
        <div class="middle">
            <div class="text"><a href="http://ryanvanderzanden.webhostingforstudents.com/cas222/ace/home.html.php">Click here</a></div>
        </div>
        </div>

        <p> This project was made for a class I took during the Summer of 2020. Ace in the Hole is a MultiSport Event website.
            It's content is focused around the information about the event, sign ups, questions, etc.
            Within this website I've incorporated a Javascript slideshow, widgets and forms. The goal for this project
            was to work with an RFP and create a website out of it within specific time frames with a status report.</p>

        <h3>Hollywood Video</h3>
        
        <div class="container">
        <img src="./img/hvideo.jpg" class="projects" alt="hollywoodvideo">
        <div class="middle">
            <div class="text"><a href="http://ryanvanderzanden.webhostingforstudents.com/cas242/week10/">Click Here</a></div>
        </div>
        </div>
        

        <p>This website is a final project that I did during the Winter of 2020, where I recreated a Hollywood Video website.
            Hollywood video was a chain movie and video game rental store that went out of business.
            It's content is focused on the information about the store, prices, and it's newest releases.</p>

        <h3>Burrito Masala</h3>
        
        <div class="container">
        <img src="./img/masala.jpg" class="projects" alt="burritomasala">
        <div class="middle">
            <div class="text"><a href="http://ryanvanderzanden.webhostingforstudents.com/cas242/week8/">Click here</a></div>
        </div>
        </div>

        <p>This website is focused on a food truck called Burrito Masala. Its content is focused on its menu and call in orders.
            I made this project during the Winter of 2020.</p>

        <h3>jQuery Calculator</h3>
        
        <div class="container">
        <img src="./img/calc.JPG" class="projects" alt="calculator">
        <div class="middle">
            <div class="text"><a href="http://ryanvanderzanden.webhostingforstudents.com/cas213/week6/week6.html">Click here</a></div>
        </div>
        </div>

        <p>I made a simple jQuery calculator that takes two values and you can either add, subtract, multiply or divide
            them to get the answer. This project was made during the Fall of 2020.</p>

        <h3>jQuery Photo Gallery</h3>
        
        <div class="container">
        <img src="./img/gallery.JPG" class="projects" alt="gallery">
        <div class="middle">
            <div class="text"><a href="http://ryanvanderzanden.webhostingforstudents.com/cas213/week8/week8.html">Click here</a></div>
        </div>
        </div>

        <p>This is a jQuery photo gallery that allows you to click on other images within the menu to view them in a larger resolution.
            I made this project during the Fall of 2020.</p>

        <h3>Portland Historical Tours</h3>
        
        <div class="container">
        <img src="./img/tours.JPG" class="projects" alt="tours">
        <div class="middle">
            <div class="text"><a href="http://ryanvanderzanden.webhostingforstudents.com/cas225/pht/">Click here</a></div>
        </div>
        </div>

        <p>For this project my task was to implement php to a pre existing website that had its design.
            The php code I implemented was the websites content and its contact form. I did this project during the Winter quarter in 2020.</p>

        <h2>Contact</h2>

        <div class="label">

            <form action="./contact.php" method="post">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" ><br><br>

                <label for="email">E-mail: </label>
                <input type="text" id="email" name="email"><br><br>

                <label for="comment">Message: </label>
                <textarea id="comment" rows="3" cols="30" name="comment"></textarea><br><br>

                <input type="submit" id="but" value="Submit">
            </form>
        </div>
    </main>
</div>
    <?php include 'includes/footer.inc.html.php'; ?>
</body>
</html>