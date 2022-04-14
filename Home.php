<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fab icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="Images/fabicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Images/fabicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fabicon/favicon-16x16.png">
    <link rel="manifest" href="Images/fabicon/site.webmanifest">
    <link rel="mask-icon" href="Images/fabicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Title -->
    <title>Welcome to TechGun</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- css link -->
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" media="screen and (max-width: 968px)" href="./CSS/phone.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img src="./Images/MyCodeImage.jpg" alt="Logo"></a>
        </div>
        <ul class="uni-padding">
            <li class="Home"><a href="#">Home</a> </li>
            <li class="Skill"><a href="#skills-container">Skill</a></li>
            <li class="About"><a href="#about-container"> About</a></li>
            <li class="Contact active"><a href="#contact-container">Contact</a></li>
        </ul>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn uni-padding">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <!-- Home  -->

   <div id="home-container" class="uni-padding">
            <h1>Welcome to My Website World !</h1>
            <h3>Hey there !<br>I'm Md Nazare Alam <br>and, i am a <span>Web Developer...</span></h3>
            <p>Let's discuss, Design and Digitalize your thoughts.</p>
            <a href="#contact-container" class="btn">Contact Me</a>
    </div>



    <!-- skills  -->

    <section id="skills-container" class="uni-padding">
        <br><br><br>
        <h1 class="title underline">My Skills</h1>
        <div class="skill-respo">
        <div class="div40">
            <p>List of Languages</p>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>jQuery</li>
                <li>PHP</li>
                <li>MySql</li>
                <li>C</li>
                <li>C++</li>
                <li>Java</li>
                <li>Oracle</li>
            </ul><br>
            <p>On right/below side show my knowledge in Percentage. it's just a guess to show my Skills.</p>
        </div>
        <div class="div60">
            <div class="skill">
                <div class="skill-label">
                    <h3>HTML</h3>
                    <span class="percent">87%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 87%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>CSS</h3>
                    <span class="percent">68%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 68%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>javaScript</h3>
                    <span class="percent">45%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 45%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>jQuery</h3>
                    <span class="percent">55%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 55%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>PHP</h3>
                    <span class="percent">62%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 62%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>MySql</h3>
                    <span class="percent">76%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 76%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>C</h3>
                    <span class="percent">82%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 82%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>C++</h3>
                    <span class="percent">58%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 58%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill-label">
                    <h3>Java</h3>
                    <span class="percent">78%</span>
                    <div style="clear:both"></div>
                </div>
                <div class="bar">
                    <div class="progress" style="width: 78%;"></div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <hr>    
    </section>
    <!-- about  -->
    
    <section id="about-container" class="uni-padding">
        <br><br><br>
        <h1 class="title underline">About Me</h1>
        <div class="about">
            <div class="about50">
                <img src="./Images/MyCodeImage.jpg" alt="">
            </div>
            <div class="about50">
                <p>Hey, I am Nazare. and I am a web developer.
                    I am interested in coding since 2019
                    And then I made a software with the help of Java and then I got into web design.</p>
                    <a href="./CV/Md Nazare Alam(Resume).pdf" download class="btn">Download CV</a>
                </div>
        </div>
        <br><br>
        <hr>
    </section>
    <section id="contact-container">
        <br><br><br>
        <h1 class="title underline">Contact Me</h1>
        <div class="contact">
                <form action="mailto:nazare.a786@gmail.com" method="post">
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" placeholder="Name" name="name" id="name">
                    </div><br>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" placeholder="Email" name="email" id="email">
                    </div><br> 
                    <div class="form-group" action="">
                        <label for="message">Message :</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Leave your message"></textarea>
                    </div><br>
                    <button id="submit" name="submit" class="btn">Submit</button>
                </form>
                <br>
        </div>
            <!-- <script>
                $("#submit").click(function(){
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var message = $("#message");
                $.ajax({
                    method:'post',
                    url:'contact.php',
                    data:{
                        name:name,
                        email:email,
                        message:message,
                        submit:'submit'
                    },
                    success:function(data){
                        alert('data submited successfully!')
                    }
                });
            });
            </script> -->
            
    </section>
    <!-- friend section -->
    <section id="friend" class="uni-padding">
        <br>
        <h2 class="title underline">Let's Be Friend</h2>
        <br>
        <a href="https://www.facebook.com/nazarealam786/" target="alt"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/itsnazarealam" target="alt"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/itsnazare" target="alt"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/itsnazare/" target="alt"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/itsnazare/" target="alt"><i class="fab fa-instagram"></i></a>
    </section>
    <!-- <section id="cont">
        <p>nazare.a786@gmail.com</p>
    </section> -->
    <footer>
        <br><br>
        <div>
            Copyright &copy; <a href="#">www.itsnazare.com.</a> All rights reserved!
        </div>
        <br>
    </footer>
<script src="./JS/script.js"></script>
</body>

</html>