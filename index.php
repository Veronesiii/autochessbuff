<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutochessBuff - Auto Chess Statistics</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<head>
</head>

<body>

<?php include 'navbar.php'; ?>


    <!-- background image with form -->
    <div class="imagem-banner container-fluid">
        <div class="row col-12">
            <div class="col-12 row_form">
                <form>
                    <div class="form-group">
                        <p style="text-align:center;color:#fff">Go to <a href="https://steamidfinder.com/" style="color:black;">SteamIDFinder.com</a>
                            to get your "steamID64" or vanity URL name.</p>
                        <input type="text" id="steamidInput" class="form-control" onkeyup="search()" placeholder="17-digit Steam ID or Steam Vanity Name"
                            maxlength="32">
                        <button type="submit" class="goButton">GO!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom part with players card -->

    <div class="container-fluid">
        <h2 class="top3">Top 3 Players</h2>
        <div class="row cartas">
            <div class="card mb-3 col-lg-3">
                <div class="row no-gutters">
                    <div class="col-md-4 ">
                        <img src="assets/images/twitch.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Player name<span> #1</span></h5>
                            <ul class="list-group list-group-flush top3p">
                                <li class="list-group-item top3p"><strong style="color:black;">Rank: </strong><span
                                        style="color: white">Knight 9</span></li>
                                <li class="list-group-item top3p"><strong style="color:black;">Peak Rank: </strong><span
                                        style="color: white">Knight 9 </span></li>
                            </ul>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="#" class="card-link">Steam Profile <i class="fab fa-steam"></i></a>
                            <a href="#" class="card-link">Twich <i class="fab fa-twitch"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-lg-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="assets/images/twitch.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Player name<span> #2</span></h5>
                            <ul class="list-group list-group-flush top3p">
                                <li class="list-group-item top3p"><strong style="color:black;">Rank: </strong><span
                                        style="color: white">Knight 9</span></li>
                                <li class="list-group-item top3p"><strong style="color:black;">Peak Rank: </strong><span
                                        style="color: white"> Knight 9</span></li>
                            </ul>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="#" class="card-link">Steam Profile <i class="fab fa-steam"></i></a>
                            <a href="#" class="card-link">Twich <i class="fab fa-twitch"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-lg-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="assets/images/twitch.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Player name <span> #3</span></h5>
                            <ul class="list-group list-group-flush top3p">
                                <li class="list-group-item top3p"><strong style="color:black;">Rank: </strong><span
                                        style="color: white">Knight 9</span></li>
                                <li class="list-group-item top3p"><strong style="color:black;">Peak Rank: </strong><span
                                        style="color: white"> Knight 9</span></li>
                            </ul>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="#" class="card-link">Steam Profile <i class="fab fa-steam"></i></a>
                            <a href="#" class="card-link">Twich <i class="fab fa-twitch"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>