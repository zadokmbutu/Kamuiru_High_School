<?php include 'header.php';?>
<?php include 'navbar.php';?>
<style>
        /* Global Styles */
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Slideshow */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .mySlides img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from { opacity: .4; } 
            to { opacity: 1; }
        }

        /* Video Section */
        .center-video {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            padding: 20px;
        }

        /* Mission Section */
        .container4 {
            text-align: center;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }
        /* Responsive Adjustments */
        @media only screen and (max-width: 600px) {
            .container {
                flex-direction: column;
                gap: 5px;
            }
            .mySlides img {
                height: 250px;
            }
            .center-video iframe {
                width: 100%;
                height: auto;
            }
        }
    </style>
<body>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/group-b7f6ed55.svg" alt="School Group">
            <div class="text">Kamuiru High School Students</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/class2-6d7a3ede.svg" alt="Classroom">
            <div class="text">Modern Classrooms</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/WhatsApp%20Image%202025-03-21%20at%208.36.16%20PM-1131d1db.jpeg" alt="School Event">
            <div class="text">Annual Sports Day</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/class9-5d69258b.svg" alt="Laboratory">
            <div class="text">Science Laboratory</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/out-7552d4c0.svg" alt="School Grounds">
            <div class="text">School Grounds</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/WhatsApp%20Image%202025-03-21%20at%208.36.35%20PM-29116ba0.jpeg" alt="Cultural Day">
            <div class="text">Cultural Day Celebrations</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/WhatsApp%20Image%202025-03-21%20at%208.36.54%20PM-1520d48a.jpeg" alt="Library">
            <div class="text">School Library</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">8 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/WhatsApp%20Image%202025-03-21%20at%208.37.19%20PM-f10cd420.jpeg" alt="Dining Hall">
            <div class="text">Dining Hall</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">9 / 9</div>
            <img src="https://kamuiruhigh.sc.ke/assets/deputy_job_principle-2852a58c.jpeg" alt="Principal">
            <div class="text">Principal and Deputy</div>
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <!-- Video Section -->
    <div class="center-video">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/IuWdauB4sA4?si=w13J2ZsteXlOE1A7" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Mission Section -->
    <div class="container4">
        <h3>Our Mission</h3>
        <p>To provide quality education which will develop the student into a holistic citizen.</p>
    </div>
  <script>
        // Slideshow Functionality
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            if (dots[slideIndex-1]) {
                dots[slideIndex-1].className += " active";
            }
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }
    </script>





</body>
</html>
<?php include 'footer.php';?>