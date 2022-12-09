<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, td, tr{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        $arr_frases = [
            "He was all business when he wore his clown suit",
            "The manager of the fruit stand always sat and only sold vegetables",
            "The child’s favorite Christmas gift was the large box her father’s lawnmower came in",
            "Iguanas were falling out of the trees",
            "The body piercing didn't go exactly as he expected",
            "He watched the dancing piglets with panda bear tummies in the swimming pool",
            "I don’t respect anybody who can’t tell the difference between Pepsi and Coke",
            "A good example of a useful vegetable is medicinal rhubarb",
            "I want to buy a onesie… but know it won’t suit me",
            "She finally understood that grief was her love with no place for it to go",
            "I know many children ask for a pony, but I wanted a bicycle with rockets strapped to it",
            "Jim liked driving around town with his hazard lights on",
            "The spa attendant applied the deep cleaning mask to the gentleman’s back",
            "The wooden spoon couldn’t cut but left emotional scars",
            "He dreamed of eating green apples with worms",
            "It dawned on her that others could make her happier, but only she could make herself happy",
            "I was offended by the suggestion that my baby brother was a jewel thief",
            "Pat ordered a ghost pepper pie",
            "The golden retriever loved the fireworks each Fourth of July",
            "His get rich quick scheme was to grow a cactus farm",
            "I only enjoy window shopping when the windows are transparent",
            "Mary realized if her calculator had a history, it would be more embarrassing than her computer browser history",
            "Nothing seemed out of place except the washing machine in the bar",
            "Red is greener than purple, for sure",
            "Jerry liked to look at paintings while eating garlic ice cream",
            "Courage and stupidity were all he had",
            "Douglas figured the best way to succeed was to do the opposite of what he'd been doing all his life",
            "The mysterious diary records the voice",
            "The three-year-old girl ran down the beach as the kite flew behind her",
            "He had accidentally hacked into his company's server."];
        $db_connect = new mysqli("192.168.33.22", "user", "pass", "phpejemplo");

        for ($i = 0; $i < count($arr_frases); $i++) {
            $texto_query = "insert into ejemplo values(" . ($i + 1) . " , \"" . $arr_frases[$i] . "\")";
            $db_connect->query($texto_query);
        }

        $texto_query = 'select * from ejemplo';
        $result = $db_connect->query($texto_query);

        print "<table>";
        foreach ($result->fetch_all() as $array) {

            print "<tr>";
            foreach ($array as $valor) {

                echo "<td>" . $valor . "</td>";
            }
            print "</tr>";
        }
        print "</table>";

        /* $texto_query='delete from ejemplo';
          $db_connect -> query($texto_query); */
        ?>
    </body>
</html>
