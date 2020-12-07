<?php

    include "./View/header.php";
    include "./View/navbar.php";

?>

<div class='home-grid'>
    <div class="home-bg-image">
    </div>
        <div class="home-bg-text">
            <h1 style='font-family: Arial, Helvetica, sans-serif;'>Hi, I'm Jason Zheng</h1>
            <h2 style='font-family: Arial, Helvetica, sans-serif;'>I am a</h2>
            <h2 style='font-family: Arial, Helvetica, sans-serif;'>Web Developer</h2>
        </div>
</div>

<div class='about-grid'>
    <div class='about-info'>
        <h2>About Me</h2>
        <p style='padding: 60px 120px 0px 120px'>My name is Jason Zheng. I work with HTML, CSS, Javascript, and Ajax. I am currently seeking to grow my skills in database development, database analysis, and web development. </p>
        <p style='padding: 60px 120px 0px 120px'>My previous work experiences as a Technical Support Representative has helped me improve upon my communication skills with both customers and fellow employees. </p>
    </div>

<!-- The clickable image on the about me section -->
    <div class='about-img'>
        <img style='height: 300px; width: 300px; border-radius: 100%;' src='./View/Public/Images/FOXHOUND.jpg' onclick="linkGit()">
    </div>
<!-- The clickable image on the about me section -->

<!-- The contact me button on the about me section -->
    <div class='about-contact-btn'>
        <a href='http://localhost/FIT-Web-Course/Portfolio/contact.php'>Contact Me</a>
    </div>
<!-- The contact me button on the about me section -->

</div>

<!-- this one ends the one from the header -->
</div>