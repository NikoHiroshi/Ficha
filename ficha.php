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
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="dado.php">Dados</a>
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
                $magias = [
                    'Barbaro' => 'Nenhuma',
                    'Bardo' => 'Carisma',
                    'Bruxo' => 'Carisma',
                    'Clérigo' => 'Sabedoria',
                    'Druida' => 'Sabedoria',
                    'Feiticeiro' => 'Carisma',
                    'Guerreiro' => 'Inteligencia',
                    'Ladino' => 'Inteligencia',
                    'Mago' => 'Inteligencia',
                    'Monge' => 'Nenhuma',
                    'Paladino' => 'Carisma',
                    'Patrulheiro' => 'Nenhuma'
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
                $bp = [
                    '1' => '2',
                    '2' => '2',
                    '3' => '2',
                    '4' => '2',
                    '5' => '3',
                    '6' => '3',
                    '7' => '3',
                    '8' => '3',
                    '9' => '4',
                    '10' => '4',
                    '11' => '4',
                    '12' => '4',
                    '13' => '5',
                    '14' => '5',
                    '15' => '5',
                    '16' => '5',
                    '17' => '6',
                    '18' => '6',
                    '19' => '6',
                    '20' => '6'
                ];
                $valor = 0;
                $x = 0;
                $p = 0;
                $nvl = 0;
                $cdm = 0;
                $modm = 0;

                $campos = array('Força', 'Destreza', 'Constituição', 'Inteligencia', 'Sabedoria', 'Carisma');
                $keys = array_keys($_POST);

                //coded by NikoHiroshi :)
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['classes'] and $_POST['raças'] and $_POST['antecedentes'] and $_POST['alinhamentos'] and $_POST['pericia'])) {
                        $xispe = $_POST['xp'];
                        $crasse = $_POST['classes'];
                        $raca = $_POST['raças'];
                        $antesc = $_POST['antecedentes'];
                        $aling = $_POST['alinhamentos'];
                        $pericias = $_POST['pericia'];
                        if ($valor = $_POST[$keys[$x + 6]]) {
                            $ca = 10 + moder($valor);
                        }
                        if ($valor = $_POST[$keys[$x + 8]]) {
                            $vida = $classes[$crasse] + moder($valor);
                        }
                        if ($valor = $_POST[$keys[$x + 9]]) {
                            $perpas = 10 + moder($valor);
                        }
                        switch ($xispe):
                            case ($xispe <= 299):
                                $nvl = 1;
                                $p = $bp['1'];
                                break;
                            case ($xispe >= 300 and $xispe <= 899):
                                $nvl = 2;
                                $p = $bp['2'];
                                break;
                            case ($xispe >= 900 and $xispe <= 2699):
                                $nvl = 3;
                                $p = $bp['3'];
                                break;
                            case ($xispe >= 2700 and $xispe <= 6499):
                                $nvl = 4;
                                $p = $bp['4'];
                                break;
                            case ($xispe >= 6500 and $xispe <= 13999):
                                $nvl = 5;
                                $p = $bp['5'];
                                break;
                            case ($xispe >= 14000 and $xispe <= 22999):
                                $nvl = 6;
                                $p = $bp['6'];
                                break;
                            case ($xispe >= 23000 and $xispe <= 33999):
                                $nvl = 7;
                                $p = $bp['7'];
                                break;
                            case ($xispe >= 34000 and $xispe <= 47999):
                                $nvl = 8;
                                $p = $bp['8'];
                                break;
                            case ($xispe >= 48000 and $xispe <= 63999):
                                $nvl = 9;
                                $p = $bp['9'];
                                break;
                            case ($xispe >= 64000 and $xispe <= 84999):
                                $nvl = 10;
                                $p = $bp['10'];
                                break;
                            case ($xispe >= 85000 and $xispe <= 99999):
                                $nvl = 11;
                                $p = $bp['11'];
                                break;
                            case ($xispe >= 100000 and $xispe <= 119999):
                                $nvl = 12;
                                $p = $bp['12'];
                                break;
                            case ($xispe >= 120000 and $xispe <= 139999):
                                $nvl = 13;
                                $p = $bp['13'];
                                break;
                            case ($xispe >= 140000 and $xispe <= 164999):
                                $nvl = 14;
                                $p = $bp['14'];
                                break;
                            case ($xispe >= 165000 and $xispe <= 194999):
                                $nvl = 15;
                                $p = $bp['15'];
                                break;
                            case ($xispe >= 195000 and $xispe <= 224999):
                                $nvl = 16;
                                $p = $bp['16'];
                                break;
                            case ($xispe >= 225000 and $xispe <= 264999):
                                $nvl = 17;
                                $p = $bp['17'];
                                break;
                            case ($xispe >= 265000 and $xispe <= 304999):
                                $nvl = 18;
                                $p = $bp['18'];
                                break;
                            case ($xispe >= 305000 and $xispe <= 354999):
                                $nvl = 19;
                                $p = $bp['19'];
                                break;
                            case ($xispe >= 355000 and $xispe < 99999999999999999):
                                $nvl = 20;
                                $p = $bp['20'];
                                break;
                        endswitch;
                        switch ($magias[$crasse]) {
                            case ($magias[$crasse] == 'Carisma'):
                                $cdm = 8 + $p + moder($_POST[$keys[$x + 11]]);
                                $modm = $p + moder($_POST[$keys[$x + 11]]);
                                break;
                            case ($magias[$crasse] == 'Sabedoria'):
                                $cdm = 8 + $p + moder($_POST[$keys[$x + 10]]);
                                $modm = $p + moder($_POST[$keys[$x + 10]]);
                                break;
                            case ($magias[$crasse] == 'Inteligencia'):
                                $cdm = 8 + $p + moder($_POST[$keys[$x + 9]]);
                                $modm = $p + moder($_POST[$keys[$x + 9]]);
                                break;
                            case ($magias[$crasse] == 'Nenhuma'):
                                $cdm = 0;
                                $modm = 0;
                                break;
                        }
                        echo '<b>Nome do seu personagem: </b>' . $_POST["nome"] . ' ' . '<b>Bonus de proficiencia: </b>' . ' +' . $p . ' ' . '<b>Nivel: </b>' . '<b>|</b>' . $nvl . '<b>|</b>' .
                            ' ' . '<b>Pontos de Vida: </b>' . '<u>' . $vida . '/' . $vida . '</u>' . '<br>' . '<b>Classe: </b>' . $crasse . ' ' . '<b>|</b>' . 'D' . $classes[$crasse] .
                            '<b>|</b>' . ' ' . '<b>Antecendente: </b>' . $antesc . '<br>' . '<b>Raça: </b>' . $raca . ' ' . '<b>Alinhamento: </b>' . $aling . '<br>' .
                            '<b>Classe de Armadura: </b>' . $ca . ' ' . '<b>Deslocamento: </b>' . $desl[$raca] . '<br>' . '<b>Percepção Passiva</b>' . ' ' . $perpas . '<br>' .
                            '<b>Atributo de conjuração: </b>' . $magias[$crasse] . ' ' . '<b>CD de magia: </b>' . $cdm . ' ' . '<b>Mod magico </b>' . '<b>|</b>' . $modm . '<b>|</b>' . '<hr>' . '<br>';
                    }
                }

                //coded by xXFelpera011Xx

                for ($x = 0; $x < 6; $x++) {
                    $valor = $_POST[$keys[$x + 6]];
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

                <div>
                    <p id="pericias"></p>
                </div>

            </div>
        </div>
    </div>
    <script src="pericias.js"></script>
</body>

</html>