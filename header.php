<div class="bovenheader">
    <p>Word Lid en hou uw proces in de gate</p>
</div>

<div class="header">
    <p class="hoofdtext">Work4Me</p>
    <div class="contentheader">
        <ul>
            <li><a href="index.php"><button>Home</button></a></li>
            <li><a href="workout.php"><button>Workouts</button></a></li>
            <li><a href="prijzen.php"><button>Prijzen</button></a></li>
            <li><a href="contact.php"><button>Contact</button></a></li>
        </ul>
    </div>
    <div class="loginheader">
        <ul>
            <?php
            if (isset($_SESSION['isloggedIN']) && $_SESSION['isloggedIN'] == true) {
                echo '<li><a href="dashboard.php"><button>Mijn Dashboard</button></a></li>';
                echo '<li><a href="loguit.php"><button>Loguit</button></a></li>';
            } else {
                echo '<li><a href="login.php"><button>Login</button></a></li>';
                echo '<li><a href="registreer.php"><button>Registreer</button></a></li>';
            }
            ?>
        </ul>
    </div>
</div>