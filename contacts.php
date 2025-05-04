<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        color: #333;
        background-color: #f5f5f5;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    h1, h2 {
        color: #006400;
        text-align: center;
        margin-bottom: 20px;
    }
    .contact-section {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 30px;
    }
    .contact-info, .contact-form {
        flex: 1;
        min-width: 300px;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .contact-info p {
        margin: 15px 0;
        font-size: 16px;
    }
    .contact-info i {
        margin-right: 10px;
        color: #006400;
        width: 20px;
        display: inline-block;
        text-align: center;
    }
    .map-container {
        margin-top: 30px;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    iframe {
        border: none;
        border-radius: 8px;
        width: 100%;
        height: 400px;
    }
    .school-image {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #006400;
    }
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }
    textarea {
        min-height: 150px;
        resize: vertical;
    }
    button[type="submit"] {
        background-color: #006400;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    button[type="submit"]:hover {
        background-color: #004d00;
    }
    a {
        color: #006400;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
   <div class="contact-section">
        <div class="contact-info">
            <img src="https://kamuiruhigh.sc.ke/assets/front-1880dcc9.jpeg" alt="Kamuiru High School" class="school-image">
            <h2>Contact Information</h2>
            <p><i>📍</i><strong>Address:</strong> P.O. Box 123, Kamuiru, Kenya</p>
            <p><i>📞</i><strong>Phone:</strong> <a href="tel:+254799520412">+254 799 520412</a></p>
            <p><i>✉️</i><strong>Email:</strong> <a href="mailto:info@Kamuiruhigh.sc.ke">info@Kamuiruhigh.sc.ke</a></p>
        </div>
        
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form id="contactForm" action="submit-form.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Your full name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required placeholder="Your email address">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" placeholder="Message subject">
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" required placeholder="Type your message here..."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="map-container">
    <h2>Our Location</h2>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6736460581706!2d37.23793487496476!3d-0.48793059950728707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1828809067f15b6d%3A0x141d30add96fc0b1!2sKamuiru%20Boys%27%20High%20School!5e0!3m2!1sen!2ske!4v1744452033076!5m2!1sen!2ske" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?php include 'footer.php'; ?>
