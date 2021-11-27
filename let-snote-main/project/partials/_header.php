<?php
    echo '<nav>
            <div class="container nav-wrapper">
                <div class="brand">
                    <img src="logo.png" alt="lets note logo">
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-list">
                    <li>
                        <a href="index.php">Make Notes</a>
                    </li>
                    <li><a href="notes.php">Notes</a></li>
                    <li><a href="about.php">About</a></li>
                    <li>';
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                    {   
                        echo '<button class="btn logout">Logout</button>';
                    }
                    else
                    {
                        echo '<button class="btn"><a href="form.php">Login</a></button>';
                    }
                    echo '</li>
                </ul>
            </div>
        </nav>';
?>