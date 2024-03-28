<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValentineVisualArts - Photography</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom styles for the photography gallery */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }
        #banner {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 50px 0;
        }
        #banner h2 {
            margin: 0;
            font-size: 36px;
        }
        .photo-gallery-container {
            position: relative;
        }
        .photo-gallery {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: auto;
            gap: 20px;
            padding: 20px 0;
        }
        .photo-item {
            flex: 0 0 auto;
            width: 300px;
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .photo-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            vertical-align: middle;
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .photo-item img:hover {
            transform: scale(1.05);
        }
        .gallery-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.5);
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1000; /* Ensure buttons are above other content */
        }
        .gallery-button.left {
            left: 10px;
        }
        .gallery-button.right {
            right: 10px;
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
        <h2>Explore My Gallery</h2>
    </div>
</section>

<div class="photo-gallery-container">
    <div id="photo-gallery" class="container">
        <div class="photo-item">
            <img src="arizonateacar1.jpg" alt="Photo 1">
        </div>
        <div class="photo-item">
            <img src="arizonateacar2.jpg" alt="Photo 2">
        </div>
        <div class="photo-item">
            <img src="arizonateacar3.jpg" alt="Photo 3">
        </div>
        <!-- Add more photo items as needed -->
    </div>

    <button class="gallery-button left" onclick="scrollGallery('left')">&#10094;</button>
    <button class="gallery-button right" onclick="scrollGallery('right')">&#10095;</button>
</div>

<footer>
    <div class="container">
        <p>&copy; 2024 ValentineVisualArts. All rights reserved.</p>
    </div>
</footer>
