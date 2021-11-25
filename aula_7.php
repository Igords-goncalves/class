<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            height: 50vh;
            background-color: black;
            color: white;
            font-size: 1rem;
        }
    </style>
    <title>Aula 07</title>
</head>
<body>
    <pre>
    <?php 
        require "class_lutador.php";
        require "class_lutas.php";

        $lutador = [1,2,3,4,5,6];

        $lutador[0] = new Lutador (
            "Prety Boy",
            "França",
            31,
            1.75,
            68.9,
            11,
            2,
            1
        );

        $lutador[1] = new Lutador (
            "Putscript",
            "Brasil",
            29,
            1.68,
            57,8,
            14,
            2,
            3,
        );

        $lutador[2] = new Lutador (
            "Snapshadow",
            "EUA",
            35,
            1.65,
            80,9,
            12,
            2,
            1,
        );

        $lutador[3] = new Lutador (
            "Dead Code",
            "Australia",
            28,
            1.93,
            81,6,
            13,
            0,
            2,
        );

        $lutador[4] = new Lutador (
            "Ufcobol",
            "Brasil",
            37,
            1.93,
            81,6,
            13,
            0,
            2,
        );

        $lutador[5] = new Lutador (
            "Nerdaard",
            "EUA",
            30,
            1.81,
            105,7,
            12,
            2,
            4,
        );

        $UEC01 = new Lutas;
        $UEC01->marcarLuta($lutador[0], $lutador[1]);
        $UEC01->lutar($lutador[0], $lutador[1]);

    ?>
    </pre>
</body>
</html>