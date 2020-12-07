<?php

    include "./View/header.php";
    include "./View/navbar.php";

?>

    <div class='contact-grid'>
        <h2 style='grid-column: 1/3; color: #ffffff; text-align: center;'>Contact me</h2>
        <p style='grid-column: 1/3; color: #ffffff; text-align: center;'>Click on the picture in the navbar to go to my Github!</p>
    
        <div>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" id='newsName'>
        </div>

        <div>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" id='newsEmail'>
        </div>

        <div>
        <button type="submit" class="btn">Submit</button>
        </div>
    </div>

    <p style='text-align: center; color: #ffffff;'>rip it's almost 12 I'm out of time</p>

<!-- this one ends the one from the header -->
</div>