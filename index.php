<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Ficha</title>


</head>

<body>

    <?php
    $str = 0;
    $dex = 0;
    $con = 0;
    $int = 0;
    $wis = 0;
    $char = 0;



    ?>


    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">OTOPUS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="ficha.php">Ficha</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-dark text-white mt-5">Ficha</div>
            <div class="card-body d-flex justify-content-center">
                <div class="col-6">

                    <form action="ficha.php" method="POST">

                        <div class="form-group">
                            <label for="text0" class="col-form-label">Insira o nome do seu personagem</label>
                            <div class="">
                                <input id="nome" name="nome" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="form-group mb-3 ">
                            <label for="classes">Selecione sua classe:_______</label>
                            <select class="form-group" name="classes">
                                <option value="" disabled selected>--- Selecione ---</option>
                                <option value="Barbaro">Barbaro</option>
                                <option value="Bardo">Bardo</option>
                                <option value="Bruxo">Bruxo</option>
                                <option value="Clérigo">Clérigo</option>
                                <option value="Druida">Druida</option>
                                <option value="Feiticeiro">Feiticeiro</option>
                                <option value="Guerreiro">Guerreiro</option>
                                <option value="Ladino">Ladino</option>
                                <option value="Mago">Mago</option>
                                <option value="Monge">Monge</option>
                                <option value="Paladino">Paladino</option>
                                <option value="Patrulheiro">Patrulheiro</option>
                            </select>

                            <br>

                            <label for="classes">Selecione sua raça:_________ </label>
                            <select class="form-group" name="raças">
                                <option value="" disabled selected>--- Selecione ---</option>
                                <option value="Anão">Anão</option>
                                <option value="Elfo">Elfo</option>
                                <option value="Halfling">Halfling</option>
                                <option value="Humano">Humano</option>
                                <option value="Draconato">Draconato</option>
                                <option value="Gnomo">Gnomo</option>
                                <option value="Meio-elfo">Meio-Elfo</option>
                                <option value="Meio-Orc">Meio-Orc</option>
                                <option value="Tiefling">Tiefling</option>
                            </select>

                            <br>

                            <label for="classes">Selecione seu antecedente: </label>
                            <select class="form-group" name="antecedentes">
                                <option value="" disabled selected>--- Selecione ---</option>
                                <option value="Acólito">Acólito</option>
                                <option value="Artesão de Guilda">Artesão de Guilda</option>
                                <option value="Artista">Artista</option>
                                <option value="Charlatão">Charlatão</option>
                                <option value="Criminoso">Criminoso</option>
                                <option value="Eremita">Eremita</option>
                                <option value="Forasteiro">Forasteiro</option>
                                <option value="Heroi do povo">Heroi do povo</option>
                                <option value="Marinheiro">Marinheiro</option>
                                <option value="Nobre">Nobre</option>
                                <option value="Orfão">Orfão</option>
                                <option value="Sábio">Sábio</option>
                                <option value="Soldado">Soldado</option>
                            </select>

                            <br>

                            <label for="classes">Selecione seu alinhamento: </label>
                            <select class="form-group" name="alinhamentos">
                                <option value="" disabled selected>--- Selecione ---</option>
                                <option value="Leal bom">Leal bom</option>
                                <option value="Neutro bom">Neutro bom</option>
                                <option value="Cáotico bom">Cáotico bom</option>
                                <option value="Leal neutro">Leal neutro</option>
                                <option value="Neutro">Neutro</option>
                                <option value="Cáotico neutro">Cáotico neutro</option>
                                <option value="Leal mal">Leal mal</option>
                                <option value="Neutro mal">Neutro mal</option>
                                <option value="Cáotico mal">Cáotico mal</option>
                            </select>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="text1" class="col-form-label">Força</label>
                            <div class="">
                                <input id="str" name="str" type="text" class="form-control att">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="text" class="col-form-label">Destreza</label>
                            <div class="">
                                <input id="dex" name="dex" type="text" class="form-control att">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="text2" class="col-form-label">Constituição</label>
                            <div class="">
                                <input id="con" name="con" type="text" class="form-control att">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="text3" class="col-form-label">Inteligencia</label>
                            <div class="">
                                <input id="int" name="int" type="text" class="form-control att">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="text4" class="col-form-label">Sabedoria</label>
                            <div class="">
                                <input id="wis" name="wis" type="text" class="form-control att">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="text5" class="col-form-label">Carisma</label>
                            <div class="">
                                <input id="char" name="char" type="text" class="form-control mb-3 att">
                            </div>
                        </div>

                        <br>
                        <hr>

                        <div class="form-group ">
                            <h4>Pericias</h4>
                            <div>
                                <input type="checkbox" value="Acrobacia" class="checkbox" name="pericia" id="pericia">
                                <label for="Acrobacia">Acrobacia</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Arcanismo" class="checkbox" name="pericia" id="pericia">
                                <label for="Arcanismo">Arcanismo</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Atletismo" class="checkbox" name="pericia" id="pericia">
                                <label for="Atletismo">Atletismo</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Atuação" class="checkbox" name="pericia" id="pericia">
                                <label for="Atuação">Atuação</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Enganação" class="checkbox" name="pericia" id="pericia">
                                <label for="Enganação">Enganação</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Furtividade" class="checkbox" name="pericia" id="pericia">
                                <label for="Furtividade">Furtividade</label>
                            </div>
                            <div>
                                <input type="checkbox" value="História" class="checkbox" name="pericia" id="pericia">
                                <label for="História">História</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Intimidação" class="checkbox" name="pericia" id="pericia">
                                <label for="Intimidação">Intimidação</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Intuição" class="checkbox" name="pericia" id="pericia">
                                <label for="Intuição">Intuição</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Investigação" class="checkbox" name="pericia" id="pericia">
                                <label for="Investigação">Investigação</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Lidar com animais" class="checkbox" name="pericia" id="pericia">
                                <label for="Lidar com animais">Lidar com animais</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Medicina" class="checkbox" name="pericia" id="pericia">
                                <label for="Medicina">Medicina</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Natureza" class="checkbox" name="pericia" id="pericia">
                                <label for="Natureza">Natureza</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Percepção" class="checkbox" name="pericia" id="pericia">
                                <label for="Percepção">Percepção</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Persuasão" class="checkbox" name="pericia" id="pericia">
                                <label for="Persuasão">Persuasão</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Prestidigitação" class="checkbox" name="pericia" id="pericia">
                                <label for="Prestidigitação">Prestidigitação</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Religião" class="checkbox" name="pericia" id="pericia">
                                <label for="Religião">Religião</label>
                            </div>
                            <div>
                                <input type="checkbox" value="Sobrevivência" class="checkbox" name="pericia" id="pericia">
                                <label for="Sobrevivência">Sobrevivência</label>
                            </div>
                        </div>

                        <br>
                        <div>
                            <p id="pericias"></p>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="">
                                <button name="submit" type="submit" class="btn btn-success">Enviar</button>
                                <button name="submit" type="reset" class="btn btn-danger">Limpar</button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-6 justify-content-center d-flex">
                    <div class="form-group">
                        <div class="align-bottom">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br><br>

                            <button onclick="att('str')" class="btn btn-dark mt-4">🎲Rolar Força🎲</button>
                            <br>
                            <button onclick="att('dex')" class="btn btn-dark mt-5">🎲Rolar Destreza🎲</button>
                            <br>
                            <button onclick="att('con')" class="btn btn-dark mt-5">🎲Rolar Constituição🎲</button>
                            <button onclick="inputers()" class="btn btn-dark mt-5">🎲Rolar Tudo🎲</button>
                            <br>
                            <button onclick="att('int')" class="btn btn-dark mt-5">🎲Rolar Inteligencia🎲</button>
                            <br>
                            <button onclick="att('wis')" class="btn btn-dark mt-5">🎲Rolar Sabedoria🎲</button>
                            <br>
                            <button onclick="att('char')" class="btn btn-dark mt-5">🎲Rolar Carisma🎲</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var atributos = [
            'str',
            'dex',
            'con',
            'int',
            'wis',
            'char'
        ];

        function dado(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        function att(id) {
            return document.getElementById(id).value = dado(3, 18);
        }

        function inputers() {
            var saas = document.getElementsByClassName('att')

            for (let i = 0; i < saas.length; i++) {
                saas[i].value = dado(3, 18);
            }
        }
    </script>
    <script src="pericias.js"></script>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>