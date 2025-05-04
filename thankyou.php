<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
    .thankyou-container {
        max-width: 800px;
        margin: 60px auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        text-align: center;
    }

    .thankyou-container h1 {
        color: #006400;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    .thankyou-container p {
        font-size: 1.2em;
        color: #333;
        margin-bottom: 15px;
    }

    .thankyou-container a {
        display: inline-block;
        margin-top: 20px;
        color: #006400;
        font-weight: bold;
        text-decoration: none;
    }

    .thankyou-container a:hover {
        text-decoration: underline;
    }
</style>

<div class="thankyou-container">
    <h1>Thank You!</h1>
    <p>Your message has been successfully sent.</p>
    <p>We will get back to you as soon as possible.</p>
    <a href="index.php">Return to Home Page</a>
</div>

<?php include 'footer.php'; ?>
