<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Website</title>
    <link rel="stylesheet" type="text/css" href="/portofolio/style.css">

    <!--boxicons link-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--google font link-->   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600;1,800&display=swap" rel="stylesheet">

    <!--header section-->
    <header>
        <a style="text-decoration:none" href="home" class="logo"><span>Arsy</span>'s Portofolio</a>

        <ul class="navbar">
            <a style="text-decoration:none" href="home">Home</a>
            <a style="text-decoration:none" href="skill">Skill</a>
            <a style="text-decoration:none" href="portof">Portofolio</a>
            <a style="text-decoration:none" href="about">About Me</a>
            <a style="text-decoration:none" href="contact">Contacts</a>
        </ul>
    </header>

    <!--home section-->
    <section class="home" id="home">
        <div class="home-text">
            <span>Information Technology Education</span>
            <h1>Arsy Kurnia Fitri</h1>
            <p>Student of Faculty of Computer Science, Universitas Brawijaya </p>
            <div class="main-btn">
                <a style="text-decoration:none" href="https://drive.google.com/file/d/1Q4Ecb_yOMvFAQrZkyq_5aovpTlAyTD79/view?usp=sharing" class="btn">Download CV</a>
            </div>
        </div>

        <div class="home-img">
            <img src="/portofolio/Profil.png" alt="">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-text">About<span> Me!</span>
            <h2>I'm Arsy!</h2>
            <p> I am a 3rd semester student at the Faculty of Computer Science, Universitas Brawijaya. 
                On campus, lecturers usually call students by their student identification number, my 
                student identification number is 225150600111003. I come from Tangerang city. I have 
                an interest in design, infographic design, posters, and I have even tried web design. 
                Listening to music is one of my hobbies, I can finish 100 pieces of music in a day. 
                My other hobbies are reading and writing stories. </p>
            <p> Besides being a student, I'm also a kpop fan. My favorite in the kpop world is the boy group Treasure. 
                Treasure has 10 members, and one of my favorites is Jeongwoo. </p>
        </div>
        <div class="card-container">
            <div class="card">
              <img src="/portofolio/kuliah.jpg" alt="Image 1">
              <div class="card-content">
                <h3>I am the student </h3>
                <p>I became a student starting from 2022 until now.</p>
              </div>
            </div>
        
            <div class="card">
              <img src="/portofolio/konser.jpg" alt="Image 2">
              <div class="card-content">
                <h3>I am the Kpop Fan</h3>
                <p>There are many things I like about treasure, one of which is its beautiful songs.</p>
              </div>
            </div>
          </div>
    </section>

    <section class="skill" id="skill">
        <div class="skill-text">My <span>Skills</span></div>
        <div class="skill-content">
            <div class="box">
                <div class="skill-icon">
                    <i class='bx bxs-megaphone'></i>
                </div>
                <div class="progress-bar-marketing">
                    <progress value="80" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
                </div>
                <h3>Marketing</h3>
            </div>
            <div class="box">
                <div class="skill-icon">
                    <i class='bx bxl-figma'></i>
                </div>
                <div class="progress-bar-figma">
                    <progress value="80" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
                </div>
                <h3>Figma</h3>
            </div>
            <div class="box">
                <div class="skill-icon">
                    <i class='bx bxl-java'></i>
                </div>
                <div class="progress-bar-java">
                    <progress value="50" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
                </div>
                <h3>Java</h3>
            </div>
            <div class="box">
                <div class="skill-icon">
                    <i class='bx bxl-javascript'></i>
                </div>
                <div class="progress-bar-javascript">
                    <progress value="55" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
                </div>
                <h3>JavaScript</h3>
            </div>
            <div class="box">
                <div class="skill-icon">
                    <i class='bx bxl-html5' ></i>
                </div>
                <div class="progress-bar-html">
                    <progress value="70" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
                </div>
                <h3>HTML</h3>
            </div>
            <div class="box">
                <div class="skill-icon">
                    <i class='bx bxl-css3' ></i>
                </div>
                <div class="progress-bar-css">
                    <progress value="70" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
                </div>
                <h3>CSS</h3>
            </div>
        </div>
    </section>
    <section class="portofolio" id="portofolio">
        <h2> Portofolio </h2>
        <div class="portofolio-box">
            <div class="porto">
              <img src="/portofolio/flowreach.png" alt="Image 1">
              <div class="porto-content">
                <h3>FlowReach </h3>
                <p>Flowreach design is made for the business of selling flowers online. 
                    The display is made in black to look elegant and professional.</p>
              </div>
            </div>
            <div class="porto">
              <img src="/portofolio/canfas.png" alt="Image 2">
              <div class="porto-content">
                <h3>CAnFAS</h3>
                <p>CANFAS is an app for taking notes. 
                    The application is equipped with CRUD (create, read, update, and delete)</p>
              </div>
            </div>
            <div class="porto">
                <img src="/portofolio/lumie.png" alt="Image 2">
                <div class="porto-content">
                  <h3>LUMIE </h3>
                  <p>LUMIE is designed with a happy and joyful theme.
                     In the LUMIE application there are plants that are likened to friends of the user.</p>
                </div>
            </div>
            <div class="porto">
                <img src="/portofolio/jeongwoopage.png" alt="Image 2">
                <div class="porto-content">
                  <h3>Jeongwoo</h3>
                  <p>This website contains Jeongwoo's biodata and career journey.</p>
                </div>
            </div>
            <div class="porto">
                <img src="/portofolio/cybershield.png" alt="Image 2">
                <div class="porto-content">
                  <h3>Cybershield </h3>
                  <p>Learning application about computer ethics and network 
                    security for social media users to better understand technological developments and ethics.</p>
                </div>
            </div>
          </div>
    </section>

    <section class="contact" id="contact">
        <h2>Interested in <span>working with me?</span></h2>
        <p>I will be happy if you want to work together and I will try my best to do so.</p>
        <div class="social">
            <a href="https://instagram.com/arsykurniaa?igshid=MzMyNGUyNmU2YQ=="><i class='bx bxl-instagram-alt'></i></a>
            <a href="https://x.com/aciicwangg?t=1yxsMvkQ73a7mFm_Q-zCQA&s=08"><i class='bx bxl-twitter'></i></a>
            <a href="https://open.spotify.com/user/31fiynzax3brqgj7xshayopib234?si=abb22c386d984280"><i class='bx bxl-spotify'></i></a>
            <a href="https://github.com/arsykurniaa"><i class='bx bxl-github'></i></a>
        </div>
    </section>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--custom js file link-->
    <script type="text/javascript" src="AnimatedPortofolio.js"></script>
</head>
<body>
    
</body>
</html>