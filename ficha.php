<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Ficha</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">OTOPUS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card text-center justify-content-center d-flex mt-3">
            <div class="card-header bg-dark text-center text-white">Ficha</div>
            <div class="card-body">
                <?php

                $classes = [
                    'Barbaro' => '12',
                    'Bardo' => '8',
                    'Bruxo' => '8',
                    'Clérigo' => '8',
                    'Druida' => '8',
                    'Feiticeiro' => '6',
                    'Guerreiro' => '10',
                    'Ladino' => '8',
                    'Mago' => '6',
                    'Monge' => '8',
                    'Paladino' => '10',
                    'Patrulheiro' => '10'
                ];
                $desl = [
                    'Anão' => '7,5m',
                    'Elfo' => '9m',
                    'Halfling' => '7,5m',
                    'Humano' => '9m',
                    'Draconato' => '9m',
                    'Gnomo' => '7,5m',
                    'Meio-elfo' => '9m',
                    'Meio-Orc' => '9m',
                    'Tiefling' => '9m'
                ];
                $valor = 0;
                $x = 0;

                $campos = array('Força', 'Destreza', 'Constituição', 'Inteligencia', 'Sabedoria', 'Carisma');
                $keys = array_keys($_POST);

                //coded by NikoHiroshi :)
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['classes'] and $_POST['raças'] and $_POST['antecedentes'] and $_POST['alinhamentos'])) {
                        $crasse = $_POST['classes'];
                        $raca = $_POST['raças'];
                        $antesc = $_POST['antecedentes'];
                        $aling = $_POST['alinhamentos'];
                        if ($valor = $_POST[$keys[$x + 6]]){
                            $ca = 10 + moder($valor);
                        }
                        if ($valor = $_POST[$keys[$x + 7]]){
                            $vida = $classes[$crasse] + moder($valor);
                        }
                        echo '<b>Nome do seu personagem: </b>' . $_POST["nome"] . ' ' . '<b>Pontos de Vida: </b>' . '<u>' . $vida . '/' . $vida . '</u>' . '<br>' . '<b>Classe: </b>' . $crasse . ' ' . '<b>|</b>' . 'D' . $classes[$crasse] . 
                        '<b>|</b>' . ' ' . '<b>Antecendente: </b>' . $antesc . '<br>' . '<b>Raça: </b>' . $raca . ' ' . '<b>Alinhamento: </b>' . $aling . '<br>' .
                        '<b>Classe de Armadura: </b>' . $ca . ' ' . '<b>Deslocamento: </b>' . $desl[$raca] . '<hr>' . '<br>';
                    }
                }

                //coded by xXFelpera011Xx

                for ($x = 0; $x < 6; $x++) {
                    $valor = $_POST[$keys[$x + 5]];
                    echo '<b>' . $campos[$x] . ": </b>" . $valor . ' mod: ' . '<b>|</b>' . moder($valor) . '<b>|</b>' . '<br>';
                    // $ca = 10;
                }

                function moder($valor)
                {
                    $mod = array('-5', '-4', '-3', '-2', '-1', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10');

                    $pog = floor($valor / 2);
                    return $mod[$pog];
                }

                echo '<br>' . '<hr>' . '<br>';
                ?>

            </div>
        </div>
    </div>

</body>

</html>