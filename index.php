<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atspėk skaičių</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<!-- Easy: sukurti naują puslapį "Atspėk skaičių". Jame turėtu būti jau klasika tapęs programavimo žaidimas atspėk skaičių.
Sukuriame formą su dviem laukais: Sudėtingumas (lengvas - 3 skaičiai, vidutinis - 5 skaičiai, sunkus - 7 skaičiai) ir Skaičius kurį spėjame. Paspaudus "Žaisti" išrenkamas atsitiktinis skaičius ir nusprendžiama ar mes laimėjome. -->

<body>
    <div class="container w-25">
        <h1 class="my-5 text-center">Atspėk skaičių</h1>

        <form method="POST" action="index.php">

            <div class="alert alert-success" role="alert">
                Sveikiname! Jūs spėjote x ir atspėjote, kad laimingas skaičius bus x
            </div>

            <div class="alert alert-danger" role="alert">
                Deja, teks bandyti dar kartą... Jūs spėjote y, bet laimingas skaičius buvo x
            </div>

            <label for="sudetingumas" class="fw-bold">Sudetingumas</label>
            <select id="sudetingumas" class="form-select form-control" name="sudetingumas">
                <option selected>Pasirinkite sudėtingumą</option>
                <option value="3">Lengvas (3 skaičiai)</option>
                <option value="5">Vidutinis (5 skaičiai)</option>
                <option value="7">Sunkus (7 skaičiai)</option>
            </select>

            <label for="spejimas" class="fw-bold mt-3">Skaičius kūrį spėjate</label>
            <input id="spejimas" type="number" class="form-control" name="spejimas" value="<?php echo isset($_POST["spejimas"]) ? $_POST["spejimas"] : "" ; ?>">

            <button id="zaisti" type="submit" class="btn btn-primary mt-3 w-100" name="patvirtinti">Žaisti</button>

        </form>

    </div>

    <div class="container w-25">

        <?php

            if(isset($_POST["patvirtinti"])) {
                $select_sudetingumas = $_POST["sudetingumas"];

                if ($select_sudetingumas == 3) {
                    $laimingasSkaicius = rand(0, 999);
                } elseif ($select_sudetingumas == 5) {
                    $laimingasSkaicius = rand(0, 99999);
                } elseif ($select_sudetingumas == 7) {
                    $laimingasSkaicius = rand(0, 9999999);
                } else {
                    echo "Pasirinkite sudėtingumo lygį";
                }

            echo $laimingasSkaicius;
            }
        ?>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>