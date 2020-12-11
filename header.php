<?php
$path = $_SERVER["SCRIPT_NAME"];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Kuvarssoft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav nav-pills flex-column flex-sm-row">
                <li class="nav-item">
                    <a class="nav-link <?php if ($path=="/crm/kvc/index.php"){echo "active";}; ?>" aria-current="page" href="../../../../crm/kvc/index.php">Kullanıcılar</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if ($path=="/crm/kvc/firm/index.php"){echo "active";}; ?>" href="../../../../crm/kvc/firm/index.php">Firmalar</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Kurumlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><Müşteriler></Müşteriler></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sistem Ayarları
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">.......................</a></li>
                        <li><a class="dropdown-item" href="#">.......................</a></li>
                        <li><a class="dropdown-item" href="#">.......................</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>