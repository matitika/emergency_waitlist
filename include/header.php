<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="text-white nav-link" href="index.php">Hospital Triage</a>
            
            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                <?php
                    if (isset($_SESSION['admin'])) {
                        $user = $_SESSION['admin'];
                        echo'
                        <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>';
                    } else {
                        echo '
                        <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li>';
                    }
                ?>
            </ul>

        </nav>
    </body>
</html>