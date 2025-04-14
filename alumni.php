<?php
include 'header.php';
include 'navbar.php';
// Your PHP code here (if any)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kamuiru Alumni Association</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }
        
        nav.classroom {
        display: flex;
        justify-content: space-around;
        background-color: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
        .main-container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
        }
        
        .content-section {
            background-color: white;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        
        .content-section img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        h2 {
            color: #2c3e50;
            text-align: center;
            margin: 30px 0 20px;
            font-size: 28px;
        }
        
        h3 {
            color: #2c3e50;
            margin: 15px 0 5px;
            font-size: 22px;
        }
        
        h4 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 15px;
            font-size: 24px;
        }
        
        h5 {
            color: #3498db;
            margin-top: 25px;
            margin-bottom: 15px;
            font-size: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }
        
        p {
            text-align: justify;
            margin-bottom: 15px;
        }
        
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }
        
        .gallery img {
            flex: 1 1 30%;
            min-width: 200px;
            border-radius: 5px;
        }
        
        .benefits-list {
            padding-left: 20px;
        }
        
        .benefits-list li {
            margin-bottom: 15px;
            list-style-type: none;
            position: relative;
            padding-left: 25px;
        }
        
        .benefits-list li:before {
            content: "•";
            color: #3498db;
            font-size: 20px;
            position: absolute;
            left: 0;
            top: -2px;
        }
        
        .success-story {
            background-color: white;
            padding: 25px;
            margin: 30px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
            max-width: 800px;
            width: 90%;
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
            border: 3px solid #3498db;
        }
        
        .profile-title {
            text-align: center;
            color: #7f8c8d;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial {
            font-style: italic;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
        }
    </style>
</head>
<body>
<nav class="classroom">
    <a href="alumni.php" class="nav-link">Alumni</a>
    <a href="bom.php" class="nav-link">B.O.M</a>
    
</nav>

    <div class="main-container">
        <div class="content-section">
            <img src="https://www.kamuiruhigh.sc.ke/assets/all%20(1)-c51dc7a6.jpeg" alt="Kamuiru High School">
            <h4>KAMUIRU ALUMNI ASSOCIATION</h4>
            <h5>Who are we?</h5>
            <p>Kamuiru Boys High School student alumni association is formed by graduates of Kamuiru High School. This association provides a platform for young alumni to stay connected with each other, even after they have graduated from Kamuiru.</p>
            
            <p>One of the main goals of Kamuiru alumni association is to create a community that extends beyond the years spent at the educational institution. By bringing together graduates from various years, backgrounds, and disciplines, the association fosters a sense of belonging and shared identity among its members.</p>
            
            <p>Kamuiru alumni will often form lifelong friendships and professional connections through their participation in association activities and events. Through events such as homecoming celebrations, awards ceremonies, and alumni recognition programs, the association celebrates the achievements of alumni and honors their contributions to the institution's legacy.</p>
            
            <p>By upholding institutional traditions and promoting pride in the school, the association reinforces a sense of identity and belonging among alumni.</p>
        </div>
        
        <div class="content-section">
            <div class="gallery">
                <img src="https://www.kamuiruhigh.sc.ke/assets/all%20(2)-9e514b53.jpeg" alt="Kamuiru High School Gallery 1">
                <img src="https://www.kamuiruhigh.sc.ke/assets/all%20(1)-c51dc7a6.jpeg" alt="Kamuiru High School Gallery 2">
                <img src="https://www.kamuiruhigh.sc.ke/assets/all%20(3)-1a709c9d.jpeg" alt="Kamuiru High School Gallery 3">
            </div>
        </div>
        
        <div class="content-section">
            <h5>WHY JOIN THE ALUMNI ASSOCIATION?</h5>
            <ul class="benefits-list">
                <li>
                    <strong>Networking Opportunities</strong><br>
                    Student alumni associations facilitate networking opportunities for recent graduates. They create events, social gatherings, and online platforms where alumni can connect professionally and personally. These connections can lead to job opportunities, mentorship, and lifelong friendships.
                </li>
                <li>
                    <strong>Professional Development</strong><br>
                    Student alumni associations often organize workshops, seminars, and panels focused on professional development topics. Alumni may share their experiences and expertise to help recent graduates navigate the transition from high school to college or the workforce.
                </li>
                <li>
                    <strong>Mentorship Programs</strong><br>
                    Many student alumni associations establish mentorship programs where recent graduates can receive guidance from more experienced alumni. Mentors may offer advice on career paths, job searching, graduate school applications, and other post-graduation endeavors.
                </li>
                <li>
                    <strong>Reunion Planning</strong><br>
                    Kamuiru Student alumni associations often take the lead in organizing class reunions and other alumni events. These gatherings provide opportunities for recent graduates to reconnect with classmates, reminisce about their high school experiences, and celebrate their accomplishments.
                </li>
                <li>
                    <strong>School Support and Advocacy</strong><br>
                    Kamuiru Student alumni associations provide support to school initiatives, events, and programs. They normally volunteer at school events, serve as guest speakers, or assist with recruitment efforts to attract new students.
                </li>
                <li>
                    <strong>Community Service Projects</strong><br>
                    Kamuiru Student alumni associations frequently engage in community service projects as a way to give back to their communities and demonstrate their commitment to social responsibility. These projects may involve volunteering at local charities, organizing fundraising events, or participating in environmental initiatives.
                </li>
            </ul>
        </div>
    </div>
    
    <div class="success-story">
        <h2>SUCCESS STORY</h2>
        <img src="https://www.kamuiruhigh.sc.ke/assets/Samuelalumi-939d62c2.jpeg" alt="Samuel Mwangi" class="profile-img">
        <h3>Samuel Mwangi</h3>
        <h5 class="profile-title">Works at NSSF Kenya</h5>
        <div class="testimonial">
            <p>"My name is Samuel Mwangi, a proud alumni of Kamuiru Boys High School. I was the School Captain in 2015 when we performed exemplarily in KCSE. Currently I work with the NSSF Kenya.</p>
            
            <p>Recently we launched Kamuiru Boys Alumni Association where we aim to bring together all old students of this great institution to participate in mentorship, development and progressive governance of our alma mater as we also aim to socialize and network through sustainable collaborations.</p>
            
            <p>Behold Kamuiru Boys, a place of purpose."</p>
        </div>
    </div>

<?php include 'footer.php';?>