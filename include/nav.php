
   <header>
    <div>
        <a href="index.php"><img src="./images/logo/logo-FIN.png" alt="Logo Essential Watch"></a>
        <nav>
            <ul>
                <li><a href="index.php">Discover</a>
                    <ul class="sub-menu">
                        <li><a href="discover.php">Essential Watch</a></li>
                        <li><a href='#ourTechnology'>Our Technology</a></li>
                        <li><a>Scientific References</a></li>
                        <li><a>Gallery</a></li>
                    </ul>
                </li>
                <li><a href="selfDevelopment.php">Self-development</a>
                    <ul class="sub-menu">
                        <li><a>Personnaly</a></li>
                        <li><a>Professionally</a></li>
                    </ul>
                </li>
                <li><a href="selfCare.php">Self-care</a>
                    <ul class="sub-menu">
                        <li><a>We Propose</a></li>
                        <li><a>Contraindications</a></li>
                    </ul>
                </li>
                <li><a href="app.php">App</a></li>
                <li><a href="contact.php">Contact</a>
                    <ul class="sub-menu">
                        <li><a>How to buy</a></li>
                        <li><a>Technical Support</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <?php
        
           if (isset($_SESSION['userName'])){
                $user = $_SESSION['userName'];
               echo '<p>Hello ' . $user . '</p>';  
               
            } 
        
        ?>

        <button id="buttonLogIn"><i class="fa fa-user fa-2x" aria-hidden="true"></i></button>
        
        <div>
            <div><a href="user.php">Create Account</a></div><br>
            <p><a href="session_login.php">Log In</a></p>
            <p><a href="">My Overview</a></p>
            <p><a href="">My Order</a></p>
            <p><a href="session_logout.php">Close Session</a></p>


        </div>
        

    </div>
    
</header>




