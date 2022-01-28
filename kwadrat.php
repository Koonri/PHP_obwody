<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kwadrat.php" method="get">
    Podaj długość boku: <input type="number" name="a">
    <button type="submit">Policz</button>
    </form>
    <form action="kwadrat.php" method="get">
    Podaj długość boku a: <input type="number" name="a">
    Podaj długość boku b: <input type="number" name="b">
    <button type="submit">Policz</button>

    </form>
    <form action="kwadrat.php" method="get">
    Podaj promień: <input type="number" name="promien">
    <button type="submit">Policz</button>
    </form>

    <?php
    if(isset($_REQUEST['a']) && isset($_REQUEST['b']) && !isset($_REQUEST['promien'])) {
        //liczymy prostokąt
        $a = intval($_REQUEST['a']);
        $b = intval($_REQUEST['b']);
        $pole = $a * $b;
        $obwod = 2 * $a + 2 * $b;
        echo "Pole prostokątach o bokach $a i $b wynosi $pole, a jego obwod $obwod <br>";
    } 
    if (isset($_REQUEST['a']) && !isset($_REQUEST['b']) && !isset($_REQUEST['promien'])) {

        //echo '<pre>';
       //var_dump($_REQUEST);
       $a = intval($_REQUEST['a']);
       //Oblicz pole powierzchni
       $pole = $a * $a;;
       //$pole = pow($a,2);
       $obwod = 4 * $a;

       echo "Pole kwadratu o boku $a wynosi $pole a jego obwód $obwod <br>";
    }
    if (!isset($_REQUEST['a']) && !isset($_REQUEST['b']) && isset($_REQUEST['promien'])) {
        $promien = intval($_REQUEST['promien']);

        $pole = pow($promien,2) * pi();
        $obwod = 2 * pi() * $promien;

        echo "Pole koła o promieniu $promien wynosi $pole a jego obwód $obwod";

    }

    ?>
</body>
</html>