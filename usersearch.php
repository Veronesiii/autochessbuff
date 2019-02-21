<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutochessBuff - Auto Chess Statistics</title>
    <link rel="stylesheet" href="assets/css/usercss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body>

<?php include 'navbar.php'; ?>

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
    <div class="container-fluid">
        <h2 class="top3">Your Profile</h2>
        <div class="row cartas">
                <div class="card mb-3 col-lg-6">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <img src="assets/images/twitch.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Player name<span> #674</span></h5>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush top3p">
                                            <li class="list-group-item top3p"><strong style="color:black;">Rank: </strong><span style="color: white">Knight 9</span></li>
                                            <li class="list-group-item top3p"><strong style="color:black;">Peak Rank: </strong><span style="color: white">Knight 9</span></li>
                                            <li class="list-group-item top3p"><strong style="color:black;">Candies: </strong><span style="color: white">37 </span></li>
                                            <li class="list-group-item top3p"><strong style="color:black;">Matches Played: </strong><span style="color: white">70 </span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                            <ul class="list-group list-group-flush top3p">
                                                <li class="list-group-item top3p"><strong style="color:black;">Current Courier: </strong><span style="color: white">Common Imp Common ImpCommon ImpCommon Imp  Common ImpCommon ImpCommon ImpCommon ImpCommon ImpCommon Imp</span></li>
                                                <li class="list-group-item top3p"><strong style="color:black;">Created: </strong><span style="color: white">Insert Date Here</span></li>
                                            </ul>
                                    </div>
                                </div>
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