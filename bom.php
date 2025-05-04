<?php 
include 'header.php';
include 'navbar.php';
?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .page-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    nav.classroom, nav.clasroom {
        display: flex;
        justify-content: center;
        gap: 30px;
        background-color: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }

    nav.classroom .nav-link, nav.clasroom .nav-link {
        text-decoration: none;
        color: #3498db;
        font-weight: bold;
        font-size: 1.1em;
        padding: 8px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    nav.classroom .nav-link:hover, nav.clasroom .nav-link:hover {
        background-color: #3498db;
        color: #fff;
    }

    h1 {
        color: #2c3e50;
        text-align: center;
        margin: 30px 0;
        font-size: 2.5em;
    }

    .container, .container-main {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .bom-member {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .bom-member:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    .bom-member img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        background-color: #f0f0f0;
        padding: 10px;
    }

    .member-info {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .member-title {
        color: #2c3e50;
        font-size: 1.3em;
        margin-bottom: 10px;
        font-weight: bold;
        border-bottom: 2px solid #eee;
        padding-bottom: 5px;
    }

    .member-name {
        color: #3498db;
        font-size: 1.2em;
        margin: 10px 0;
    }

    .member-bio p {
        color: #555;
        text-align: justify;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        nav.classroom, nav.clasroom {
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 2em;
        }

        .container, .container-main {
            grid-template-columns: 1fr;
        }

        .bom-member img {
            height: 250px;
        }
    }
</style>

<div class="page-wrapper">
    <nav class="classroom">
        <a href="alumni.php" class="nav-link">Alumni</a>
        <a href="bom.php" class="nav-link">B.O.M</a>
    </nav>

    <h1>Board of Management</h1>

    <div class="container">
        <!-- Board Chairman -->
        <div class="bom-member">
            <img src="https://www.kamuiruhigh.sc.ke/assets/BOMChairman-d814eba7.jpeg" alt="CPA. Kennedy Muriithi Ngiabi">
            <div class="member-info">
                <div class="member-title">BOARD CHAIRMAN</div>
                <div class="member-name">CPA. Kennedy Muriithi Ngiabi</div>
                <div class="member-bio">
                    <p>The current chairman is serving his second term as chair. He is an alumni of Kamuiru Boys High School. He is a professional accountant and the immediate former chairperson of Kirinyaga County Public Service Board where he served for a historic 6-year term uninterrupted.</p>
                    <p>He is most focused and passionate about the growth of the school. His infrastructure development blueprint is evident in form of tuition blocks, Two Storey Dormitory, Kei-apple fence, Cash crops and Pigs project as income generating initiatives among other notable projects. His Board of Management is targeting a 100% transition to the Universities.</p>
                </div>
            </div>
        </div>

        <!-- PA Chairman -->
        <div class="bom-member">
            <img src="https://www.kamuiruhigh.sc.ke/assets/PA-339f07df.svg" alt="Mr. Peter Ng'ang'a">
            <div class="member-info">
                <div class="member-title">PA CHAIRMAN</div>
                <div class="member-name">Mr. Peter Ng'ang'a</div>
                <div class="member-bio">
                    <p>He is professionally a qualified conservator with the Kenya Forest Service in charge. His passion for trees and tree cover is overwhelming. He was elected unanimously by all parents in 2023.</p>
                    <p>His 3 sons have gone through Kamuiru Boys High School successfully to the University. His last-born son is in school now in Form 3.</p>
                </div>
            </div>
        </div>

        <!-- Chief Principal -->
        <div class="bom-member">
            <img src="https://www.kamuiruhigh.sc.ke/assets/Mr.Rukenya-c835777b.jpg" alt="Mr. Rukenya J.K">
            <div class="member-info">
                <div class="member-title">CHIEF PRINCIPAL</div>
                <div class="member-name">Mr. Rukenya J.K</div>
                <div class="member-bio">
                    <p>Welcome to Kamuiru Boys High School where excellence in education meets a commitment to nurturing well-rounded individuals. At our school, we strive to provide a supportive and stimulating environment where students are empowered to achieve their academic, personal, and social goals.</p>
                    <p>Our dedicated team of educators works tirelessly to inspire curiosity, foster creativity, and cultivate the skills needed for success in an ever-changing world. We value collaboration, respect, and inclusivity, ensuring every student feels seen, heard, and valued.</p>
                </div>
            </div>
        </div>

        <!-- Deputy Principal Administration -->
        <div class="bom-member">
            <img src="https://www.kamuiruhigh.sc.ke/assets/DeputyDi-396b543b.svg" alt="Mr. Godfrey I. Kabwana">
            <div class="member-info">
                <div class="member-title">DEPUTY PRINCIPAL ADMINISTRATION</div>
                <div class="member-name">Mr. Godfrey I. Kabwana</div>
                <div class="member-bio">
                    <p>As the Administrative Deputy Principal, I oversee daily operations and student discipline at our school with over 1,500 students. My role involves curriculum implementation, fostering a positive learning environment, and maintaining student well-being.</p>
                    <p>We achieve this through strong relationships between teachers and students, along with academic support programs, alumni involvement, and dedicated exam preparation initiatives.</p>
                </div>
            </div>
        </div>

        <!-- Deputy Principal Academics -->
        <div class="bom-member">
            <img src="https://www.kamuiruhigh.sc.ke/assets/DeputyAcademic-5eeb2f44.svg" alt="Festus K. Wachira">
            <div class="member-info">
                <div class="member-title">DEPUTY PRINCIPAL ACADEMICS</div>
                <div class="member-name">Festus K. Wachira</div>
                <div class="member-bio">
                    <p>As Academic Deputy Principal, I spearhead initiatives to ensure a thriving learning environment. My focus is on curriculum development, instructional leadership, teacher supervision, and student assessment.</p>
                    <p>Our goal is to empower students through a modern, engaging curriculum and foster a culture of research and innovation among teachers.</p>
                </div>
            </div>
        </div>

        <!-- Deputy Principal Boarding -->
        <div class="bom-member">
            <img src="https://www.kamuiruhigh.sc.ke/assets/FrancisKiungitu-dbc5d3a3.jpeg" alt="Mr. Francis M. Kiunguti">
            <div class="member-info">
                <div class="member-title">DEPUTY PRINCIPAL BOARDING</div>
                <div class="member-name">Mr. Francis M. Kiunguti</div>
                <div class="member-bio">
                    <p>As the Deputy Principal in charge of Boarding, I am proud to share with you the developments and ongoing efforts within our school's boarding section. Our boarding program provides a safe and supportive environment for student growth.</p>
                    <p>We remain dedicated to improving the boarding experience and ensuring that Kamuiru Boys continues to produce well-rounded, disciplined, and successful individuals.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
