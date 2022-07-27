<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Dado</title>

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
                        <a class="nav-link active text-white" aria-current="page" href="ficha.php">Fichas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card text-center justify-content-center d-flex mt-3">
            <div class="card-header bg-dark text-center text-white">Dados</div>
            <div class="card-body">

                <div class="form-group">
                    <label for="text0" class="col-form-label">D4</label>
                    <div class="">
                        <input id="d4" name="d4" type="text" class="form-control">
                        <button onclick="d4()" class="btn btn-dark mt-3">🎲D4🎲</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text0" class="col-form-label mt-5">D6</label>
                    <div class="">
                        <input id="d6" name="d6" type="text" class="form-control">
                        <button onclick="d6()" class="btn btn-dark mt-3">🎲D6🎲</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text0" class="col-form-label mt-5">D8</label>
                    <div class="">
                        <input id="d8" name="d8" type="text" class="form-control">
                        <button onclick="d8()" class="btn btn-dark mt-3">🎲D8🎲</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text0" class="col-form-label mt-5">D10</label>
                    <div class="">
                        <input id="d10" name="d10" type="text" class="form-control">
                        <button onclick="d10()" class="btn btn-dark mt-3">🎲D10🎲</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text0" class="col-form-label mt-5">D12</label>
                    <div class="">
                        <input id="d12" name="d12" type="text" class="form-control">
                        <button onclick="d12()" class="btn btn-dark mt-3">🎲D12🎲</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text0" class="col-form-label mt-5">D20</label>
                    <div class="">
                        <input id="d20" name="d20" type="text" class="form-control">
                        <button onclick="d20()" class="btn btn-dark mt-3">🎲D20🎲</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text0" class="col-form-label mt-5">D100</label>
                    <div class="">
                        <input id="d100" name="d100" type="text" class="form-control">
                        <button onclick="d100()" class="btn btn-dark mt-3">🎲D100🎲</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function d4() {
            return document.getElementById('d4').value = Math.floor(Math.random() * 4) + 1;
        }

        function d6() {
            return document.getElementById('d6').value = Math.floor(Math.random() * 6) + 1;
        }

        function d8() {
            return document.getElementById('d8').value = Math.floor(Math.random() * 8) + 1;
        }

        function d10() {
            return document.getElementById('d10').value = Math.floor(Math.random() * 10) + 1;
        }

        function d12() {
            return document.getElementById('d12').value = Math.floor(Math.random() * 12) + 1;
        }

        function d20() {
            return document.getElementById('d20').value = Math.floor(Math.random() * 20) + 1;
        }

        function d100() {
            return document.getElementById('d100').value = Math.floor(Math.random() * 100) + 1;
        }
    </script>
</body>

</html>