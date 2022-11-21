<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $str_payload = file_get_contents('http://universities.hipolabs.com/search?country=brazil');
                $json_payload = json_decode($str_payload);
                foreach ($json_payload as $index => $universidade) {
                    if ($index == $_GET["indice"]) {
                ?>
                        <p>
                            <?php echo $universidade->country?>
                        </p>
                        <p>
                            <?php echo $universidade->domains[0]?>
                        </p>
                        <p>
                            <?php echo $universidade->web_pages[0]?>
                        </p>
                        <p>
                            <?php echo $universidade->name?>
                        </p>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>