<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
            include('../link/css.html');
            include('../link/js.html');

?>
<nav class="nav" style="position:fixed;width:100%;z-index:5">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../index.php" class="text-gray">MINK'S OFFICIEL</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="../vues/Apropos.php">A propos</a>
                    </li>
                    <li class="nav-link">
                        <a href="../vues/evenement.php">Evenements</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Programmes</a>
                    </li>
                   
                    <li class="nav-link">
                        <a href="#">Entreprises</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
</body>
</html>