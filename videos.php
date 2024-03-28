<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValentineVisualArts - Videos</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom styles for the video gallery */
        #video-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        .video-item {
            margin-bottom: 20px;
        }
        .video-item iframe {
            width: 300px;
            height: 200px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1><a href="#">Kyle Love</a></h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="photography.php">Photography</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contacts.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="banner">
    <div class="container">
        <h2>Explore My Video Gallery</h2>
    </div>
</section>

<section id="video-gallery">
    <div class="container">
        <div class="video-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Add more video items as needed -->
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 ValentineVisualArts. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
