<?php 
include 'header.php';
include 'navbar.php';
?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
<<<<<<< HEAD
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
    }
    
=======
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    .content-section {
        background-color: white;
        padding: 25px;
        margin: 20px auto;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        max-width: 1200px;
    }

>>>>>>> 0b73ba4 (Configured line endings)
    nav.container {
        display: flex;
        justify-content: space-around;
        background-color: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
<<<<<<< HEAD
        margin-bottom: 30px;
    }
    
=======
        margin: 20px auto;
        max-width: 1200px;
    }

>>>>>>> 0b73ba4 (Configured line endings)
    .nav-link {
        color: #2c3e50;
        text-decoration: none;
        display: block;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        border-radius: 4px;
    }
<<<<<<< HEAD
    
    .nav-link:hover {
        color: #3498db;
    }
    
    .content-section {
        background-color: white;
        padding: 25px;
        margin-bottom: 30px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
=======

    .nav-link:hover {
        color: #3498db;
    }

>>>>>>> 0b73ba4 (Configured line endings)
    h1 {
        color: #2c3e50;
        text-align: center;
        margin: 30px 0;
        font-size: 2.5em;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    h2, h3 {
        color: #3498db;
        margin: 25px 0 15px;
        border-bottom: 2px solid #eee;
        padding-bottom: 8px;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 20px auto;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    .mission-vision {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 30px;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    .mission-vision > div {
        flex: 1;
        min-width: 300px;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        border-left: 4px solid #3498db;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    .core-values {
        columns: 2;
        column-gap: 30px;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    .core-values ul {
        list-style-type: none;
        padding: 0;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    .core-values li {
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    .core-values li:before {
        content: "✓";
        color: #27ae60;
        position: absolute;
        left: 0;
        font-weight: bold;
    }
<<<<<<< HEAD
    
=======

>>>>>>> 0b73ba4 (Configured line endings)
    @media (max-width: 768px) {
        nav.container {
            flex-direction: column;
        }
<<<<<<< HEAD
        
        .mission-vision > div {
            min-width: 100%;
        }
        
=======

        .mission-vision > div {
            min-width: 100%;
        }

>>>>>>> 0b73ba4 (Configured line endings)
        .core-values {
            columns: 1;
        }
    }
</style>

<<<<<<< HEAD
=======

>>>>>>> 0b73ba4 (Configured line endings)
<nav class="container">
    <a href="alumni.php" class="nav-link">Alumni</a>
    <a href="bom.php" class="nav-link">B.O.M</a>
    
</nav>

<div class="content-section">
    <h1>About Us</h1>
    <img src="https://www.kamuiruhigh.sc.ke/assets/school-a9d21467.jpg" alt="Front view of Kamuiru Boys High School campus">
    
    <div class="mission-vision">
        <div>
            <h3>School Motto</h3>
            <p><em>"Self discipline and determination leads to knowledge"</em></p>
        </div>
        
        <div>
            <h3>Mission of the School</h3>
            <p>To provide quality education which will develop the student to a holistic citizen.</p>
        </div>
        
        <div>
            <h3>Vision of the School</h3>
            <p>To be a school with outstanding educational excellence.</p>
        </div>
    </div>
    
    <h3>Core Values of the School</h3>
    <div class="core-values">
        <ul>
            <li>Discipline</li>
            <li>Integrity</li>
            <li>Creativity</li>
            <li>Teamwork</li>
            <li>Professionalism</li>
            <li>Self-motivation</li>
        </ul>
    </div>
</div>

<div class="content-section">
    <h2>School History</h2>
    <p>Kamuiru Boys High School opened its doors to learning in 1964 under the sponsorship of ACK Diocese of Mt Kenya East at its present location and was an offshoot of the original Kamuiru Intermediate School. The school is situated in Kamuiru village in Kirunda sub-location, Mutira South location, Kirinyaga central sub-county in Kirinyaga County.</p>
    
    <p>It is about 1km from Kagumo Town off the Kerugoya-Karatina highway. It is an extra county Boys Boarding school with a current enrollment of 1600 boys and 58 teachers. Another 10 peer teachers assist the teachers in the implementation of the curriculum and discipline.</p>
    
    <p>For a considerable period, the school offered Tuition from F1 to F4 (EACE) in a single stream up to 1975 when a second stream was realized. In 1985, the school was registered by the Ministry of Education to offer an Advanced Level of Education covering F5 and F6 (EAACE). This Advanced level lasted up to 1989 when the Education system changed to the current 8-4-4.</p>
    
    <p>The school currently boasts of having 7 streams. It sits on 19 acres of land. It offers a wide curriculum and co-curriculum activities.</p>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
