<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Química</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="design/animation.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>

    <header class="bg-carbonmons" style="height: 80px">
        <ul class="list-unstyled text-white">

            <li class="text-center fs-1 ">
                CARBONMONS
            </li>
        </ul>
    </header>

    <div class="bg-success ">

        <h3 class="fs-4 text-center">BATALHA DOS HIDROCARBONETOS</h3>

        <ul class="list-unstyled d-flex justify-content-center gap-5 p-2">
            <li class="item">
                Alcanos
            </li>

            <li class="item">
                Alcenos
            </li>

            <li class="item">
                Alcinos
            </li>

            <li class="item">
                Ciclos
            </li>

            <li class="item">
                Aromáticos
            </li>
        </ul>
    </div>

    <div class="container-batalha" style="height: 400px">

    </div>


    <footer>
        <hr>
        <h3 class="text-center">
            SUA MÃO
        </h3>


        <div class="mao">
            <!-- alguem estiliza o card, esse é o modelo: -->
            <div class="card" onclick="aparecer()">
                <ul class="cima">
                    <li>Grupo do elemento</li>
                    <li>⭐⭐</li>
                </ul>

                <div>
                    <img src="" alt="">
                </div>

                <ul class="list-unstyled">
                    <li>Nome do elemento</li>
                    <li>Composição(c2h4)</li>
                </ul>

                <span>HP</span>

                <button class="ataque">ataque 1</button>
                <button class="ataque">ataque 2</button>
            </div>

            <!-- card 2 -->
            <div class="card" onclick="aparecer()">
                <ul class="cima">
                    <li>Grupo do elemento</li>
                    <li>⭐⭐</li>
                </ul>

                <div>
                    <img src="" alt="">
                </div>

                <ul class="list-unstyled">
                    <li>Nome do elemento</li>
                    <li>Composição(c2h4)</li>
                </ul>

                <span>HP</span>

                <button class="ataque">ataque 1</button>
                <button class="ataque">ataque 2</button>
            </div>

        </div>
    </footer>


    <style>
        .bg-carbonmons {
            background-color: #0B132B !important;
        }

        .item {
            padding: 10px;
            color: white;
            background-color: #162447;
            border-radius: 20px;
            transition: all ease 0.2s;
        }

        .item:hover {
            background-color: rgba(56, 190, 220, 0.28);
        }

        .mao {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .card {
            padding: 5px;
            gap: 5px;
            border-radius: 20px;
            height: 350px;
            width: 300px;
            margin-left: 40px;
            margin-top: -340px;
            background-color: rgba(51, 153, 63, 1);
            transition: all ease 0.8s;
            margin-top: 100px;
        }

        .card:hover:not(.sem-hover) {
            transform: translateY(-230px) scale(1.1);
        }

        .cima {
            gap: 10px;
            list-style: none;
            display: flex;
        }

        span {
            border-radius: 20px;
            border: 2px solid black;
            background-color: rgba(106, 255, 123, 1);
        }

        .ataque {
            border-radius: 20px;
            border: 2px solid black;
            background-color: rgba(141, 30, 30, 1);
        }
    </style>

    <script>
    </script>

</body>

</html>