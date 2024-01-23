<?php

require 'database.php';

?>
<div class="bovenheader">
    <p>Word Lid en hou uw proces in de gate</p>
    <p>|</p>
    <p>Sale! 20% korting op elk pakket</p>
</div>

<div class="header">
    <a href="index.php"><img src="fotos/logo.jpg" class="logo"></a>
    <div class="contentheader">
        <ul>
            <li><a href="index.php"><button>Home</button></a></li>
            <li><a href="workout.php"><button>Workouts</button></a></li>
            <li><a href="prijzen.php"><button>Prijzen</button></a></li>
            <li><a href="contact.php"><button>Contact</button></a></li>
            <li><a href="slideshow.php"><button>Javascript</button></a></li>
            <?php
            if (isset($_SESSION['isloggedIN']) && $_SESSION['isloggedIN'] == true && $_SESSION['rol'] === 'administrator') {
                echo '<li><a href="resgistratie_admin.php"><button>Registratie</button</a></li>';
                echo '<li><a href="toevoeg_workout.php"><button>Workout Toevoegen</button</a></li>';
            } else if (isset($_SESSION['isloggedIN']) && $_SESSION['isloggedIN'] == true && $_SESSION['rol'] === 'manager') {
                echo '<li><a href="toevoeg_workout.php"><button>Workout Toevoegen</button</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="loginheader">
        <ul>
            <?php
            if (isset($_SESSION['isloggedIN']) && $_SESSION['isloggedIN'] == true) {
                if($_SESSION['rol'] === 'administrator'){
                    echo '<li><a href="admin_dashboard.php"><button>My Dashboard</button></a></li>';
                } else if($_SESSION['rol'] === 'manager'){
                    echo '<li><a href="manager_dashboard.php"><button>My Dashboard</button></a></li>';
                } else if($_SESSION['rol'] === 'customer'){
                    echo '<li><a href="dashboard.php"><button>My Dashboard</button></a></li>';
                }
                echo '<li><a href="loguit.php"><button>Loguit</button></a></li>';
            } else {
                echo '<li><a href="login.php"><button>Login</button></a></li>';
                echo '<li><a href="registreer.php"><button>Registreer</button></a></li>';
            }
            ?>
        </ul>
    </div>
</div>