<header>
    <div>
       <button class="hamburger">&#9776;</button>
       <button class="hamburgerClose">&#9587;</button>
        <a href="index.php"><img src="./images/logo/logo-FIN.png" alt="Logo Essential Watch"></a>
        <nav class="menu">
            <ul>
                <li>
                    <?php
                        if($page == 'discover'){
                          echo '<span>Discover</span>'; 
                        } else {
                            echo '<a href="discover.php">Discover</a>';
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($page == 'selfDevelopment'){
                          echo '<span>Self-development</span>'; 
                        } else {
                            echo '<a href="selfDevelopment.php">Self-development</a>';
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($page == 'selfCare'){
                          echo '<span>Self-care</span>'; 
                        } else {
                            echo '<a href="selfCare.php">Self-care</a>';
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($page == 'app'){
                          echo '<span>App</span>'; 
                        } else {
                            echo '<a href="app.php">App</a>';
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($page == 'contact'){
                          echo '<span>Contact</span>'; 
                        } else {
                            echo '<a href="contact.php">Contact</a>';
                        }
                    ?>
                </li>
            </ul>
        </nav>
        <?php
           if (isset($_SESSION['userName'])){
                $user = $_SESSION['userName'];
               echo '<p>Hello ' . $user . '</p>';  
            } else {
                echo '<p>Identify</p>';
           }
        ?>
        <img id="buttonLogIn" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDM1MCAzNTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM1MCAzNTA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxwYXRoIGQ9Ik0xNzUsMTcxLjE3M2MzOC45MTQsMCw3MC40NjMtMzguMzE4LDcwLjQ2My04NS41ODZDMjQ1LjQ2MywzOC4zMTgsMjM1LjEwNSwwLDE3NSwwcy03MC40NjUsMzguMzE4LTcwLjQ2NSw4NS41ODcgICBDMTA0LjUzNSwxMzIuODU1LDEzNi4wODQsMTcxLjE3MywxNzUsMTcxLjE3M3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00MS45MDksMzAxLjg1M0M0MS44OTcsMjk4Ljk3MSw0MS44ODUsMzAxLjA0MSw0MS45MDksMzAxLjg1M0w0MS45MDksMzAxLjg1M3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0zMDguMDg1LDMwNC4xMDRDMzA4LjEyMywzMDMuMzE1LDMwOC4wOTgsMjk4LjYzLDMwOC4wODUsMzA0LjEwNEwzMDguMDg1LDMwNC4xMDR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzA3LjkzNSwyOTguMzk3Yy0xLjMwNS04Mi4zNDItMTIuMDU5LTEwNS44MDUtOTQuMzUyLTEyMC42NTdjMCwwLTExLjU4NCwxNC43NjEtMzguNTg0LDE0Ljc2MSAgIHMtMzguNTg2LTE0Ljc2MS0zOC41ODYtMTQuNzYxYy04MS4zOTUsMTQuNjktOTIuODAzLDM3LjgwNS05NC4zMDMsMTE3Ljk4MmMtMC4xMjMsNi41NDctMC4xOCw2Ljg5MS0wLjIwMiw2LjEzMSAgIGMwLjAwNSwxLjQyNCwwLjAxMSw0LjA1OCwwLjAxMSw4LjY1MWMwLDAsMTkuNTkyLDM5LjQ5NiwxMzMuMDgsMzkuNDk2YzExMy40ODYsMCwxMzMuMDgtMzkuNDk2LDEzMy4wOC0zOS40OTYgICBjMC0yLjk1MSwwLjAwMi01LjAwMywwLjAwNS02LjM5OUMzMDguMDYyLDMwNC41NzUsMzA4LjAxOCwzMDMuNjY0LDMwNy45MzUsMjk4LjM5N3oiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
        <div>
            <div><a href="user.php">Create Account</a></div><br>
            <p><a href="session_login.php">Log In</a></p>
            <p><a href="">My Overview</a></p>
            <p><a href="">My Order</a></p>
            <p><a href="session_logout.php">Close Session</a></p>
        </div>
    </div>
</header>
