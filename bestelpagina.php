<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "annexbios";
    $conn = new mysqli($hostName, $userName, $password, $databaseName);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $statisticsJson = file_get_contents("https://annexbios.nickvz.nl/api/");
    // $statisticsObj = json_decode($statisticsJson);
    // foreach($statisticsObj as $data){
    //     var_dump($data);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Leerdam</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="assets/logo/Leerdam.png" alt="Logo AnnexBios Leerdam">
            </div>
            <ul class="nav-search-items">
                <li class="nav-search-item">Film Agenda</li>
                <li class="nav-search-item">Alle Vestegingen</li>
                <li class="nav-search-item">Contact</li>
            </ul>
        </nav>
        <div id="searchbar-container">
            <div class="searchbar-container-info">
                <h2>Koop je tickets</h2>
                <select name="movie-dropdown">
                    <option value="test">Kies je film</option>
                </select>
                <button>Bekijk tickets</button>
            </div>
        </div>
    </header>
        <main>
            <h1>Tickets Bestellen</h1>
            <div class="date-time">
                <div id="movie-title" class="date-time-item">Jurassic World</div>
                <div id="date" class="date-time-item"><select name="" id="" class='date-time-item'>
                    <option value="">Datum</option>
                </select><img class="arrow-dropdown" src="assets/icons/down-arrow-svgrepo-com.svg" alt="Arrow Dropdown"></div>
                <div id="time" class="date-time-item"><select name="" id="" class="date-time-item">
                    <option value="">Tijdstip</option>
                </select> <img class="arrow-dropdown" src="assets/icons/down-arrow-svgrepo-com.svg" alt="Arrow Dropdown"></div>
            </div>
            <div class="container">
                <div class="ticket-container">
                    <h3>Stap 1: Kies je ticket</h3>
                    <div class="grid-container">
                        <div class="type head">Type</div>
                        <div class="prijs head">Prijs</div>
                        <div class="amount head">Aantal</div>
                        <div class="adult type">Normaal</div>
                        <div class="adult price">€9,00</div>
                        <div class="adult dropdown">
                            <select name="adult dropdown" id="dropdown">
                                <option selected>0</option>
                            </select>
                        </div>
                        <div class="kid type">Kind t/m 11 jaar</div>
                        <div class="kid price">€5,00</div>
                        <div class="kid dropdown">
                            <select name="kid dropdown" id="dropdown">
                                <option selected>0</option>
                            </select>
                        </div>
                        <div class="senior type">65+</div>
                        <div class="senior price">€7,00</div>
                        <div class="senior dropdown">
                            <select name="senior dropdown" id="dropdown">
                                <option selected>0</option>
                            </select>
                        </div>
                        <div class="vouchercode bottom">
                            <h4>Vouchercode</h4>
                            <input type="text" placeholder="Code">
                            <button class="ticket-button">Toevoegen</button>
                        </div>
                    </div>
                    <h3 class="margin">Stap 2: Kies je stoel</h3>
                    <div class="theater-seats">
                        <img src="assets/zalen/zaal_orangje.png" alt="">
                        <div class="seatinfo-section">
                            <div class="seatinfo vrij">Vrij</div>
                            <div class="seatinfo bezet">Bezet</div>
                            <div class="seatinfo selectie">Jouw selectie</div>
                        </div>
                    </div>
                    <h3>Stap 3: Controleer je bestelling</h3>
                    <div class="output-order">
                        <img style="height: 326px; width: 216px;" src="assets/films/Jurassic-World_-Fallen-Kingdom.jpg" alt="Film Poster">
                        <div class="output-order-info">
                            <h4>Jurassic World: Fallen Kingdom</h4>
                            <div class="rating">
                                <img src="assets/kijkwijzers/kijkwijzer-12.png" alt="kijkwijzer-12">
                                <img src="assets/kijkwijzers/kijkwijzer-eng.png" alt="kijkwijzer-eng">
                                <img src="assets/kijkwijzers/kijkwijzer-geweld.png" alt="kijkwijzer-geweld">
                            </div>
                            <div class="info" id="theater">Bioscoop: Leerdam (Zaal 2)</div>
                            <div class="info" id="when">Wanneer: 11 juni 14:15</div>
                            <div class="info" id="seats">Stoelen: Rij 2, stoel 7</div>
                            <div class="info" id="tickets">Tickets: 1x normaal</div>
                            <br>
                            <div class="info" id="total">Totaal: €9,00</div>
                        </div>
                    </div>
                    <h3>Stap 4: Vul je gegevens in</h3>
                    <form action="" class="personal-info-form">
                        <input type="text" name="firstname" class="firstname" placeholder="Voornaam">
                        <input type="text" name="surname" class="surname" placeholder="Achternaam">
                        <input type="email" name="email" class="email" placeholder="E-mailadres*">
                    </form>
                    <h3>Stap 5: Kies je betaalwijze</h3>
                    <div class="payment-method">
                        <label for="bioscoopbon">
                            <input type="checkbox" name="bioscoopbon" id="">
                            <img src="assets/logo/nationale-bioscoopbon.png" alt="Nationale Bioscoopbon" style="height: 65px; width: 81px;">
                        </label>
                        <label for="bioscoopbon">
                            <input type="checkbox" name="maestro" id="">
                            <img src="assets/logo/maestro.png" alt="Maestro" style="height: 44px; width: 161px;">
                        </label>
                        <label for="bioscoopbon">
                            <input type="checkbox" name="iDeal" id="">
                            <img src="assets/logo/ideal.png" alt="iDeal" style="height: 50px; width: 56px;">
                        </label>
                    </div>
                    <div class="input-conditions">
                        <input type="checkbox" name="voorwaarden" id="" class="conditions">
                        <span>Ja, ik ga akkoord met de <u>algmene voorwaarden</u></span>
                    </div>
                </div>
                <div class="movieinfo-container">
                    <div class="movieinfo poster">
                        <img style="height: 402px; width: 254px;" src="assets/films/Jurassic-World_-Fallen-Kingdom.jpg" alt="Film Poster">
                    </div>
                    <div class="movieinfo info">
                        <h4>
                            Jurassic World: Fallen Kingdom
                        </h4>
                        <br>
                        <div class="rating-container">
                           <div class="rating-star active"></div>
                           <div class="rating-star active"></div>
                           <div class="rating-star active"></div>
                           <div class="rating-star active"></div>
                           <div class="rating-star inactive"></div>
                        </div>
                        <p class="movie release">Release: 07-06-2018</p>
                        <br>
                        <p>
                            Welkom in Jurassic World: Fallen Kingdom! Favoriete personages keren terug in dit 3D actie-spektakel.
                        </p>
                    </div>
                </div>
                <button class="send">Afrekenen</button>
            </div>
        </main>
</body>
<script src="assets/script.js"></script>
</html>