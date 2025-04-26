<style>
<<<<<<< HEAD
        .main {
            background-color: rgb(20, 105, 202);
            display: flex;
            flex-direction: row;
            color: white;
            justify-content: space-around;
            align-items: center;
            padding: 8px;
        }

        .container {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        .site-logo img {
            height: 100px;
            width: auto;
        }
</style>

 
    <nav class="main">
        <div class="site-logo">
            <img src="https://th.bing.com/th/id/OIP.6NKjpkN9h3nsc-OCNntSGgHaHa?w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Kamuiru High School Logo"/>
        </div>
        <div class="container">
            <div><a href="index.php" style="color: white; text-decoration: none;">Home</a></div>
            <div><a href="about_us.php" style="color: white; text-decoration: none;">About Us</a></div>
            <div><a href="academics.php" style="color: white; text-decoration: none;">Academics</a></div>
            <div><a href="contacts.php" style="color: white; text-decoration: none;">Contact Us</a></div>
            <div><a href="fees.php" style="color: white; text-decoration: none;">Fees Structure</a></div>
        </div>
    </nav>
=======
    nav.main {
        background-color: rgb(20, 105, 202);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 40px;
        color: white;
        flex-wrap: wrap;
    }

    .site-logo {
        flex: 0 0 auto;
    }

    .site-logo img {
        height: 80px;
        width: auto;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 12px;
        transition: background-color 0.2s ease;
    }

    .nav-links a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 4px;
    }

    .login-btn {
        background-color: #28a745;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .login-btn:hover {
        background-color: #218838;
    }

    @media (max-width: 768px) {
        nav.main {
            flex-direction: column;
            align-items: center;
        }

        .nav-links {
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-top: 10px;
        }
    }
</style>

<nav class="main">
    <div class="site-logo">
        <img src="https://th.bing.com/th/id/OIP.6NKjpkN9h3nsc-OCNntSGgHaHa?w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Kamuiru High School Logo"/>
    </div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about_us.php">About Us</a>
        <a href="academics.php">Academics</a>
        <a href="contacts.php">Contact Us</a>
        <a href="fees.php">Fees Structure</a>
        <a href="login.php" class="login-btn">Login</a>
    </div>
</nav>
>>>>>>> 0b73ba4 (Configured line endings)
