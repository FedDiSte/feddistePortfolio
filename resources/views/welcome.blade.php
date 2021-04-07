<!DOCTYPE html>
<html lang="it">

<head>
    <title>{{ $title ?? 'Portfolio' }}</title>
    <meta charset="utf-8" />
    <meta name="author" content="FedDiSte" />
    <meta name="robots" content="index" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>

<body>
    <header>
        <x-header>
        </x-header>
    </header>
    <div class="container-fluid primary">
        <div class="row">
            <div class="col-md-6 name">
                <div class="container textContainer">
                    <div class="row">
                        <p class="h1 text-end nameHeader">🌚FedDiSte🌚</p>
                    </div>
                    <div class="row">
                        <p class="h2 text-muted text-end namePhrase">This is an awesome phrase</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="container align-items-center justify-content-center">
                    <img src="{{ asset('ico/github/github120light.png') }}" alt="Test" class="align-self-center">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sectionTopic">
            <p class="h2 text-center text-light">My skills🏋️‍♂️</p>
        </div>
        <hr>
        <div class="content">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <p class="h5 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error itaque
                        excepturi vero? Eveniet sapiente aliquid aspernatur eligendi doloremque dolorem est et mollitia
                        perferendis quasi, maiores, at nostrum fugit repellendus dolorum?</p>
                </div>
                <div class="col-md-7">
                    <x-skillbar></x-skillbar>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid space">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="h5 text-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, quia
                    in et ad eveniet dolorem ratione excepturi earum vitae magni veritatis sequi similique nulla
                    inventore quasi perferendis voluptatibus tenetur quas.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="sectionTopic">
            <p class="h2 text-center text-light">About me</p>
        </div>
        <hr>
        <div class="content">
            <p class="h5 text-light">Full name</p>
            <ol>
                <ul>
                    <p class="text-light">
                        Federico Di Stefano
                    </p>
                </ul>
            </ol>
            <p class="h5 text-light">Date of birth</p>
            <ol>
                <ul>
                    <p class="text-light">10/02/2002 (@php echo date("Y") - 2002; @endphp years old)</p>
                </ul>
            </ol>
            <p class="h5 text-light">My formation</p>
            <ol>
                <ul>
                    <p class="text-light">Secondary school diploma at ITIS G.Vallauri Velletri</p>
                </ul>
            </ol>
            <p class="h5 text-light">
                (some) Projects
            </p>
            <ol>
                <ul>
                    <p class="text-light">Winner team of Startupper School Academy Lazio 2020</p>
                </ul>
                <ul>
                    <p class="text-light">NAO Challenge</p>
                </ul>
                <ul>
                    <p class="text-light">RomeCup 2019</p>
                </ul>
                <ul>
                    <p class="text-light">Participant of Maker Faire 2019 with team EcoBin</p>
                </ul>
                <ul>
                    <p class="text-light">Cybersecurity Italian Olympics 2021</p>
                </ul>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="sectionTopic">
            <p class="h2 text-center text-light">Latest updates</p>
        </div>
        <hr>
        <div class="content">
            <div class="row align-items-center">
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam ipsa
                            asperiores est laudantium aut! Expedita fugit atque porro animi accusantium eveniet quaerat?
                            Ipsam suscipit vitae maxime, illo laudantium eligendi ea!</p>
                        <a href="#" class="btn btn-red">See more</a>
                    </div>
                </div>
                <div class="col-md7">
                </div>
            </div>
        </div>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
