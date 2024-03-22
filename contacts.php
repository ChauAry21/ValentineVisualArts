<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional CSS styles */
        #contact-form {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            height: 150px;
        }
        #submitBtn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #submitBtn:hover {
            background-color: #45a049;
        }
        #message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<header>
    <div class="container">
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="contact-form">
    <div class="container">
        <h2>Get in Touch</h2>
        <div id="message"></div>
        <form id="contactForm" method="POST">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="messageText" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" id="submitBtn">Submit</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 ValentineVisualArts. All rights reserved.</p>
    </div>
</footer>

<script>
$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'process_contact.php',
            data: formData,
            success: function(response) {
                $('#message').html(response);
            }
        });
    });
});
</script>

</body>
</html>
