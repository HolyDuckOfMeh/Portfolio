<?php

    include "./View/header.php";
    include "./View/navbar.php";

?>

<div class='projects-grid'>
    <div class='project-container'>
      
      <!-- Site Display -->
        <div class='site-container'>
              <iframe id='site' frameborder="0"></iframe>
        </div>
      <!-- Site Display -->

      <!-- Corn-Puter Computers -->
        <div style="background-image: url('./View/Public/Images/Corn.png'); background-size: 100px; background: cover; border: solid 2px gray;">
          <h1 onclick="document.getElementById('site').src = './ProjectCC/index.php'"
            >Corn-Puter<br>Computers
          </h1>
        </div>
      <!-- Corn-Puter Computers -->
      
      <!-- FortisureMart -->
        <div style='background-color: #5DE1D9;'>
          <a onclick="document.getElementById('site').src = './FortisureMart/FortisureMart-Template/index.php'"
            style='text-shadow: none;'>
            <h1 style='font-weight:bold;font-size:40px; padding-top: 25px'>
                <span style='color: #3B3A6D;'>Fortisure</span>
                <span style='color: #9F1224;'>Mart</span>
            </h1>
          </a>
        </div>
      <!-- FortisureMart -->

      <!-- Close -->
        <div style='background-color: #571313;'>
          <h1 style='color: #ffffff; text-align: center; font-weight: bold; font-size: 50px; padding-top: 25px' onclick="document.getElementById('site').src = ''">Close</h1>
        </div>
      <!-- close -->

    </div>
</div>



<!-- this one ends the one from the header -->
</div>