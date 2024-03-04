<?php

include "config.php";


session_start();

if(isset($_SESSION['loggedin'])){
    $name = "logged in";
    $link = "index.php";
}
else{
    $name = "login";
    $link ="login.php";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="style.css"/>
    <link rel="stylesheet" href="media.css"/>

</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Sadik Zaman Abir</div>
        <div>
            <ul class="nav-links">
                <li ><a href="#about"><b>About</b></a></li>
                <li><a href="#experience"><b>Experience</b></a></li>
                <li><a href="#projects"><b>Projects</b></a></li>
                <li><a href="#contacts"><b>Contacts </b></a></li>
            </ul>


        </div>
    </nav>
    <nav id="hnav">
    <div class="logo">Sadik Zaman Abir</div>
    <div class="hmenu">
        <div class="hicon" onclick="togglemenu()">
        <span></span>
        <span></span>
        <span></span>
    
    </div>
    <div class="menulinks">
        <li><a href="#about" onclick="togglemenu()">About</a></li>
        <li><a href="#experience" onclick="togglemenu()">Experience</a></li>
        <li><a href="#projects" onclick="togglemenu()">Projects</a></li>
        <li><a href="#contacts" onclick="togglemenu()">Contacts</a></li>
    </div>
    </div>

   
    

    </nav>
    <section id="profile" >
        <div class="secpiccon" >
            <img src="./img2.jpg" class="clsimg">
        </div>
        <div class="sec_text">
            <p class="sec_text_p1">Hello,I am</p>
            <h1 class="sec_text_p1">Sadik Zaman Abir</h1>
            <p class="sec_text_p2">A Student,Programmer and Developer</p>
            <div class="btn_container">
            <button class="btn btn_colour2" onclick="window.open('./')">
                Download CV
            </button>
            <button class="btn btn_colour1" onclick="location.href('./#contacts')">
                Contact info
            </button>

            <button><a href="<?php echo $link?>"><?php echo $name?></a></button>
        
            </div>
        </br>

            
            <div id="socials_con">
            
            
        
                <img src="./git.png" alt="My git" class="icon" onclick="location.href='https://github.com/Abir2007049'" style="padding: 5px;">
                <img src="./facebook.png" alt="facebook" class="icon" onclick="location.href='https://facebook.com'" style="padding: 5px;">
                <img src="./cf.png" alt="cf" class="icon" onclick="location.href='https://codeforces.com/profile/Abir2007049'" style="padding: 5px;">
            </div>
        </div>
    </section>
    <section id="about">
        <p class="sec_text_p1">Get to know more</p>
        <h1 class="sec_text_p1">About Me</h1>
        <div class="sec_con">
            <div class="sec_pic_con">
                <img src="./img4.jpg" class="about_pic">
            </div>
            
            <div class="about_det_con">
                <div class="about_con">
                    <div class="det_con" style="background: rgb(195, 10, 246)">
                        <img src="badge.jpg" class="icon">
                        <h3>Experience</h3>
                        <p></p>
                    </div>
                    <div class="det_con" style="background: rgb(195, 10, 246)" >
                        <img src="edu.png" class="icon" >
                        <h3>Education</h3>
                        <p>B.Sc. (curently undergraduation)<br>M.Sc. (Not yet)</p>
                    </div>    
                </div>
                <div class="text_con">
                    <p style="color: white;"><br><img src="kuet.png" class="icon"> Currently I'm studying  B.Sc. Honours on CSE in Khulna University of Engineering & Technology.
                        It is a four years' course with 162 credits.
                        

                    </p>

                </div>
            </div>
            
        </div>
        <img src="arrpng.png" class="icon arrow" onclick="location.href='./#experience'">
    </section>
    <section id="experience">
        <p class="sec_text_p1">Check my</p>
        <h1 class="title">Experience</h1>
        <div class="exp_det_con">
            <div class="det_con">
                <h2 class="exp_sub_title">Frontend development</h2>
                <div class="art_con">
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <h3>HTML</h3>
                            <p>Experienced</p>
                        </div>
                    </article>
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <h3>CSS</h3>
                            <p>Experienced</p>
                        </div>
                    </article>
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <h3>JavaScript</h3>
                            <p>Basic</p>
                        </div>
                    </article>
                    
                    
                       
                </div>
            </div>
            <div class="det_con">
                <h2 class="exp_sub_title">Backend development</h2>
                <div class="art_con">
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <h3>ORACLE</h3>
                            <p>Experienced</p>
                        </div>
                    </article>
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <h3>GIT</h3>
                            <p>Intermediate</p>
                        </div>
                    </article>
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <h3>PHP</h3>
                            <p>Intermediate</p>
                        </div>
                   </article>        
            </div>
            </div>
            <div class="det_con">
                <h2 class="exp_sub_title">Others</h2>
                <div class="art_con">
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <img src="c.png" style="height: 50px;">
                            <p>Experienced</p>
                        </div>
                    </article>
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <img src="cpp.png" style="height: 50px;">
                            <p>Experienced</p>
                        </div>
                    </article>
                    <article>
                        <img src="tick.png" class="icon">
                        <div>
                            <img src="ds.png" style="height: 50px;">
                            <p>Experienced</p>
                        </div>
                   </article>        
            </div>
            </div>        
            
        <img src="" class="icon arrow" onclick="location.href='./#projects'">

    </section>
    <section id="projects">
        <p class="sec_text_p1">Some of my</p>
        <h1 class="title">Projects</h1>
        <div class="exp_det_con">
            <div class="det_con col_con" style="background: aquamarine">
                <div class="art_con" >
                    <img src="project1.png" class="pro_img" >
                </div>
                <h2 class="exp_sub_title pro_title">Project: Login system and contact info using c++</h2>
                <div class="btn_container">
                    <button class="btn btn_colour2 pro_btn" onclick="location.href='https://github.com/Abir2007049/oop_project.git'" style="background: rgb(194, 142, 181);">
                     Github   
                    </button>

                    <button class="btn btn_colour2 pro_btn" onclick="location.href='https://github.com/Abir2007049/oop_project.git'" style="background: rgb(194, 142, 181);">
                    Live Demo
                    </button>
                </div>
            </div>        
                
        </div>
                
            
            <div class="det_con col_con" style="background: black">
                <div class="art_con" >
                    <img src="project2.png" class="pro_img" style="height: 200px ; width: 200px;">
                </div>
                <h2 class="exp_sub_title pro_title" style="color: white;">Project: Game: Rock-papaer-scissor using JavaScript </h2>
                <div class="btn_container">
                    <button class="btn btn_colour2 pro_btn" onclick="location.href='https://https://github.com/Abir2007049/Stone-paper-scissor.git'" style="background: rgb(217, 206, 214);">
                     Github   
                    </button>

                    <button class="btn btn_colour2 pro_btn" onclick="location.href='https:https://github.com/Abir2007049/Stone-paper-scissor.git'" style="background: rgb(217, 206 ,214);">
                    Live Demo
                    </button>
                </div>
                
            </div>
        </div>
        <img
        src="arrpng.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contacts'"
      />
    </section>
    <section id="contacts">
        <p class="sec_text_p1">Get in Touch </p>
        <h1 class="title">Contact Me</h1>
        <div class="contact-info-upper-container">
          <div class="contact-info-container">
            <img
              src="./email.png" class="icon contact-icon email-icon" style="height:80px">
            <p><a href="abirjghs1877@gmail.com">abirjghs1877@gmail.com</a></p>
          </div>
          
        </div>
      </section>
      <footer>
        <nav>
          <div class="nav-links-container">
            <ul class="nav-links">
              <li><a href="#about"><b>About</b></a></li>
              <li><a href="#experience"><b>Experience</b></a></li>
              <li><a href="#projects"><b>Projects</b></a></li>
              <li><a href="#contact"><b>Contact</a></b></li>
            </ul>
          </div>
        </nav>
        <p style="color: white">Copyright &#169; 2024 Sadik Zaman Abir. All Rights Reserved.</p>
      </footer>
   <script src="script.js"></script> 
</body>
</html>