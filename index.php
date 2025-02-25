<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny nadpis</h1>
    <?php 
        echo "Vypis";
        // echo 'Vypis';
        // echo ("Vypis");
        $meno = "Peter";
        echo "$meno <br>";
        echo "$meno <br>";
        echo $meno. "<br>";
        //var_dump
        var_dump($meno);

        /* <POLIA*/
        $farby = array("cervena","modra","zelena"); //INDEXOVANE POLIA 
        echo $farby[0]; // Vypise: cervena
        echo("<br>");

        foreach($farby as $farba){
            echo "Farba: ". $farba. "<br>";
        }
        foreach($farby as $farba){
        }
        
        //python dictionary kluc : hodnota
        $data = array("Peter" => 25,
                    "Jana" => 30,
                    "Marek" => 20);
        foreach($data as $name => $age) {
            echo "$name ma $age rokov <br>";
        }

        // komentar

        $zviera = array("pes","macka","vtak");
        echo $zviera[1];
        echo("<br>");
        
        foreach($zviera as $zvierata) {
            echo "Zviera: ". $zvierata. "<br>";


        }





        
    

        






    ?>
</body>
</html>
    